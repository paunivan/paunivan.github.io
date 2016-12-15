<?php
$name = $_POST('name');
$subject = $_POST('subject');
$message = $_POST('message');
$_message = "($name) Sends you a message \n ($message)";
try{
mail('paunivan86@gmail.com, $subject, $_message, "From: paunivan@yahoo.com");
echo 'Mail sent';
}catch (Exception $e){
echo 'There is an error: '.$e->getMessage();
}
?>
