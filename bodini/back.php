<?php

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asiste = $_POST['asiste'];

// Enviar el correo electrónico
$asunto = "Confirmación de asistencia a la boda";
$mensaje = "Estimado/a $nombre,\n\nGracias por confirmar su asistencia a nuestra boda.\n\nEsperamos contar con su presencia en este día tan especial para nosotros.\n\nAtentamente,\n[Nombre de los novios]";
$headers = "De: [dirección de correo electrónico de los novios]";
mail($email, $asunto, $mensaje, $headers);

// Redirigir al usuario a la página de confirmación
header("Location: confirmacion.php");

?>