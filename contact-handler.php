<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = new PHPMailer(true);
    try {
$mail->isSMTP();
$mail->Host       = 'smtpout.secureserver.net';
$mail->SMTPAuth   = true;
$mail->Username   = 'info@vacationideas.in';       // your full email
$mail->Password = 'Vactionidea123@-';    // exact webmail password
$mail->SMTPSecure = 'tls';                         // use tls
$mail->Port       = 587;                           // 587 for TLS
                                     // 587 for TLS

        // Email content
        $mail->setFrom('info@vacationideas.in', $_POST['contactname']); // from your domain
        $mail->addAddress('travelbest.vacations@gmail.com');                    // recipient

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
