<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'romshaahlawat@gmail.com';

$email_subject = 'New Contact Form Submission';

$email_body = "User Name : $name. \n".
              "User Email : $email. \n".
              "User Conatct Number : $number. \n".
              "Subject : $subject. \n".
              "User Name : $message. \n";

$to = 'ahlawatromsha5@gmail.com';

$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);

headers("Location: index.html\#contact")

?>
