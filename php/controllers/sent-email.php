<?php

require_once "../../config.php";
require_once "../models/Connection.php";
require_once "Session.php";
require_once "../../vendor/phpmailer/phpmailer/src/PHPMailer.php";
require_once "../../vendor/phpmailer/phpmailer/src/SMTP.php";
require_once "../../vendor/phpmailer/phpmailer/src/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$connection = new Connection();
$session =  new Session();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $name = clean_input($_POST["inputNombre"]);
    $email = clean_input($_POST["inputEmail"]);
    $message = clean_input($_POST["inputMensaje"]);

    // Verificar campos vacíos
    if (empty($name) || empty($email) || empty($message)) {
        $session->setSession('executeWarning', 'Todos los campos son obligatorios');
        returnActivity();
    }

    // Verificar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $session->setSession('executeWarning', 'Formato de correo electrónico no válido');
        returnActivity();
    }

    // Insertar en la tabla "received"
    $date = date("Y-m-d H:i:s");
    $query = "INSERT INTO received (date, name, email, message) 
            VALUES (?, ?, ?, ?)";
    $stmt = $connection->getConnection()->prepare($query);

    // Vincular parámetros
    $stmt->bind_param("ssss", $date, $name, $email, $message);

    // Ejecutar la consulta
    $result = $stmt->execute();

    if (!$result) {
        $session->setSession('executeWarning', 'Error al guardar la información en la base de datos');
        returnActivity();
    }

    // Cerrar la declaración preparada
    $stmt->close();

    $estructura = getMailStructure($name, $email, $message);

    /* Enviar correo electrónico con PHPMailer */
    try {
        $mail = new PHPMailer(true);

        // Configurar el servidor SMTP
        $mail->isSMTP();
        $mail->Host = mail_server;
        $mail->SMTPAuth = true;
        $mail->Username = email_davidar55;
        $mail->Password = password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Configurar el correo electrónico
        $mail->setFrom(email_davidar55, davidar55);
        $mail->addAddress(contact_email_davidar55, davidar55);
        $mail->isHTML(true);
        $mail->Subject = 'Contacto desde mi portafolio web';
        $mail->Body = $estructura;

        // Enviar el correo electrónico
        $mail->send();

        $session->setSession('executeSuccess', 'Mensaje enviado con éxito');
        returnActivity();
    } catch (Exception $e) {
        $session->setSession('executeWarning', 'Error al enviar el mensaje: ' . $mail->ErrorInfo);
        returnActivity();
    }
} else {
    // Si no es una solicitud POST, redirigir o manejar según sea necesario
    header("Location: 404");
    returnActivity();
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function returnActivity() {
    echo '<script> location.href = "../../home" </script>';
    exit;
}

function getMailStructure($remitente, $email, $message) {
    return '<!DOCTYPE html>
            <html lang="es">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Agradecimiento Canvolt</title>
            </head>
            <body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            
                <!-- Encabezado -->
                <header style="background-color: #003bb9; padding: 20px; text-align: center; color: white;">
                    <img src="https://davidswebsite55.000webhostapp.com/public/images/Logo-Dar55.png" alt="Logo DavidAr55" style="width: 100px; height: auto; position: absolute; top: 20px; left: 20px;">
                    <h2>Nuevo mensaje</h2>
                    <p>Remitente: ' . $remitente . '</p>
                </header>
            
                <!-- Cuerpo del mensaje -->
                <section style="padding: 20px;">
                    <p>' . $message . '</p>
                </section>
            
                <!-- Información sobre el scooter del remitente -->
                <section style="background-color: #f5f5f5; padding: 20px;">
                    <h3>' . $remitente . '</h3>
                    <p>Contactar a ' . $remitente . ': <a href="mailto:' . $email . '">' . $email . '</a></p>
                </section>
            
            </body>
            </html>';
}
