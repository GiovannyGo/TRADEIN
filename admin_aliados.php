<?php
session_start();
include 'admin_config.php';

if (!isAdmin()) {
    header('Location: admin_login.php?error=3');
    exit();
}

$archivo = 'data/aliados.json';
$aliados = [];

if (file_exists($archivo)) {
    $aliados = json_decode(file_get_contents($archivo), true);
    if (!is_array($aliados)) $aliados = [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aliados Estratégicos - TRADEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8 max-w-7xl">

    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <div class="flex justify-between items-center flex-wrap gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#1A1A1A]">
                    <i class="fas fa-handshake text-[#F97316]"></i> Aliados Estratégicos
                </h1>
                <p class="text-sm text-gray-500 mt-1">Agrega, edita o elimina aliados de la página web</p>
            </div>
            <a href="admin_dashboard.php" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition">
                <i class="fas fa-arrow-left"></i> Volver
            </a>
        </div>
    </div>

    <!-- ========== MENSAJES DE ÉXITO / ERROR ========== -->
    <?php if (isset($_GET['upload']) && $_GET['upload'] === 'ok'): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-4">
            <i class="fas fa-check-circle"></i> ✅ Aliado agregado correctamente.
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['guardado']) && $_GET['guardado'] === 'ok'): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-4">
            <i class="fas fa-check-circle"></i> ✅ Cambios guardados correctamente.
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['eliminado']) && $_GET['eliminado'] === 'ok'): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-4">
            <i class="fas fa-check-circle"></i> ✅ Aliado eliminado correctamente.
        </div>
    <?php endif; ?>

    <?php if (isset($_GET['error'])): ?>
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-lg mb-4">
            <i class="fas fa-exclamation-triangle"></i> ❌ Error: <?php echo htmlspecialchars($_GET['error']); ?>
        </div>
    <?php endif; ?>

    <!-- ========== FORMULARIO PARA AGREGAR NUEVO ALIADO ========== -->
    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <h2 class="text-xl font-bold mb-4">Agregar nuevo aliado</h2>

        <form action="admin_upload_aliado.php" method="POST" enctype="multipart/form-data" class="grid md:grid-cols-3 gap-4">
            <input type="text" name="nombre" placeholder="Nombre del aliado" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
            <input type="text" name="url" placeholder="URL del aliado" value="#" class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
            <input type="file" name="imagen" accept="image/*" required class="border p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">

            <div class="md:col-span-3">
                <button type="submit" class="bg-[#F97316] text-white px-6 py-3 rounded-lg hover:bg-[#EA580C] transition">
                    <i class="fas fa-upload"></i> Subir aliado
                </button>
            </div>
        </form>
    </div>

    <!-- ========== LISTADO DE ALIADOS ========== -->
    <div class="bg-white rounded-xl shadow-md p-6">
        <h2 class="text-xl font-bold mb-4">Aliados registrados</h2>

        <form action="admin_save_aliados.php" method="POST">
            <div class="space-y-4">

                <?php if (empty($aliados)): ?>
                    <p class="text-gray-500">No hay aliados registrados todavía.</p>
                <?php endif; ?>

                <?php foreach ($aliados as $indice => $aliado): ?>
                    <div class="grid md:grid-cols-4 gap-4 border rounded-lg p-4 items-center bg-gray-50">
                        <div>
                            <label class="text-xs text-gray-500">Nombre</label>
                            <input type="text" name="nombre[]" value="<?php echo htmlspecialchars($aliado['nombre'] ?? ''); ?>" class="w-full border p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                        </div>

                        <div>
                            <label class="text-xs text-gray-500">Imagen (ruta)</label>
                            <input type="text" name="imagen[]" value="<?php echo htmlspecialchars($aliado['imagen'] ?? ''); ?>" class="w-full border p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                        </div>

                        <div>
                            <label class="text-xs text-gray-500">URL</label>
                            <input type="text" name="url[]" value="<?php echo htmlspecialchars($aliado['url'] ?? '#'); ?>" class="w-full border p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                        </div>

                        <div class="flex flex-col items-center gap-2">
                            <?php if (!empty($aliado['imagen']) && file_exists($aliado['imagen'])): ?>
                                <img src="<?php echo htmlspecialchars($aliado['imagen']); ?>" class="h-16 w-auto object-contain border rounded">
                            <?php else: ?>
                                <span class="text-xs text-gray-400">Imagen no encontrada</span>
                            <?php endif; ?>

                            <!-- Botón eliminar individual -->
                            <button type="button" onclick="eliminarAliado(<?php echo $indice; ?>)" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition text-sm">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

            <button type="submit" class="mt-6 bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                <i class="fas fa-save"></i> Guardar cambios
            </button>
        </form>
    </div>

</div>

<script>
    function eliminarAliado(indice) {
        if (confirm('¿Está seguro de eliminar este aliado? Esta acción no se puede deshacer.')) {
            // Crear un formulario dinámico para enviar por POST
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'admin_eliminar_aliado.php';
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'indice';
            input.value = indice;
            form.appendChild(input);
            document.body.appendChild(form);
            form.submit();
        }
    }
</script>

</body>
</html>