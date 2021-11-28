<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "This message was sent by " . $name . ",\r\n";
$mensaje .= "Her email is: " . $mail . " \r\n";
$mensaje .= "Message: " . $_POST['message'] . " \r\n";
$mensaje .= "Sent " . date('d/m/Y', time());

$para = 'serfaty.samuel90@gmail.com';
$asunto = 'New message';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>