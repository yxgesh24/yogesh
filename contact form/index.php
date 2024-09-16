<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
</head>
<body>

  <div class="container">
    <h1>
      Contact Form
    </h1>

    <form action="" method="post">
      <div class="form-group">
        <input type="text" name="name" placeholder="Enter Name">
      </div>

      <div class="form-group">
        <input type="text" name="email" placeholder="Enter Email"
      </div>

      <div class="form-group">
        <textarea cols="21" rows="5" name="msg" placeholder="message"></textarea>
      </div>

      <input type="submit" name="send" value="send">
    </form>
  </div>
</body>
</html>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['send']))
{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'parvatigaikwad2014@gmail.com';                     //SMTP username
    $mail->Password   = 'kfcq ghnh gsdf gfyq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('parvatigaikwad2014@gmail.com', 'Contact Form');
    $mail->addAddress('spammailyogesh@gmail.com', 'Website');     //Add a recipient
   //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test Contact Form';
    $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Sender msg - $msg";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

