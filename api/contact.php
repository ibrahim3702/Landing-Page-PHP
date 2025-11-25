<?php
// Server-side handler for contact form (Epic 3)
// Basic validation, sanitization, logging. Replace mail() with SMTP library if needed.

session_start();

// Simple CSRF check helper (NOTE: In production use a more robust token storage)
function valid_csrf($token) {
    return hash_equals(hash('sha256', session_id() . 'SECRET_SALT'), $token);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /?error=1#contact');
    exit;
}

// Honeypot (spam trap)
if (!empty($_POST['website'])) {
    // Bot likely
    header('Location: /?error=1#contact');
    exit;
}

$csrf = $_POST['csrf_token'] ?? '';
if (!valid_csrf($csrf)) {
    header('Location: /?error=1#contact');
    exit;
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

// Validate
if ($name === '' || mb_strlen($name) < 2) {
    $errors['name'] = 'Name must be at least 2 characters.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Provide a valid email address.';
}
if ($message === '' || mb_strlen($message) < 10) {
    $errors['message'] = 'Message must be at least 10 characters.';
}

// If errors: store in session to show inline (simpler than query strings)
if ($errors) {
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_values'] = [
        'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
        'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
        'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
    ];
    header('Location: /?error=1#contact');
    exit;
}

// Sanitize for logging (strip tags)
$cleanMessage = preg_replace('/<[^>]*>/', '', $message);
$logLine = date('c') . " | {$name} <{$email}> | " . str_replace(["\r","\n"], ' ', $cleanMessage) . PHP_EOL;

$logFile = __DIR__ . '/messages.log';

try {
    file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX);
} catch (Exception $e) {
    header('Location: /?server=1#contact');
    exit;
}

// Clear session errors/values
unset($_SESSION['form_errors'], $_SESSION['form_values']);

header('Location: /?success=1#contact');
exit;