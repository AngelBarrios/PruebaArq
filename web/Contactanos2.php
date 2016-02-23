<?php
error_reporting(0);
$nombre = $_POST['nombre'];
$correo= $_POST['correoenvia'];
$mensaje=$_POST['mensaje'];
$header = 'From: ' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por : " . $nombre . " \r\n";
$mensaje .= "Su e-mail es : " . $correo. " \r\n";
$mensaje .= "Mensaje : " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el ; " . date('d/m/Y', time());

$para = 'angel_franco94@hotmail.com';
$asunto =  $_POST['asunto'];

mail($para, $asunto, utf8_decode($mensaje), $header);
?>	
<p> mensaje enviado correctamente </p>
<form  method="post" action="home.html">
<input type="submit" value="Regresar al menú principal"/>
</form>