<?php
$email_to = 'info@intellis.ca'; //your email
$business = 'Intellis Strategy'; //business name
$name = $_POST['name'];
$email_from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$autoResponse = true; //set to false if you don't want to send an auto reply
$autoResponseSubject = "Thanks!";
$autoResponseMessage = "Hi, thank you testing the JQuery Contact Form Demo.";
$autoResponseHeaders = "From: $business <$email_to>\r\n";
$autoResponseHeaders .= "Reply-To: $business <$email_to>\r\n";

$headers = "From: $name <$email_from>\r\n";
$headers .= "Reply-To: $name <$email_from>\r\n";

if(@mail($email_to, $topic.': '.$subject, $message, $headers)){
 if($autoResponse === true){
  mail($email_from, $autoResponseSubject, $autoResponseMessage, $autoResponseHeaders);
 }
 echo '1';
} else {
 echo '0';
}
?>