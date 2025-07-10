<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = new PHPMailer(true);
    try {
            // recipient

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';

        $mail->Body = "
            <strong>Name:</strong> " . htmlspecialchars($_POST['contactname']) . "<br>
            <strong>Email:</strong> " . htmlspecialchars($_POST['contactemail']) . "<br>
            <strong>City:</strong> " . htmlspecialchars($_POST['contactcity']) . "<br>
            <strong>Phone:</strong> " . htmlspecialchars($_POST['contactphone']) . "<br>
            <strong>Message:</strong><br>" . nl2br(htmlspecialchars($_POST['contactmessage']));

        $mail->addReplyTo($_POST['contactemail'], $_POST['contactname']); // optional

        $mail->send();
                header("Location: /thankyou.php");
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
