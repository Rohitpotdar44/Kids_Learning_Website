<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'rohitpotdar118@gmail.com';                     // SMTP username
    $mail->Password   = 'rohit@2004';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('rohitpotdar118@gmail.com', 'Mailer');
    $mail->addAddress('rohitpotdar118@gmail.com', 'Joe User');     // Add a recipient

    // Content
    $mail->isHTML(true);                                        // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
*/


$to = "rohitpotdar118@gmail.com";
$subject = "Test Email";
$message = "This is a test email.";

// Additional headers
$headers = "From: rohitpotdar118@gmail.com\r\n";
$headers .= "Reply-To: rohitpotdar118@gmail.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Email sending failed.";
}


?>