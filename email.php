<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$email = $_GET['form-email'];
$mensagem = $_GET['form-mensagem'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ercgpsi2023@gmail.com';                     //SMTP username
    $mail->Password   = '#ruizcosta2022';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';


    //Recipients
    $mail->setFrom('ercgpsi2023@gmail.com', 'Remetente');
    $mail->addAddress('ercgpsi2023@gmail.com', 'Destinatário');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $email;
    $mail->Body    = $mensagem;
    $mail->AltBody = $mensagem;

    $mail->send();
    header('Location:index.php?p=contacto&res=ok');
    //echo 'Message has been sent';
} catch (Exception $e) {
    header('Location:index.php?p=contacto&res=erro');
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}