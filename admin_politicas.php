<?php
session_start();
include 'admin_config.php';
if(!isAdmin()) { header('Location: index.php'); exit(); }

// Cargar políticas existentes
$politicasFile = 'data/politicas.json';
$politicas = [];
if (file_exists($politicasFile)) {
    $politicas = json_decode(file_get_contents($politicasFile), true);
    if (!is_array($politicas)) {
        $politicas = [];
    }
}

// Valores por defecto
$defaults = [
    'privacidad_titulo' => 'Política de Privacidad',
    'privacidad_contenido' => '<p>En TRADEIN, nos comprometemos a proteger la privacidad de los usuarios...</p>',
    'datos_titulo' => 'Tratamiento de Datos Personales',
    'datos_contenido' => '<p>La Fundación TRADEIN, identificada con NIT 901.268.815-5...</p>',
    'cookies_titulo' => 'Política de Cookies',
    'cookies_contenido' => '<p>Las cookies son pequeños archivos de texto...</p>',
    'donaciones_titulo' => 'Política de Donaciones',
    'donaciones_contenido' => '<p>En TRADEIN, todas las donaciones son destinadas íntegramente a programas sociales...</p>'
];

foreach ($defaults as $key => $value) {
    if (!isset($politicas[$key])) {
        $politicas[$key] = $value;
    }
}

// Guardar políticas
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [];
    foreach ($defaults as $key => $value) {
        $data[$key] = $_POST[$key] ?? $value;
    }
    
    if (!is_dir('data')) {
        mkdir('data', 0777, true);
    }
    
    file_put_contents($politicasFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    header('Location: admin_politicas.php?guardado=ok');
    exit();
}

$mensaje = '';
if (isset($_GET['guardado']) && $_GET['guardado'] == 'ok') {
    $mensaje = '✅ Políticas guardadas correctamente';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Políticas - TRADEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f3f4f6; }
        .ql-editor { min-height: 200px; }
    </style>
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8 max-w-5xl">
    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <div class="flex justify-between items-center flex-wrap gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#1A1A1A] flex items-center gap-2">
                    <i class="fas fa-file-alt text-[#F97316]"></i> Editar Políticas
                </h1>
                <p class="text-sm text-gray-500 mt-1">Edita las políticas de privacidad, cookies y donaciones</p>
            </div>
            <div class="flex gap-3">
                <a href="admin_dashboard.php" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition">
                    <i class="fas fa-arrow-left"></i> Volver al panel
                </a>
                <a href="politicas.php" class="bg-[#F97316] text-white px-4 py-2 rounded-lg hover:bg-[#EA580C] transition" target="_blank">
                    <i class="fas fa-eye"></i> Ver políticas
                </a>
            </div>
        </div>
    </div>
    
    <?php if($mensaje): ?>
    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
        <i class="fas fa-check-circle"></i> <?php echo $mensaje; ?>
    </div>
    <?php endif; ?>
    
    <form action="" method="POST">
        <!-- Política de Privacidad -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h2 class="text-xl font-bold text-[#1A1A1A] mb-4 border-b pb-2">🔒 Política de Privacidad</h2>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Título</label>
                <input type="text" name="privacidad_titulo" value="<?php echo htmlspecialchars($politicas['privacidad_titulo']); ?>" class="w-full p-3 border rounded-lg focus:outline-none focus:border-[#F97316]">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Contenido</label>
                <div id="editor_privacidad" style="height: 300px;"><?php echo $politicas['privacidad_contenido']; ?></div>
                <textarea name="privacidad_contenido" style="display:none;"></textarea>
            </div>
        </div>
        
        <!-- Tratamiento de Datos -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h2 class="text-xl font-bold text-[#1A1A1A] mb-4 border-b pb-2">📊 Tratamiento de Datos Personales</h2>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Título</label>
                <input type="text" name="datos_titulo" value="<?php echo htmlspecialchars($politicas['datos_titulo']); ?>" class="w-full p-3 border rounded-lg focus:outline-none focus:border-[#F97316]">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Contenido</label>
                <div id="editor_datos" style="height: 300px;"><?php echo $politicas['datos_contenido']; ?></div>
                <textarea name="datos_contenido" style="display:none;"></textarea>
            </div>
        </div>
        
        <!-- Política de Cookies -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h2 class="text-xl font-bold text-[#1A1A1A] mb-4 border-b pb-2">🍪 Política de Cookies</h2>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Título</label>
                <input type="text" name="cookies_titulo" value="<?php echo htmlspecialchars($politicas['cookies_titulo']); ?>" class="w-full p-3 border rounded-lg focus:outline-none focus:border-[#F97316]">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Contenido</label>
                <div id="editor_cookies" style="height: 300px;"><?php echo $politicas['cookies_contenido']; ?></div>
                <textarea name="cookies_contenido" style="display:none;"></textarea>
            </div>
        </div>
        
        <!-- Política de Donaciones -->
        <div class="bg-white rounded-xl shadow-md p-6 mb-6">
            <h2 class="text-xl font-bold text-[#1A1A1A] mb-4 border-b pb-2">🤝 Política de Donaciones</h2>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Título</label>
                <input type="text" name="donaciones_titulo" value="<?php echo htmlspecialchars($politicas['donaciones_titulo']); ?>" class="w-full p-3 border rounded-lg focus:outline-none focus:border-[#F97316]">
            </div>
            <div class="mb-4">
                <label class="block font-semibold mb-2">Contenido</label>
                <div id="editor_donaciones" style="height: 300px;"><?php echo $politicas['donaciones_contenido']; ?></div>
                <textarea name="donaciones_contenido" style="display:none;"></textarea>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-md p-6 flex justify-between items-center">
            <a href="admin_dashboard.php" class="text-gray-500 hover:text-gray-700">← Cancelar</a>
            <button type="submit" class="bg-[#1A1A1A] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#333333] transition">
                <i class="fas fa-save"></i> Guardar todas las políticas
            </button>
        </div>
    </form>
</div>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quillPrivacidad = new Quill('#editor_privacidad', { theme: 'snow' });
    var quillDatos = new Quill('#editor_datos', { theme: 'snow' });
    var quillCookies = new Quill('#editor_cookies', { theme: 'snow' });
    var quillDonaciones = new Quill('#editor_donaciones', { theme: 'snow' });
    
    document.querySelector('form').addEventListener('submit', function() {
        document.querySelector('textarea[name="privacidad_contenido"]').value = quillPrivacidad.root.innerHTML;
        document.querySelector('textarea[name="datos_contenido"]').value = quillDatos.root.innerHTML;
        document.querySelector('textarea[name="cookies_contenido"]').value = quillCookies.root.innerHTML;
        document.querySelector('textarea[name="donaciones_contenido"]').value = quillDonaciones.root.innerHTML;
    });
</script>
</body>
</html>