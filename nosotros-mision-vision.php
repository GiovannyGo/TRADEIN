<?php include 'header.php'; ?>

<!-- Precargar la imagen de fondo -->
<link rel="preload" as="image" href="img/mision-y-vision.png" type="image/png">

<style>
    /* Estilos consistentes con las otras páginas */
    .mision-hero {
        position: relative;
        overflow: hidden;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #2d2d2d;
    }
    
    /* Imagen de fondo */
    .mision-bg {
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
    
    .mision-bg.loaded {
        opacity: 1;
    }
    
    /* Overlay oscuro */
    .mision-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    
    /* Contenido del banner */
    .mision-hero .container {
        position: relative;
        z-index: 2;
    }
    
    /* Título */
    .mision-hero h1 {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    
    .mision-hero .inline-flex {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
    }
    
    .mision-hero .w-20 {
        background-color: #F97316;
    }
    
    .mision-hero p {
        color: rgba(255,255,255,0.9);
    }
    
    /* Ajuste responsive */
    @media (max-width: 768px) {
        .mision-hero {
            min-height: 40vh;
        }
        .mision-bg {
            background-attachment: scroll;
        }
    }
    
    /* Estilos de las tarjetas (sin cambios) */
    .mision-card, .vision-card {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    .mision-card:hover, .vision-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
    }
    .quote-icon {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 4rem;
        opacity: 0.1;
        pointer-events: none;
    }
    .mision-card .quote-icon {
        color: #8B5CF6;
    }
    .vision-card .quote-icon {
        color: #10B981;
    }
</style>

<!-- ==================== BANNER CON IMAGEN DE FONDO ==================== -->
<section class="mision-hero">
    <!-- Imagen de fondo -->
    <div id="misionBg" class="mision-bg" style="background-image: url('img/mision-y-vision.png');"></div>
    <div class="mision-overlay"></div>
    
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full text-sm text-white mb-4">
            <i class="fas fa-star"></i> Nuestro propósito
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Misión y Visión</h1>
        <div class="w-20 h-1 mx-auto my-4 rounded-full"></div>
        <p class="text-lg max-w-2xl mx-auto">Lo que nos impulsa cada día y hacia dónde nos dirigimos</p>
    </div>
</section>

<!-- ==================== CONTENIDO PRINCIPAL ==================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <!-- MISIÓN -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-md mision-card relative">
                <div class="quote-icon">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-16 h-16 bg-purple-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-bullseye text-2xl text-purple-600"></i>
                    </div>
                    <div>
                        <span class="text-sm text-purple-600 font-semibold">Nuestro compromiso</span>
                        <h2 class="text-2xl font-bold text-[#1A1A1A]">Misión</h2>
                    </div>
                </div>
                <div class="relative z-10">
                    <i class="fas fa-quote-left text-[#F97316]/20 text-2xl mr-2 align-top"></i>
                    <p class="text-gray-600 leading-relaxed inline" style="text-align: justify;">
                        "En TRADEIN, nos dedicamos a formular y ejecutar proyectos con impacto tecnológico e innovador, diseñando soluciones integrales que abarcan programas y proyectos sociales, económicos, de infraestructura, ambientales, agropecuarios, de investigación y comunicación. Nuestra misión es contribuir al desarrollo sostenible de comunidades y grupos poblacionales, promoviendo el bienestar y la transformación positiva a través de soluciones especializadas y eficientes."
                    </p>
                    <i class="fas fa-quote-right text-[#F97316]/20 text-2xl ml-2 align-bottom"></i>
                </div>
                <div class="mt-6 pt-4 border-t border-purple-200">
                    <div class="flex items-center gap-2 text-sm text-purple-600">
                        <i class="fas fa-check-circle"></i>
                        <span>Compromiso con la excelencia</span>
                    </div>
                </div>
            </div>
            
            <!-- VISIÓN -->
            <div class="bg-gray-50 p-8 rounded-2xl shadow-md vision-card relative">
                <div class="quote-icon">
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-eye text-2xl text-green-600"></i>
                    </div>
                    <div>
                        <span class="text-sm text-green-600 font-semibold">Nuestra aspiración</span>
                        <h2 class="text-2xl font-bold text-[#1A1A1A]">Visión</h2>
                    </div>
                </div>
                <div class="relative z-10">
                    <i class="fas fa-quote-left text-[#F97316]/20 text-2xl mr-2 align-top"></i>
                    <p class="text-gray-600 leading-relaxed inline" style="text-align: justify;">
                        "En TRADEIN, aspiramos a ser líderes reconocidos a nivel local y nacional en la formulación y ejecución de proyectos con impacto tecnológico e innovador. Buscamos ser pioneros en la generación de soluciones integrales que marquen la diferencia, destacándonos por nuestro compromiso con el desarrollo sostenible, la innovación continua y la creación de un impacto positivo duradero en las comunidades a las que servimos."
                    </p>
                    <i class="fas fa-quote-right text-[#F97316]/20 text-2xl ml-2 align-bottom"></i>
                </div>
                <div class="mt-6 pt-4 border-t border-green-200">
                    <div class="flex items-center gap-2 text-sm text-green-600">
                        <i class="fas fa-chart-line"></i>
                        <span>Liderazgo e innovación continua</span>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Frase inspiradora al final -->
        <div class="mt-12 text-center">
            <div class="inline-flex items-center gap-2 bg-[#F97316]/5 px-6 py-3 rounded-full">
                <i class="fas fa-star text-[#F97316]"></i>
                <p class="text-gray-600 text-sm">"Transformamos realidades a través de la innovación y el compromiso social"</p>
            </div>
        </div>
        
    </div>
</section>

<!-- Script para carga optimizada de la imagen -->
<script>
    (function() {
        var bgImg = new Image();
        var bgDiv = document.getElementById('misionBg');
        if (bgImg && bgDiv) {
            bgImg.onload = function() {
                bgDiv.classList.add('loaded');
            };
            bgImg.src = 'img/mision-y-vision.png';
            if (bgImg.complete) {
                bgDiv.classList.add('loaded');
            }
        }
    })();
</script>

<?php include 'footer.php'; ?>