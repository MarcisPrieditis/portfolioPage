<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$subject = "Contact Form";
$email_body = "User Name: $name \n".
			  "User Email: $visitor_email \n".
			  "User Message: $message";

$to = "marcispriedza@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";
mail ($to, $email_subject, $email_body, $headers);
header ("Location: index.html");

// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!";
?>