<?php
// Esto debe ir al PRINCIPIO, antes de cualquier HTML
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TRADEIN - Fundación para la Transformación Social, Desarrollo e Innovación. Formulación y ejecución de proyectos con impacto tecnológico e innovador en Colombia.">
    <meta name="keywords" content="TRADEIN, fundación, proyectos sociales, innovación, desarrollo sostenible, Cúcuta, Colombia">
    <meta name="author" content="Fundación TRADEIN">
    <title>TRADEIN | Transformación Social, Desarrollo e Innovación</title>
    
    <link rel="icon" type="image/jpeg" href="img/logo.jpg">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'poppins': ['Poppins', 'sans-serif'] },
                    colors: {
                        'tradein-primary': '#1A1A1A',
                        'tradein-secondary': '#F97316',
                        'tradein-accent': '#F97316',
                    }
                }
            }
        }
    </script>
    
    <style>
        html { scroll-behavior: smooth; }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }
        
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        .animate-marquee {
            animation: marquee 25s linear infinite;
            width: fit-content;
        }
        
        .animate-marquee:hover {
            animation-play-state: paused;
        }

        .edit-mode .editable {
            border: 2px dashed #F97316;
            padding: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }
        .edit-mode .editable:hover {
            background-color: rgba(249, 115, 22, 0.1);
        }
        .edit-mode .editable::after {
            content: "✏️ Editar";
            position: absolute;
            top: -25px;
            right: 0;
            background: #F97316;
            color: white;
            font-size: 10px;
            padding: 2px 8px;
            border-radius: 20px;
            font-weight: bold;
        }
        
        /* Botón naranja personalizado */
        .btn-orange {
            background-color: #F97316;
            color: white;
            transition: all 0.3s ease;
        }
        .btn-orange:hover {
            background-color: #EA580C;
            transform: translateY(-2px);
        }
        
        /* Botón outline naranja */
        .btn-outline-orange {
            border: 2px solid #F97316;
            color: #F97316;
            transition: all 0.3s ease;
        }
        .btn-outline-orange:hover {
            background-color: #F97316;
            color: white;
        }
    </style>
</head>
<body class="font-poppins bg-white">

<!-- ==================== MODAL DE COOKIES ==================== -->
<div id="cookiesModal" class="fixed bottom-0 left-0 right-0 z-50 transform transition-transform duration-500 translate-y-full">
    <div class="bg-[#1A1A1A] text-white p-4 shadow-lg border-t-4 border-[#F97316]">
        <div class="container mx-auto px-4 max-w-5xl flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex-1 text-sm">
                <i class="fas fa-cookie-bite text-[#F97316] mr-2"></i>
                <span class="font-semibold">🍪 Uso de cookies</span>
                <p class="text-xs opacity-80 mt-1">Este sitio web utiliza cookies para mejorar tu experiencia. Al continuar navegando, aceptas nuestra <a href="politicas.php" class="underline hover:text-[#F97316]">Política de privacidad</a> y el uso de cookies.</p>
            </div>
            <div class="flex gap-3">
                <button id="aceptarCookies" class="bg-[#F97316] text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-[#EA580C] transition">
                    ✅ Aceptar
                </button>
                <button id="rechazarCookies" class="border border-white px-4 py-2 rounded-lg text-sm hover:bg-white/10 transition">
                    ❌ Rechazar
                </button>
                <a href="politicas.php" class="border border-white px-4 py-2 rounded-lg text-sm hover:bg-white/10 transition">
                    📜 Más info
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function checkCookiesConsent() {
        const consent = localStorage.getItem('cookies_consent');
        const modal = document.getElementById('cookiesModal');
        
        if (!consent) {
            setTimeout(() => {
                modal.classList.remove('translate-y-full');
                modal.classList.add('translate-y-0');
            }, 1000);
        }
    }
    
    document.getElementById('aceptarCookies')?.addEventListener('click', function() {
        localStorage.setItem('cookies_consent', 'accepted');
        document.getElementById('cookiesModal').classList.remove('translate-y-0');
        document.getElementById('cookiesModal').classList.add('translate-y-full');
    });
    
    document.getElementById('rechazarCookies')?.addEventListener('click', function() {
        localStorage.setItem('cookies_consent', 'rejected');
        document.getElementById('cookiesModal').classList.remove('translate-y-0');
        document.getElementById('cookiesModal').classList.add('translate-y-full');
    });
    
    checkCookiesConsent();
</script>

<!-- ==================== HEADER (MENÚ CON SUBMENÚ) ==================== -->
<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo con enlace a inicio -->
        <a href="index.php" class="flex items-center gap-3 hover:opacity-80 transition-opacity">
            <img src="img/logo.jpg" alt="Logo TRADEIN" class="h-12 w-auto object-contain">
        </a>
        
        <button id="menu-toggle" class="md:hidden text-2xl text-[#1A1A1A]"><i class="fas fa-bars"></i></button>
        
        <nav id="menu" class="hidden md:flex flex-col md:flex-row absolute md:relative top-full left-0 w-full md:w-auto bg-white md:bg-transparent shadow-md md:shadow-none p-4 md:p-0 space-y-2 md:space-y-0 md:space-x-6 z-40">
            <a href="index.php" class="menu-link text-gray-700 hover:text-[#F97316] font-medium transition">Inicio</a>
            
            <!-- DROPDOWN NOSOTROS -->
            <div class="relative group">
                <a href="#" class="menu-link text-gray-700 hover:text-[#F97316] font-medium transition flex items-center gap-1">
                    Nosotros <i class="fas fa-chevron-down text-xs transition-transform group-hover:rotate-180"></i>
                </a>
                <div class="absolute left-0 mt-2 w-56 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">
                    <div class="py-2">
                        <a href="nosotros-quienes.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">📌 Quiénes somos</a>
                        <a href="nosotros-mision-vision.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">🎯 Misión y Visión</a>
                        <a href="nosotros-valores.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">💎 Valores</a>
                        <a href="nosotros-estructura.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">🏢 Estructura</a>
                        <a href="nosotros-mapa-procesos.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">🗺️ Mapa de Procesos</a>
                        <a href="nosotros-calidad.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">✅ Política de Calidad</a>
                        <a href="nosotros-certificacion.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-[#F97316] hover:text-white transition">📜 Certificación Legal</a>
                    </div>
                </div>
            </div>
            
            <a href="servicios.php" class="menu-link text-gray-700 hover:text-[#F97316] font-medium transition">Servicios</a>
            <a href="donar.php" class="menu-link text-green-600 hover:text-green-700 font-medium transition">🤝 Donar</a>
            <a href="contacto.php" class="menu-link text-gray-700 hover:text-[#F97316] font-medium transition">Contacto</a>
        </nav>
    </div>
</header>

<script>
    // Menú responsive
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");
    if(toggle && menu) {
        toggle.addEventListener("click", () => menu.classList.toggle("hidden"));
        document.querySelectorAll(".menu-link").forEach(link => {
            link.addEventListener("click", () => { if(window.innerWidth < 768) menu.classList.add("hidden"); });
        });
    }
</script>