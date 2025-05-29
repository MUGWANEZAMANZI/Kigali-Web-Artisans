<?php 

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true;
        $mail->Username = 'mmaudace@gmail.com'; // SMTP username
        $mail->Password = 'vuidzvknqlhnbcmy'; // SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('mmaudace@gmail.com', 'Kigali Web Artisans');
        $mail->addAddress($email, $name);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Event Registration Confirmation';
        $mail->Body    = "Dear $name,<br><br>Thank you for registering for the $event event.<br><br>Best regards,<br>Kigali Web Artisans";
        $mail->AltBody = "Dear $name,\n\nThank you for registering for the $event event.\n\nBest regards,\nKigali Web Artisans";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}