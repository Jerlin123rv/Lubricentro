<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dirección de correo a la que quieres enviar el mensaje
    $destinatario = "contactolubricentrojhon@gmail.com";

    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n";
    $cuerpo .= "Mensaje: $mensaje\n";

    // Encabezados
    $headers = "From: $email";

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
