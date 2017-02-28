<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
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
	
// Create the email and send the message
$to = 'kontakt@web305.de'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "WEB305 | Kontaktformular:  $name";
$email_body = "Du hast eine Anfrage über WEB305 erhalten.\n\n"."Hier die Details:\n\nName: $name\n\nEmail: $email_address\n\nTel.: $phone\n\nNachricht:\n$message";
$headers = "From: noreply@web305.de\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,utf8_encode($email_subject),utf8_encode($email_body),$headers);
return true;			
?>