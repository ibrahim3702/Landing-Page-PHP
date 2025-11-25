<?php
// Server-side handler for contact form (Stateless for Vercel)

// Redirect Helper: Uses Relative Paths to ensure correct domain/protocol
function redirect($params) {
    header("Location: /" . $params);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('?error=1#contact');
}

// Honeypot check
if (!empty($_POST['website'])) {
    redirect('?error=bot#contact');
}

// Basic inputs
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
if ($name === '' || $email === '' || $message === '') {
    redirect('?error=missing#contact');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect('?error=email#contact');
}

if (mb_strlen($message) < 10) {
    redirect('?error=short#contact');
}

// Sanitize and Log
$cleanMessage = preg_replace('/<[^>]*>/', '', $message);
$logLine = date('c') . " | {$name} <{$email}> | " . str_replace(["\r","\n"], ' ', $cleanMessage) . PHP_EOL;

// Vercel only allows writing to /tmp
$logFile = '/tmp/messages.log';

try {
    @file_put_contents($logFile, $logLine, FILE_APPEND | LOCK_EX);
} catch (Exception $e) {
    // Ignore logging errors on serverless
}

// Success Redirect
redirect('?success=1#contact');