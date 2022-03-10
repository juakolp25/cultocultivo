<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$phone = $_POST['number'];
$message = $_POST['coment'];

$header = 'From: ' . $mail . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Coment-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su mail es: " . $mail . " \r\n";
$message .= "Telefono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['coment'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'juaquingonzalez012@gmail.com';
$asunto = 'Culto cultivo';

mail($para, $asunto, utf8_decode($message), $header);
echo "<script>alert('Correo enviado correctamente')</script>"
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
