<?php
declare(strict_types=1);

// 1. Load Security Headers & Session
require_once __DIR__ . '/includes/security.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 2. Reject non-POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// 3. CSRF Protection
$submittedToken = $_POST['csrf_token'] ?? '';
if (!is_string($submittedToken) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $submittedToken)) {
    header('Location: index.php?status=error');
    exit;
}

// 4. Honeypot Bot Trap
if (!empty($_POST['website_hp'])) {
    // Silently redirect bots without sending email
    header('Location: index.php?status=success');
    exit;
}

// 5. Rate Limiting (Minimum 20 seconds between submissions)
$currentTime = time();
if (isset($_SESSION['last_email_time']) && ($currentTime - (int)$_SESSION['last_email_time'] < 20)) {
    header('Location: index.php?status=error');
    exit;
}

// 6. Input Extraction & Sanitization
$name    = trim((string)($_POST['name'] ?? ''));
$email   = trim((string)($_POST['email'] ?? ''));
$subject = trim((string)($_POST['subject'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

// Prevent Email Header Injection (strip newlines from single-line fields)
$name    = str_replace(["\r", "\n"], '', $name);
$subject = str_replace(["\r", "\n"], '', $subject);

// Validate Field Lengths
if (
    mb_strlen($name) < 2 || mb_strlen($name) > 100 ||
    mb_strlen($subject) < 2 || mb_strlen($subject) > 200 ||
    mb_strlen($message) < 5 || mb_strlen($message) > 4000
) {
    header('Location: index.php?status=error');
    exit;
}

// Validate Email Format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?status=error');
    exit;
}

// 7. Check Configuration & Autoload
if (!file_exists(__DIR__ . '/config.php') || !file_exists(__DIR__ . '/vendor/autoload.php')) {
    header('Location: index.php?status=error');
    exit;
}

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = MAIL_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = MAIL_USERNAME;
    $mail->Password   = MAIL_PASSWORD;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = MAIL_PORT;

    $mail->setFrom('tsaabitaparisya0306@gmail.com', 'Portfolio Website');
    $mail->addAddress('tsaabitaparisya0306@gmail.com');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'Portfolio Contact: ' . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');

    $safeName    = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
    $safeEmail   = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
    $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

    $mail->Body = "
        <h3>Pesan Baru Dari Portfolio Website</h3>
        <p><strong>Nama:</strong> {$safeName}</p>
        <p><strong>Email:</strong> {$safeEmail}</p>
        <p><strong>Subjek:</strong> {$safeSubject}</p>
        <p><strong>Pesan:</strong></p>
        <p>{$safeMessage}</p>
    ";

    $mail->send();

    // Update rate limit timestamp & rotate CSRF token
    $_SESSION['last_email_time'] = $currentTime;
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    header('Location: index.php?status=success');
    exit;

} catch (Exception $e) {
    header('Location: index.php?status=error');
    exit;
}
