<?php
session_start();
include 'admin_config.php';

if (!isAdmin()) {
    header('Location: admin_login.php?error=3');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {

    $archivo = $_FILES['imagen'];
    $nombre = trim($_POST['nombre'] ?? '');
    $url = trim($_POST['url'] ?? '#');

    if ($nombre === '') {
        header('Location: admin_aliados.php?error=nombre_vacio');
        exit();
    }

    if ($archivo['error'] !== UPLOAD_ERR_OK) {
        header('Location: admin_aliados.php?error=upload');
        exit();
    }

    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
    $tipoArchivo = mime_content_type($archivo['tmp_name']);

    if (!in_array($tipoArchivo, $tiposPermitidos)) {
        header('Location: admin_aliados.php?error=tipo');
        exit();
    }

    $tamanioMaximo = 2 * 1024 * 1024;

    if ($archivo['size'] > $tamanioMaximo) {
        header('Location: admin_aliados.php?error=tamanio');
        exit();
    }

    if (!is_dir('img/aliados')) {
        mkdir('img/aliados', 0777, true);
    }

    if (!is_dir('data')) {
        mkdir('data', 0777, true);
    }

    $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
    $nombreBase = preg_replace('/[^a-zA-Z0-9_-]/', '-', strtolower($nombre));
    $nombreArchivo = $nombreBase . '-' . time() . '.' . $extension;
    $rutaDestino = 'img/aliados/' . $nombreArchivo;

    if (!move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
        header('Location: admin_aliados.php?error=mover');
        exit();
    }

    $aliadosFile = 'data/aliados.json';
    $aliados = [];

    if (file_exists($aliadosFile)) {
        $aliados = json_decode(file_get_contents($aliadosFile), true);

        if (!is_array($aliados)) {
            $aliados = [];
        }
    }

    $aliados[] = [
        'nombre' => htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'),
        'imagen' => $rutaDestino,
        'url' => htmlspecialchars($url ?: '#', ENT_QUOTES, 'UTF-8')
    ];

    $resultado = file_put_contents(
        $aliadosFile,
        json_encode($aliados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    if ($resultado !== false) {
        header('Location: admin_aliados.php?upload=ok');
        exit();
    }

    header('Location: admin_aliados.php?error=guardar');
    exit();
}

header('Location: admin_aliados.php');
exit();
?>