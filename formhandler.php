<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from="website address";

$email_subject="New Email Submission";
$emial_body="User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Subject: $subject.\n".
"User Message: $message.\n";


$to='siyamkenway@gmail.com';
$headers .= "From: $email_from\r\n";
$headers .= "Reply-To $visitor_email\r\n";

mail($to, $email_subject, $email_body, $headers);

header("Locataion: contact.html")

?>