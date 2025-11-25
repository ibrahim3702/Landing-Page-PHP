<?php
// Server-side handler for contact form
session_start();

// Simple CSRF check helper
function valid_csrf($token) {
    return hash_equals(hash('sha256', session_id() . 'SECRET_SALT'), $token);
}

// Redirect Helper: Uses Relative Paths to prevent Vercel Protocol Issues
function redirect($params) {
    // This redirects to the root (/) with the specific query params and anchor
    header("Location: /" . $params);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('?error=1#contact');
}

// Honeypot
if (!empty($_POST['website'])) {
    redirect('?error=1#contact');
}

$csrf = $_POST['csrf_token'] ?? '';
if (!valid_csrf($csrf)) {
    redirect('?error=1#contact');
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

// If errors
if ($errors) {
    // Note: Sessions are unreliable on Serverless (files are temporary). 
    // Ideally, pass errors via URL params, but for now we keep session logic.
    $_SESSION['form_errors'] = $errors;
    $_SESSION['form_values'] = [
        'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8'),
        'email' => htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
        'message' => htmlspecialchars($message, ENT_QUOTES, 'UTF-8')
    ];
    redirect('?error=1#contact');
}

// Sanitize and Log
$cleanMessage = preg_replace('/<[^>]*>/', '', $message);
$logLine = date('c') . " | {$name} <{$email}> | " . str_replace(["\r","\n"], ' ', $cleanMessage) . PHP_EOL;

// Log to /tmp because the root directory is read-only in Vercel
$logFile = '/tmp/messages.log';

try {
    @file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX);
} catch (Exception $e) {
    // Ignore logging errors
}

// Clear session
unset($_SESSION['form_errors'], $_SESSION['form_values']);

redirect('?success=1#contact');