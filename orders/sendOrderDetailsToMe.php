<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Your Gmail email address
    $mail->Username   = 'mmm845162@gmail.com';

    // Your App Password generated in your Google Account
    $mail->Password = 'hzyh ifgu gaqn cyti';

    // Recipient
    $mail->setFrom('mmm845162@gmail.com', 'Portrait');
    $mail->addAddress("mmm845162@gmail.com");

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'There Is New Order';
    $mail->Body    = '<b>'.$OrderDetails.'</b>';

    $mail->send();
    echo 'Email sent successfully.';
} catch (Exception $e) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
}

?>
