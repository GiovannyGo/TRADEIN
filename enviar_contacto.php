<?php
// ========== DATOS QUE LA FUNDACIÓN DEBE CAMBIAR ==========
// ↓↓↓ SOLO CAMBIAR ESTAS 4 LÍNEAS ↓↓↓
$smtp_host     = 'smtp.hostinger.com';      // Servidor SMTP (preguntar al hosting)
$smtp_user     = 'contacto@tufundacion.com'; // Correo electrónico
$smtp_pass     = 'tu-contraseña';            // Contraseña del correo
$correo_destino = 'fundaciontradein@gmail.com'; // Correo destino
// ↑↑↑ SOLO CAMBIAR ESTAS 4 LÍNEAS ↑↑↑
// =========================================================

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Incluir PHPMailer (ajusta la ruta si es necesario)
require_once __DIR__ . '/PHPMailer/src/Exception.php';
require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('Location: contacto.php');
    exit();
}

$nombre = trim(htmlspecialchars($_POST['nombre'] ?? ''));
$correo = trim(htmlspecialchars($_POST['correo'] ?? ''));
$telefono = trim(htmlspecialchars($_POST['telefono'] ?? ''));
$mensaje = trim(htmlspecialchars($_POST['mensaje'] ?? ''));

if (empty($nombre) || empty($correo) || empty($mensaje) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    header("Location: contacto.php?error=1");
    exit();
}

$mail = new PHPMailer(true);

$enviado = false;

// Intentar con SMTP
try {
    $mail->isSMTP();
    $mail->Host       = $smtp_host;
    $mail->SMTPAuth   = true;
    $mail->Username   = $smtp_user;
    $mail->Password   = $smtp_pass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom($smtp_user, 'TRADEIN - Contacto Web');
    $mail->addAddress($correo_destino, 'TRADEIN');
    $mail->addReplyTo($correo, $nombre);

    $mail->isHTML(false);
    $mail->Subject = 'Contacto desde web - TRADEIN';
    $mail->Body    = "========================================\n";
    $mail->Body   .= "MENSAJE DESDE LA PÁGINA WEB\n";
    $mail->Body   .= "========================================\n\n";
    $mail->Body   .= "Nombre: $nombre\n";
    $mail->Body   .= "Correo: $correo\n";
    $mail->Body   .= "Teléfono: " . ($telefono ?: "No especificado") . "\n";
    $mail->Body   .= "Mensaje:\n$mensaje\n\n";
    $mail->Body   .= "========================================\n";
    $mail->Body   .= "Fecha: " . date("d/m/Y H:i:s") . "\n";
    $mail->Body   .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

    $mail->send();
    $enviado = true;
} catch (Exception $e) {
    $enviado = false;
}

// Respaldar con mail() si SMTP falla
if (!$enviado) {
    $asunto = "Contacto desde web - TRADEIN";
    $cuerpo = "========================================\n";
    $cuerpo .= "MENSAJE DESDE LA PÁGINA WEB\n";
    $cuerpo .= "========================================\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo: $correo\n";
    $cuerpo .= "Teléfono: " . ($telefono ?: "No especificado") . "\n";
    $cuerpo .= "Mensaje:\n$mensaje\n\n";
    $cuerpo .= "========================================\n";
    $cuerpo .= "Fecha: " . date("d/m/Y H:i:s") . "\n";
    $cuerpo .= "IP: " . $_SERVER['REMOTE_ADDR'] . "\n";

    $headers = "From: $correo\r\n";
    $headers .= "Reply-To: $correo\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($correo_destino, $asunto, $cuerpo, $headers)) {
        $enviado = true;
    }
}

header("Location: contacto.php?" . ($enviado ? "enviado=ok" : "error=1"));
?>