<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer.php';
require 'vendor/SMTP.php';
require 'vendor/Exception.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mail = new PHPMailer(true);
    try {
        // SMTP config for Bluehost
        $mail->isSMTP();
        $mail->Host       = 'mail.vacationideas.in';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@vacationideas.in';       // Bluehost email
        $mail->Password   = 'Vacationidea123@-';           // Bluehost email password
        $mail->SMTPSecure = 'ssl';                         // Use SSL for port 465
        $mail->Port       = 465;

        // Email content
        $mail->setFrom('info@vacationideas.in', $_POST['contactname']); // from your domain
        $mail->addAddress('anitesh123.na@gmail.com');                    // recipient

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
        header("Location: /contact?success=true");
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
