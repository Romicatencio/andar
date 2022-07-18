
<?php

$nombre = $_POST ["nombre"];
$email = $_POST ["email"];
$comentario = $_POST ["comentario"];

$mensaje .= "Este mensaje fue enviado por" .$nombre . ",/r/n";
$mensaje .= "Su email es" .$email. ",/r/n";
$mensaje .= "Su mensaje es:" .$comentario. ",/r/n";
$mensaje .= "Enviado el:" .date ("d, n, Y", time());


$destinatario ="romicatencio@gmail.com";
$asunto = "Este e-mail fue enviado desde andar-consultores";

mail ( $destinatario, $asunto, utf8_decode;($mensaje), $header);

header ( "location: index.html");

?>