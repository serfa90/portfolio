<?php
$nombre = $_POST['name'];
$apellido = $_POST['lastName']
$mail = $_POST['email'];
$phone = $_POST['phone']
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su celular es: " . $phone . " \r\n";
$mensaje .= "Mensaje: " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$for = 'serfaty.samuel90@gmail.com';
$subject = 'Mensaje de mi sitio web';

mail($for, $subject, utf8_decode($mensaje), $header);

header("Location: https://pensive-bose-8f73e4.netlify.app/");
?>