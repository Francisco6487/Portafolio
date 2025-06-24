<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
// Otros campos del formulario

$destinatario = 'francisco.dallarizza@gmail.com';
$asunto = 'Nuevo mensaje del formulario';
$mensaje = "Nombre: $nombre\nCorreo: $correo\n"; // Otros campos del formulario

// Enviar el correo electrónico
mail($destinatario, $asunto, $mensaje);
?>