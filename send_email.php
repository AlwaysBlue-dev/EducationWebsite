<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mirzaabdullah3637@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'sgvm iiwa wfok wkmn'; // Replace with your Gmail password or app-specific password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('abd.codes3637@gmail.com'); // Replace with your email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <html>
            <head>
                <title>Contact Form Submission</title>
            </head>
            <body>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Message:</strong> {$message}</p>
            </body>
            </html>
        ";

        // Send email
        $mail->send();
        // Redirect to thank you page
        header("Location: http://proexamtakers.infinityfreeapp.com/thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
