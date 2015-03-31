<?php

$to = isset($_POST['to']) ? $_POST['to'] : 'your@email.com';
$sitename = 'Your Website';

error_reporting(E_ERROR);
require_once('email_address_validator.php');

$validator = new EmailAddressValidator;
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';
$website = isset($_POST['website']) ? $_POST['website'] : '';

if($name == '') die('missing_name');
if($email == '') die('missing_email');
if(!$validator->check_email_address($email)) die('invalid_email');
if($message == '') die('missing_message');

if($website != '') $message = $message . "\r\n\r\nWebsite: " . $website;

$subject = '[' . $sitename . '] New contact message from ' . $name . ' ( ' . $email . ' )';
$headers = 'From: ' . $sitename . ' <' . $to . '>\r\nReply-To: ' . $email . '\r\n';

$s = mail($to , $subject , $message , $headers);
echo $s ? 'success' : 'failure';

?>