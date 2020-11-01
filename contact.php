<?php 

$nombre = $_POST['name'];
$mail = $_POST['email'];
$asunto = $_POST['subject'];
$texto = $_POST['message'];

$header = 'From: '. $mail . "\r\n";
$header = "X-Mailer: PHP/" . phpversion() . "\r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\r\n";
$mensaje = "Su email es:  " . $mail . "\r\n";
$mensaje = "Asunto: " . $asunto . "\r\n";
$mensaje = "Mensaje: " . $_POST['message'] . "\r\n";
$mensaje = "Enviado el:  " . date('d/m/Y', time());

$para = 's.a.erolesdiaz@gmail.com';

mail( $para, $asunto, utf8_decode( $mensaje ), $header);

header("Location:index.html");

?>
