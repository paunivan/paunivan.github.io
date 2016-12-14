<?php 
$name = $_POST('name');
$email = $_POST('email');
$message = $_POST('message');
$to = paunivan@yahoo.com;
$subject = $_POST('subject');

mail ($to, $subject, $message, "From " . $name);

?>
