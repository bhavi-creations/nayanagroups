<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contactname    = $_POST['contactname'] ?? '';
    $contactemail   = $_POST['contactemail'] ?? '';
    $contactnumber  = $_POST['contactnumber'] ?? '';
    $project_type   = $_POST['project_type'] ?? '';
    $contactsubject = $_POST['contactsubject'] ?? '';
    $contactmessage = $_POST['contactmessage'] ?? '';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'cvarqcchfjpawxvo';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('manimalladi05@gmail.com', 'Nayana Group');
        $mail->addAddress('manimalladi05@gmail.com', 'Nayana Group');

        $mail->addReplyTo($contactemail, $contactname);

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Enquiry - ' . $contactsubject;

        $mail->Body = "
            <h2>New Contact Form Enquiry</h2>

            <p><strong>Name:</strong> {$contactname}</p>
            <p><strong>Email:</strong> {$contactemail}</p>
            <p><strong>Phone:</strong> {$contactnumber}</p>
            <p><strong>Project Type:</strong> {$project_type}</p>
            <p><strong>Subject:</strong> {$contactsubject}</p>
            <p><strong>Message:</strong><br>{$contactmessage}</p>
        ";

        $mail->AltBody = "
            New Contact Form Enquiry

            Name: $contactname
            Email: $contactemail
            Phone: $contactnumber
            Project Type: $project_type
            Subject: $contactsubject
            Message: $contactmessage
        ";

        $mail->send();

        echo '<script>
                alert("Message has been sent successfully.");
                window.location.href="index.php";
              </script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    echo 'Access Denied';
}
?>