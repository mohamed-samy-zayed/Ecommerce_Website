<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';

$mail = new PHPMailer(true);
$msg ;

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
    $mail->addAddress($email);

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Reset Password';
    $mail->Body    = 'Here Is Your Reset Password Link <br><b>'.$ResetLink.'</b><br> Use It To Reset Your Email Password';

    $mail->send();
    echo 'Email sent successfully.';
    $msg = true;
} catch (Exception $e) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
    $msg = $mail->ErrorInfo;
}

?>
