<?php
session_start();
include 'admin_config.php';

if (!isAdmin()) {
    header('Location: admin_login.php?error=3');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!is_dir('data')) {
        mkdir('data', 0777, true);
    }

    $archivo = 'data/textos.json';
    $textosActuales = [];

    if (file_exists($archivo)) {
        $textosActuales = json_decode(file_get_contents($archivo), true);

        if (!is_array($textosActuales)) {
            $textosActuales = [];
        }
    }

    foreach ($_POST as $clave => $valor) {
        $textosActuales[$clave] = $valor;
    }

    $resultado = file_put_contents(
        $archivo,
        json_encode($textosActuales, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    if ($resultado !== false) {
        header('Location: admin_editor.php?guardado=ok');
        exit();
    }

    header('Location: admin_editor.php?error=guardar');
    exit();
}

header('Location: admin_editor.php');
exit();
?>