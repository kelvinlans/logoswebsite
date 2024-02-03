<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@.hqjfc.sl.com'

$email_subject = 'new form submission'

$email_body = "User Name: $name.\n".
				"User Email: $vistor_email.\n".
				"Subject: $vistor_email.\n".
				"User Message: $Message.\n";

$to = 'kelvinlans.1991@yaho.com';

$headers = From: "$email_from\r\n";

$headers = Reply-To: "$vistor_email\r\n";

mail($to,$email_subject,$email_body,$headers)

header("location: contact.html");
?>