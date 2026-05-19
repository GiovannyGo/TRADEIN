<?php include 'header.php'; ?>

<!-- Precargar la imagen de fondo -->
<link rel="preload" as="image" href="img/valores.jpg" type="image/jpg">

<style>
    /* Estilos consistentes con las otras páginas */
    .valores-hero {
        position: relative;
        overflow: hidden;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #2d2d2d;
    }
    
    /* Imagen de fondo con parallax */
    .valores-bg {
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
    
    .valores-bg.loaded {
        opacity: 1;
    }
    
    /* Overlay oscuro */
    .valores-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    
    /* Contenido del banner */
    .valores-hero .container {
        position: relative;
        z-index: 2;
    }
    
    .valores-hero h1 {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    
    .valores-hero .inline-flex {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
    }
    
    .valores-hero .w-24 {
        background-color: #F97316;
    }
    
    .valores-hero p {
        color: rgba(255,255,255,0.9);
    }
    
    /* Ajuste responsive */
    @media (max-width: 768px) {
        .valores-hero {
            min-height: 40vh;
        }
        .valores-bg {
            background-attachment: scroll;
        }
    }
    
    /* Estilos de las tarjetas */
    .valor-card {
        transition: all 0.3s ease;
        height: 100%;
    }
    .valor-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
    }
    .valor-icon {
        transition: all 0.3s ease;
    }
    .valor-card:hover .valor-icon {
        transform: scale(1.1);
    }
</style>

<!-- ==================== BANNER CON IMAGEN DE FONDO (ESTILO PARALLAX) ==================== -->
<section class="valores-hero">
    <!-- Imagen de fondo -->
    <div id="valoresBg" class="valores-bg" style="background-image: url('img/valores.jpg');"></div>
    <div class="valores-overlay"></div>
    
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-5 py-2 rounded-full text-sm text-white mb-5 border border-white/20">
            <i class="fas fa-sparkle"></i> ✨ Nuestros principios
        </div>
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-5 tracking-tight">
            Nuestros valores
        </h1>
        <div class="w-24 h-1 bg-[#F97316] mx-auto my-5 rounded-full"></div>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto text-white font-light">
            Los 8 principios que guían cada una de nuestras acciones y decisiones
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            
            <!-- Valor 1 - Excelencia (Morado) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-star text-2xl text-purple-600"></i>
                    </div>
                    <div>
                        <span class="text-xs text-purple-600 font-semibold">Valor 1</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Excelencia</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Buscamos la excelencia en cada proyecto y programa que ejecutamos, priorizando la calidad y la eficiencia en todas nuestras acciones.</p>
            </div>
            
            <!-- Valor 2 - Innovación (Verde) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-lightbulb text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <span class="text-xs text-green-600 font-semibold">Valor 2</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Innovación</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Fomentamos la creatividad y la adopción de tecnologías avanzadas para generar soluciones innovadoras que aborden los desafíos más complejos.</p>
            </div>
            
            <!-- Valor 3 - Compromiso Social (Azul) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-heart text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <span class="text-xs text-blue-600 font-semibold">Valor 3</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Compromiso Social</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Nos comprometemos con el desarrollo social, promoviendo la equidad, el respeto y la inclusión en cada iniciativa que emprendemos.</p>
            </div>
            
            <!-- Valor 4 - Integridad (Naranja) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-shield-alt text-2xl text-[#F97316]"></i>
                    </div>
                    <div>
                        <span class="text-xs text-[#F97316] font-semibold">Valor 4</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Integridad</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Actuamos con honestidad, transparencia y ética en todas nuestras interacciones, construyendo relaciones de confianza a largo plazo con nuestros colaboradores y comunidades.</p>
            </div>
            
            <!-- Valor 5 - Colaboración (Morado) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-purple-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-handshake text-2xl text-purple-600"></i>
                    </div>
                    <div>
                        <span class="text-xs text-purple-600 font-semibold">Valor 5</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Colaboración</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Valoramos la colaboración y la asociatividad, trabajando en estrecha relación con nuestros clientes, colaboradores y comunidades para lograr resultados conjuntos y sostenibles.</p>
            </div>
            
            <!-- Valor 6 - Sostenibilidad (Verde) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-leaf text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <span class="text-xs text-green-600 font-semibold">Valor 6</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Sostenibilidad</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Nos comprometemos con prácticas sostenibles, considerando el impacto ambiental y social en cada fase de nuestros proyectos.</p>
            </div>
            
            <!-- Valor 7 - Aprendizaje Continuo (Azul) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-graduation-cap text-2xl text-blue-600"></i>
                    </div>
                    <div>
                        <span class="text-xs text-blue-600 font-semibold">Valor 7</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Aprendizaje Continuo</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Fomentamos un entorno de aprendizaje continuo, impulsando el desarrollo y la capacitación de nuestro equipo para mantenernos a la vanguardia de las tendencias y tecnologías emergentes.</p>
            </div>
            
            <!-- Valor 8 - Mejora Continua (Naranja) -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md valor-card">
                <div class="flex items-center gap-4 mb-3">
                    <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center valor-icon">
                        <i class="fas fa-chart-line text-2xl text-[#F97316]"></i>
                    </div>
                    <div>
                        <span class="text-xs text-[#F97316] font-semibold">Valor 8</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Mejora Continua</h3>
                    </div>
                </div>
                <p class="text-gray-600 leading-relaxed">Siempre evolucionando, buscando la perfección en cada proceso y proyecto, adaptándonos a los cambios y aprendiendo de cada experiencia.</p>
            </div>
            
        </div>
        
        <!-- Frase inspiradora al final -->
        <div class="mt-10 text-center">
            <div class="inline-flex items-center gap-2 bg-[#F97316]/5 px-6 py-3 rounded-full">
                <i class="fas fa-quote-left text-[#F97316] text-sm"></i>
                <p class="text-gray-500 text-sm">Estos 8 valores son la base de nuestra cultura organizacional y guían cada decisión que tomamos</p>
                <i class="fas fa-quote-right text-[#F97316] text-sm"></i>
            </div>
        </div>
        
    </div>
</section>

<!-- Script para carga optimizada de la imagen -->
<script>
    (function() {
        var bgImg = new Image();
        var bgDiv = document.getElementById('valoresBg');
        if (bgImg && bgDiv) {
            bgImg.onload = function() {
                bgDiv.classList.add('loaded');
            };
            bgImg.src = 'img/valores.jpg';
            if (bgImg.complete) {
                bgDiv.classList.add('loaded');
            }
        }
    })();
</script>

<?php include 'footer.php'; ?>