<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = 'tsaabitaparisya0306@gmail.com';

    $mail->Password = 'nybl qyfv ulnl altu';

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = 587;

    $mail->setFrom(
        'tsaabitaparisya0306@gmail.com',
        'Portfolio Website'
    );

    $mail->addAddress(
        'tsaabitaparisya0306@gmail.com'
    );

    $mail->addReplyTo(
        $email,
        $name
    );

    $mail->isHTML(true);

    $mail->Subject = "Portfolio Contact : $subject";

    $mail->Body = "
        <h3>Pesan Baru Dari Portfolio</h3>

        <p><strong>Nama:</strong> {$name}</p>

        <p><strong>Email:</strong> {$email}</p>

        <p><strong>Subjek:</strong> {$subject}</p>

        <p><strong>Pesan:</strong></p>

        <p>{$message}</p>
    ";

    $mail->send();

    header("Location: index.php?status=success");

} catch (Exception $e) {

    header("Location: index.php?status=error");
}