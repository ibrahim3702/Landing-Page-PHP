<?php
// Server-side handler for AJAX contact form
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

// Honeypot check
if (!empty($_POST['website'])) {
    echo json_encode(['ok' => false, 'error' => 'bot']);
    exit;
}

// Basic inputs
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation
if ($name === '' || $email === '' || $message === '') {
    echo json_encode(['ok' => false, 'error' => 'missing']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['ok' => false, 'error' => 'email']);
    exit;
}

if (mb_strlen($message) < 10) {
    echo json_encode(['ok' => false, 'error' => 'short']);
    exit;
}

// Sanitize and Log
$cleanMessage = preg_replace('/<[^>]*>/', '', $message);
$logLine = date('c') . " | {$name} <{$email}> | " . str_replace(["\r","\n"], ' ', $cleanMessage) . PHP_EOL;

// Vercel /tmp logging (Best effort)
try {
    @file_put_contents('/tmp/messages.log', $logLine, FILE_APPEND | LOCK_EX);
} catch (Exception $e) { }

// Return JSON Success
echo json_encode(['ok' => true]);
exit;