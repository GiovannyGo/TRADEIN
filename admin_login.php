<?php
session_start();

if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
    header('Location: admin_dashboard.php');
    exit();
}

$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Administrador - TRADEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 50%, #0d0d0d 100%);
            min-height: 100vh;
        }
    </style>
</head>
<body class="flex items-center justify-center p-4">

<div class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-8">

    <div class="text-center mb-6">
        <div class="w-20 h-20 mx-auto mb-4">
            <img src="img/logo.jpg" alt="TRADEIN" class="w-full h-full object-cover rounded-full shadow-lg">
        </div>
        <h1 class="text-2xl font-bold text-gray-800">Acceso Administrativo</h1>
        <p class="text-gray-500 text-sm mt-1">Ingresa tus credenciales para continuar</p>
    </div>

    <?php if(isset($_GET['logout'])): ?>
        <div class="mb-4 p-3 bg-green-50 border border-green-200 text-green-700 rounded-xl text-sm text-center">
            Sesión cerrada correctamente
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded-xl text-sm text-center">
            <i class="fas fa-exclamation-triangle"></i> Usuario o contraseña incorrectos
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['error']) && $_GET['error'] == 2): ?>
        <div class="mb-4 p-3 bg-yellow-50 border border-yellow-200 text-yellow-700 rounded-xl text-sm text-center">
            Demasiados intentos. Intenta nuevamente en unos minutos.
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['error']) && $_GET['error'] == 3): ?>
        <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 rounded-xl text-sm text-center">
            Sesión inválida o expirada. Inicia sesión nuevamente.
        </div>
    <?php endif; ?>

    <form action="admin_auth.php" method="POST">
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
        <input type="hidden" name="redirect" value="admin_dashboard.php">

        <div class="mb-4">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Usuario</label>
            <div class="relative">
                <i class="fas fa-user absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="text" name="user" required
                       class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                       placeholder="admin">
            </div>
        </div>

        <div class="mb-6">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Contraseña</label>
            <div class="relative">
                <i class="fas fa-lock absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                <input type="password" name="pass" required
                       class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#F97316]"
                       placeholder="••••••••">
            </div>
        </div>

        <button type="submit" class="w-full bg-gradient-to-r from-[#F97316] to-[#EA580C] text-white py-3 rounded-xl font-semibold hover:from-[#EA580C] hover:to-[#F97316] transition-all duration-300 shadow-md flex items-center justify-center gap-2">
            <i class="fas fa-sign-in-alt"></i> Ingresar al panel
        </button>
    </form>

    <div class="mt-6 text-center">
        <a href="index.php" class="text-sm text-gray-500 hover:text-[#F97316] transition">
            <i class="fas fa-arrow-left"></i> Volver al sitio web
        </a>
    </div>
</div>

</body>
</html>