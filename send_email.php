<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : 'New Form Submission';
    $message = htmlspecialchars($_POST['message']);
    // $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : '';
    // $referral = isset($_POST['referral']) ? htmlspecialchars($_POST['referral']) : '';

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.titan.email'; // Titan Email SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'info@allexamsdone.com'; // Your Titan Email address
        $mail->Password = 'aJ%VObT7^fi&E_X'; // Your Titan Email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Encryption method
        $mail->Port = 587; // Titan Email SMTP port

        // Recipients
        $mail->setFrom('info@allexamsdone.com', 'AllExamsDone'); // Your company's email address
        $mail->addAddress('info@allexamsdone.com'); // Your company's email address
        $mail->addReplyTo($email, $name); // Add the form submitter's email as Reply-To

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "
            <html>
            <head>
                <title>{$subject}</title>
            </head>
            <body>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Subject:</strong> {$subject}</p>";
                
                
        if ($message) {
            $mail->Body .= "<p><strong>Message:</strong> {$message}</p>";
       }
        // if ($referral) {
        //     $mail->Body .= "<p><strong>Referral:</strong> {$referral}</p>";
        // }
        
        $mail->Body .= "
            </body>
            </html>
        ";

        // Send email
        $mail->send();

        // Redirect to thank you page or index
        header("Location: thank-you.php");
        exit();
    } catch (Exception $e) {
        echo "Sorry, there was an error sending your message. Please try again later. Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>