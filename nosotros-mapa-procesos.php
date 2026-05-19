<?php include 'header.php'; ?>

<!-- Precargar la imagen de fondo -->
<link rel="preload" as="image" href="img/mapa-procesos.jpg" type="image/jpg">

<style>
    /* Estilos consistentes con las otras páginas */
    .mapa-hero {
        position: relative;
        overflow: hidden;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #2d2d2d;
    }
    
    /* Imagen de fondo con parallax */
    .mapa-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        z-index: 0;
    }
    
    .mapa-bg.loaded {
        opacity: 1;
    }
    
    /* Overlay oscuro */
    .mapa-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    
    /* Contenido del banner */
    .mapa-hero .container {
        position: relative;
        z-index: 2;
    }
    
    .mapa-hero h1 {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    
    .mapa-hero .inline-flex {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
    }
    
    .mapa-hero .w-20 {
        background-color: #F97316;
    }
    
    .mapa-hero p {
        color: rgba(255,255,255,0.9);
    }
    
    /* Ajuste responsive */
    @media (max-width: 768px) {
        .mapa-hero {
            min-height: 40vh;
        }
        .mapa-bg {
            background-attachment: scroll;
        }
    }
</style>

<!-- ==================== BANNER CON IMAGEN DE FONDO (ESTILO PARALLAX) ==================== -->
<section class="mapa-hero">
    <!-- Imagen de fondo -->
    <div id="mapaBg" class="mapa-bg" style="background-image: url('img/mapa-procesos.jpg');"></div>
    <div class="mapa-overlay"></div>
    
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full text-sm text-white mb-4">
            <i class="fas fa-sitemap"></i> 🗺️ Nuestra operación
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Mapa de procesos</h1>
        <div class="w-20 h-1 mx-auto my-4 rounded-full"></div>
        <p class="text-lg max-w-2xl mx-auto">Conoce cómo se estructura nuestra operación para garantizar la mejora continua</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- Imagen del mapa de procesos -->
        <div class="mb-12 text-center">
            <img src="img/mapa-de-procesos.jpg" 
                 alt="Mapa de procesos TRADEIN" 
                 class="mx-auto rounded-xl shadow-lg max-w-full h-auto"
                 loading="lazy">
            <p class="text-sm text-gray-500 mt-3">Diagrama de procesos estratégicos, misionales y de evaluación</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-chart-line text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Procesos Estratégicos</h3>
                <ul class="text-left space-y-2 text-sm">
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Direccionamiento estratégico</li>
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Gestión de sistemas integrados</li>
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Visión y Conquista (Gestión Comercial)</li>
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Ingeniería Creativa (Desarrollo del Proyecto)</li>
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Realización Maestra (Liquidación del Proyecto)</li>
                </ul>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-hands-helping text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Procesos Misionales</h3>
                <ul class="text-left space-y-2 text-sm">
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Gestión del talento humano</li>
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Adquisición de bienes y servicios</li>
                </ul>
            </div>
            
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-smile text-white text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-4">Necesidades y expectativas</h3>
                <ul class="text-left space-y-2 text-sm">
                    <li><i class="fas fa-check text-[#F97316] mr-2"></i> Partes interesadas satisfechas</li>
                    <li><i class="fas fa-chart-simple text-[#F97316] mr-2"></i> Medición de satisfacción</li>
                    <li><i class="fas fa-comments text-[#F97316] mr-2"></i> Retroalimentación continua</li>
                </ul>
            </div>
        </div>
        
        <div class="mt-10 text-center">
            <div class="inline-flex flex-wrap justify-center gap-3 text-sm">
                <span class="bg-gray-100 px-4 py-2 rounded-full">📋 Entrada: Requerimientos de las partes interesadas</span>
                <i class="fas fa-arrow-right text-[#F97316] self-center"></i>
                <span class="bg-gray-100 px-4 py-2 rounded-full">⚙️ Procesos (Estratégicos + Misionales)</span>
                <i class="fas fa-arrow-right text-[#F97316] self-center"></i>
                <span class="bg-gray-100 px-4 py-2 rounded-full">✅ Salida: Partes interesadas satisfechas</span>
            </div>
        </div>
        
    </div>
</section>

<!-- Script para carga optimizada de la imagen -->
<script>
    (function() {
        var bgImg = new Image();
        var bgDiv = document.getElementById('mapaBg');
        if (bgImg && bgDiv) {
            bgImg.onload = function() {
                bgDiv.classList.add('loaded');
            };
            bgImg.src = 'img/mapa-procesos.jpg';
            if (bgImg.complete) {
                bgDiv.classList.add('loaded');
            }
        }
    })();
</script>

<?php include 'footer.php'; ?>