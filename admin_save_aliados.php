<?php
session_start();
include 'admin_config.php';

if (!isAdmin()) {
    header('Location: admin_login.php?error=3');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombres = $_POST['nombre'] ?? [];
    $imagenes = $_POST['imagen'] ?? [];
    $urls = $_POST['url'] ?? [];

    $aliados = [];

    for ($i = 0; $i < count($nombres); $i++) {
        $nombre = trim($nombres[$i] ?? '');
        $imagen = trim($imagenes[$i] ?? '');
        $url = trim($urls[$i] ?? '#');

        if ($nombre !== '') {
            $aliados[] = [
                'nombre' => htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'),
                'imagen' => htmlspecialchars($imagen, ENT_QUOTES, 'UTF-8'),
                'url' => htmlspecialchars($url ?: '#', ENT_QUOTES, 'UTF-8')
            ];
        }
    }

    if (!is_dir('data')) {
        mkdir('data', 0777, true);
    }

    $resultado = file_put_contents(
        'data/aliados.json',
        json_encode($aliados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    if ($resultado !== false) {
        header('Location: admin_aliados.php?guardado=ok');
        exit();
    }

    header('Location: admin_aliados.php?error=guardar');
    exit();
}

header('Location: admin_aliados.php');
exit();
?>