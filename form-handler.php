<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'info@yourwebsite.com';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
              "user email: $visitor_email.\n".
              "subject: $subject.\n".
              "user message: $message.\n".

$to = "iamyogesh2005@gmail.com"

$headers = "From: $email_from \r\n"

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

?>