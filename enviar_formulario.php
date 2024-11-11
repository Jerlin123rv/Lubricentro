<?php

$destinatario = "tu-email@ejemplo.com"; 
$asunto = "Nuevo mensaje desde Lubricentro Jhon";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$cuerpo = "Nombre: $nombre\n";
$cuerpo .= "Correo: $email\n";
$cuerpo .= "Mensaje:\n$mensaje\n";

$headers = "From: $email";

if(mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "Mensaje enviado correctamente.";
} else {
    echo "Hubo un error al enviar el mensaje. Intenta nuevamente.";
}
?>
