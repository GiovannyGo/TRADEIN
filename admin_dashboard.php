<?php
session_start();
include 'admin_config.php';

if(!isAdmin()) {
    header('Location: admin_login.php?error=3');
    exit();
}

// Para la hora y fecha dinámica
date_default_timezone_set('America/Bogota');
$fecha_actual = date('l, d \d\e F \d\e Y');
$hora_actual = date('h:i A');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración - TRADEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #f5f7fa 0%, #e9edf2 100%); }
        .dashboard-card {
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .dashboard-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 25px -12px rgba(0,0,0,0.15);
            border-color: #F97316;
        }
        .gradient-bg {
            background: linear-gradient(135deg, #1A1A1A 0%, #2d2d2d 100%);
        }
    </style>
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8 max-w-7xl">

    <!-- Encabezado con logo y bienvenida -->
    <div class="gradient-bg rounded-2xl shadow-xl overflow-hidden mb-8">
        <div class="flex flex-col md:flex-row justify-between items-center p-6 md:p-8">
            <div class="flex items-center gap-4 mb-4 md:mb-0">
                <img src="img/logo.jpg" alt="Logo TRADEIN" class="h-16 w-16 rounded-full border-4 border-[#F97316] shadow-lg object-cover bg-white p-1">
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Panel de Administración</h1>
                    <p class="text-white/80 text-sm mt-1">Gestión completa del contenido de la fundación</p>
                </div>
            </div>
            <div class="flex gap-3">
                <a href="../index.php" target="_blank" class="bg-white/10 backdrop-blur-sm text-white px-5 py-2 rounded-xl hover:bg-white/20 transition flex items-center gap-2">
                    <i class="fas fa-eye"></i> Ver sitio
                </a>
                <a href="admin_logout.php" class="bg-red-600 text-white px-5 py-2 rounded-xl hover:bg-red-700 transition flex items-center gap-2">
                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                </a>
            </div>
        </div>
        <!-- Barra de estado con fecha, hora y admin -->
        <div class="bg-black/30 px-6 py-3 flex flex-wrap justify-between items-center text-white/80 text-sm">
            <div class="flex items-center gap-4">
                <span><i class="fas fa-user-circle text-[#F97316] mr-1"></i> <?php echo htmlspecialchars($_SESSION['admin_user'] ?? 'Admin'); ?></span>
                <span><i class="fas fa-shield-alt text-green-400 mr-1"></i> Sesión segura</span>
                <span><i class="fas fa-network-wired"></i> IP: <?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']); ?></span>
            </div>
            <div class="flex gap-4">
                <span><i class="far fa-calendar-alt text-[#F97316] mr-1"></i> <?php echo $fecha_actual; ?></span>
                <span><i class="far fa-clock text-[#F97316] mr-1"></i> <?php echo $hora_actual; ?></span>
                <span><i class="fas fa-history"></i> Última actividad: <?php echo date('H:i:s', $_SESSION['admin_login_time']); ?></span>
            </div>
        </div>
    </div>

    <!-- Tarjetas de herramientas -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Editor de Textos -->
        <a href="admin_editor.php" class="dashboard-card bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 group">
            <div class="w-20 h-20 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#F97316] transition-all duration-300">
                <i class="fas fa-edit text-3xl text-orange-600 group-hover:text-white transition-all duration-300"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Editor de Textos</h3>
            <p class="text-sm text-gray-500">Edita todos los textos de la página web</p>
            <div class="mt-4 text-[#F97316] text-sm font-semibold opacity-0 group-hover:opacity-100 transition">Configurar <i class="fas fa-arrow-right ml-1"></i></div>
        </a>

        <!-- Aliados Estratégicos -->
        <a href="admin_aliados.php" class="dashboard-card bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 group">
            <div class="w-20 h-20 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#F97316] transition-all duration-300">
                <i class="fas fa-handshake text-3xl text-purple-600 group-hover:text-white transition-all duration-300"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Aliados Estratégicos</h3>
            <p class="text-sm text-gray-500">Agrega, edita o elimina logos de aliados</p>
            <div class="mt-4 text-[#F97316] text-sm font-semibold opacity-0 group-hover:opacity-100 transition">Configurar <i class="fas fa-arrow-right ml-1"></i></div>
        </a>

        <!-- Gestor de Banners (nuevo sistema) 
        <a href="admin_banners.php" class="dashboard-card bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition-all duration-300 group">
            <div class="w-20 h-20 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-[#F97316] transition-all duration-300">
                <i class="fas fa-images text-3xl text-green-600 group-hover:text-white transition-all duration-300"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Gestor de Banners</h3>
            <p class="text-sm text-gray-500">Administra las imágenes de fondo de cada sección</p>
            <div class="mt-4 text-[#F97316] text-sm font-semibold opacity-0 group-hover:opacity-100 transition">Configurar <i class="fas fa-arrow-right ml-1"></i></div>
        </a>-->

    </div>

    <!-- Pie del dashboard (información adicional) -->
    <div class="mt-8 text-center text-sm text-gray-500">
        <div class="bg-white/70 backdrop-blur-sm rounded-xl p-4 inline-block mx-auto shadow-sm">
            <i class="fas fa-code text-[#F97316] mr-1"></i> Sistema de administración TRADEIN v2.0
            <span class="mx-2">•</span>
            <i class="fas fa-database"></i> Datos almacenados en JSON
            <span class="mx-2">•</span>
            <i class="fas fa-lock"></i> Conexión segura
        </div>
    </div>

</div>
</body>
</html>