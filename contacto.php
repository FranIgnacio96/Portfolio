<?php
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';

if (isset($_POST['send'])) {
  if (!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'fran96meli@hotmail.com';
    $mail->Password = '123pasword456';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('fran96meli@hotmail.com', 'Portfolio');
    $mail->addAddress('fran96meli@gmail.com', 'Propio');

    $mail->isHTML(true);
    $mail->Subject = 'Formulario de Contacto';
    $mail->Body = 'Nombre: ' . $nombre . '<br>' . 'Teléfono: ' . $telefono . '<br>' . 'Email: ' . $email . '<br>' . 'Mensaje: ' . $mensaje;
    $mail->send();
  }
}
