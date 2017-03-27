<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
$to = 'phsfirstrobotics@gmail.com.com';
$email_subject = "FalconsFIRST.com Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@falconsfirst.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

//sends to team email
$to = 'phsfirstrobotics@gmail.com';
$email_subject = "FalconsFIRST.com Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message\n\nIn order to reply, you must be logged into phsfirstrobotics@gmail.com";
$headers = "From: noreply@falconsfirst.com\n";
mail($to,$email_subject,$email_body,$headers);

$to = $email_address;
$email_body = "Thank you for contacting PHS Falcons FIRST. We will get back to you as soon as possible from the address phsfirstrobotics@gmail.com. Here are the details of your message:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@falconsfirst.com\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>