<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = true;
    $mail->Username = 'root';
    $mail->Password = '';
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587;

    // Recipients
    $mail->setFrom('sender@example.com', 'Sender Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');

    // Content
    $mail->isHTML(false); // Set email format to plain text
    $mail->Subject = 'Test Email';
    $mail->Body = 'This is a test email sent using PHPMailer';

    $mail->send();
    echo 'Email sent successfully!';
} catch (Exception $e) {
    echo 'Failed to send email. Error: ', $mail->ErrorInfo;
}
?>
