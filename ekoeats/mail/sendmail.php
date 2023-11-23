<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 
// function sendmail($email){
//     $sql= "SELECT * FROM taikhoan WHERE email='$email' " ;
  

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';





$mail = new PHPMailer(true);
 
try {
    //Server settings
    $mail->SMTPDebug = 0;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'thulanp55@gmail.com';// SMTP username
    $mail->Password = 'ytfu eudh auyg ueld'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
 
    //Recipients
    $mail->setFrom('thulanp55@gmail.com', 'Mailer');
    $mail->addAddress('thulanp55@gmail.com', 'Joe User'); // Add a recipient
    // $mail->addAddress('ellen@example.com'); // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('thulanp55@gmail.com');
    // $mail->addBCC('bcc@example.com');
 
    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name
 
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'EKO EATS xin chao';
    $mail->Body = 'Cảm ơn bạn đã đặt hàng';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>