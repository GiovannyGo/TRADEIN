<?php
session_start();
include 'admin_config.php';

if (!isAdmin()) {
    header('Location: admin_login.php?error=3');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['indice'])) {
    header('Location: admin_aliados.php');
    exit();
}

$indice = (int)$_POST['indice'];
$archivo = 'data/aliados.json';
$aliados = [];

if (file_exists($archivo)) {
    $aliados = json_decode(file_get_contents($archivo), true);
    if (!is_array($aliados)) $aliados = [];
}

if (!isset($aliados[$indice])) {
    header('Location: admin_aliados.php?error=No se encontró el aliado');
    exit();
}

// Obtener la ruta de la imagen para eliminarla del servidor
$imagenAEliminar = $aliados[$indice]['imagen'] ?? '';

// Eliminar del array
array_splice($aliados, $indice, 1);

// Guardar el archivo JSON actualizado
$resultado = file_put_contents(
    $archivo,
    json_encode($aliados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

if ($resultado !== false) {
    // Si la imagen existe en el servidor, la eliminamos
    if (!empty($imagenAEliminar) && file_exists($imagenAEliminar)) {
        unlink($imagenAEliminar);
    }
    header('Location: admin_aliados.php?eliminado=ok');
    exit();
}

header('Location: admin_aliados.php?error=No se pudo eliminar el aliado');
exit();
?>