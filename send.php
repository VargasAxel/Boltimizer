<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';  // fixed typo
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // fixed: was 'smtp@gmail.com'
        $mail->SMTPAuth = true;
        $mail->Username = 'axelv7247@gmail.com'; // your Gmail
        $mail->Password = 'niex bzyx hilx bypo'; // your app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Sender and recipient
        $mail->setFrom('axelv7247@gmail.com', 'Boltimizer');
        $mail->addAddress('jamesaxel62@gmail.com');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];

        $email = $_POST["email"];
        $contact_number = $_POST["contact_number"];
        $message = $_POST["message"];

        // Combine them into one body message
        $mail->Body = nl2br(
            "Email: " . $email . "\n" .
                "Contact Number: " . $contact_number . "\n\n" .
                "Message:\n" . $message
        );


        $mail->send();

        echo "<script>
            alert('Email Sent Successfully!');
            window.location.href = 'index.php';
        </script>";
    } catch (Exception $e) {
        echo "<script>
            alert('Failed to send message. Error: " . $mail->ErrorInfo . "');
            window.history.back();
        </script>";
    }
}
