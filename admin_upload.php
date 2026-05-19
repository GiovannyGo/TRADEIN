<?php
include 'admin_config.php';

// Verificar que el usuario sea administrador
if (!isAdmin()) { 
    header('Location: index.php'); 
    exit(); 
}

// Verificar que se haya enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['imagen'])) {
    
    $archivo = $_FILES['imagen'];
    $nombre = trim($_POST['nombre'] ?? '');
    $url = trim($_POST['url'] ?? '#');
    
    // Validar que se haya ingresado un nombre
    if (empty($nombre)) {
        header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?error=nombre_vacio');
        exit();
    }
    
    // Validar que no haya error en la subida
    if ($archivo['error'] !== UPLOAD_ERR_OK) {
        header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?error=upload');
        exit();
    }
    
    // Validar tipo de archivo (solo imágenes)
    $tiposPermitidos = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
    $tipoArchivo = mime_content_type($archivo['tmp_name']);
    
    if (!in_array($tipoArchivo, $tiposPermitidos)) {
        header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?error=tipo');
        exit();
    }
    
    // Validar tamaño máximo (2MB)
    $tamanioMaximo = 2 * 1024 * 1024; // 2MB
    if ($archivo['size'] > $tamanioMaximo) {
        header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?error=tamanio');
        exit();
    }
    
    // Generar nombre seguro para el archivo
    $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
    $nombreArchivo = preg_replace('/[^a-zA-Z0-9_-]/', '', str_replace(' ', '-', $nombre));
    $nombreArchivo = strtolower($nombreArchivo) . '.' . $extension;
    $rutaDestino = 'img/aliados/' . $nombreArchivo;
    
    // Crear carpeta si no existe
    if (!is_dir('img/aliados')) {
        mkdir('img/aliados', 0777, true);
    }
    
    // Mover el archivo
    if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
        
        // Cargar aliados existentes
        $aliadosFile = 'data/aliados.json';
        $aliados = [];
        
        if (file_exists($aliadosFile)) {
            $aliados = json_decode(file_get_contents($aliadosFile), true);
            if (!is_array($aliados)) {
                $aliados = [];
            }
        }
        
        // Agregar nuevo aliado
        $nuevoAliado = [
            'nombre' => htmlspecialchars($nombre),
            'imagen' => $rutaDestino,
            'url' => htmlspecialchars($url)
        ];
        
        $aliados[] = $nuevoAliado;
        
        // Guardar en archivo JSON
        if (file_put_contents($aliadosFile, json_encode($aliados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
            header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?upload=ok');
        } else {
            header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?error=guardar');
        }
    } else {
        header('Location: ' . ($_POST['redirect'] ?? 'admin_aliados.php') . '?error=mover');
    }
} else {
    // Si alguien accede directamente sin POST
    header('Location: admin_aliados.php');
}
?>