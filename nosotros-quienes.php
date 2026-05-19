<?php include 'header.php'; ?>

<!-- Precargar la imagen de fondo -->
<link rel="preload" as="image" href="img/quienes-somos.png" type="image/png">

<style>
    /* Estilos consistentes con las otras páginas */
    .quienes-hero {
        position: relative;
        overflow: hidden;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #2d2d2d;
    }
    
    /* Imagen de fondo - misma técnica que contacto.php */
    .quienes-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center 35%;
        background-attachment: fixed;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        z-index: 0;
    }
    
    .quienes-bg.loaded {
        opacity: 1;
    }
    
    /* Overlay oscuro - mismo estilo que contacto.php */
    .quienes-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    
    /* Contenido del banner */
    .quienes-hero .container {
        position: relative;
        z-index: 2;
    }
    
    /* Título - mismo estilo que contacto.php */
    .quienes-hero h1 {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
        font-size: 3rem;
        margin-bottom: 0.5rem;
    }
    
    .quienes-hero .inline-flex {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
    }
    
    .quienes-hero .w-20 {
        background-color: #F97316;
    }
    
    /* Ajuste responsive - igual que las otras páginas */
    @media (max-width: 768px) {
        .quienes-hero {
            min-height: 40vh;
        }
        .quienes-bg {
            background-attachment: scroll;
        }
        .quienes-hero h1 {
            font-size: 2rem;
        }
    }
</style>

<!-- ==================== BANNER CON IMAGEN DE FONDO ==================== -->
<section class="quienes-hero">
    <!-- Imagen de fondo -->
    <div id="quienesBg" class="quienes-bg" style="background-image: url('img/quienes-somos.png');"></div>
    <div class="quienes-overlay"></div>
    
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full text-sm text-white mb-4">
            <i class="fas fa-users"></i> Conócenos
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Quiénes somos</h1>
        <div class="w-20 h-1 mx-auto my-4 rounded-full"></div>
        <p class="text-lg max-w-2xl mx-auto text-gray-200">
            Transformación social, desarrollo e innovación
        </p>
    </div>
</section>

<!-- ==================== CONTENIDO PRINCIPAL ==================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
        
        <!-- PARTE 1: QUIÉNES SOMOS -->
        <div class="bg-gray-50 p-8 rounded-2xl">
            <p class="text-gray-700 text-lg leading-relaxed" style="text-align: justify;">
                <span class="font-bold text-[#F97316]">TRADEIN</span> es una organización líder dedicada a la formulación y ejecución de proyectos con un enfoque distintivo en impacto tecnológico e innovador. A través del diseño y ejecución de programas en áreas clave como lo social, económico, infraestructura, ambiente, agropecuario, investigación y comunicación, TRADEIN busca activamente contribuir al desarrollo sostenible de comunidades y grupos poblacionales.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed mt-4" style="text-align: justify;">
                La organización se distingue por su compromiso con la <span class="font-bold">excelencia</span>, la <span class="font-bold">innovación continua</span> y la generación de soluciones especializadas que marcan una diferencia positiva en los entornos en los que opera.
            </p>
        </div>

        <!-- PARTE 2: DATOS DE CONSTITUCIÓN -->
        <div class="grid md:grid-cols-3 gap-6 mt-10 text-center">
            <div class="p-5 bg-gray-50 rounded-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <i class="fas fa-calendar-alt text-3xl text-[#F97316] mb-2 block"></i>
                <p class="font-bold">Constitución</p>
                <p class="text-sm text-gray-600">12 de marzo de 2019</p>
            </div>
            <div class="p-5 bg-gray-50 rounded-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <i class="fas fa-building text-3xl text-[#F97316] mb-2 block"></i>
                <p class="font-bold">Registro Cámara</p>
                <p class="text-sm text-gray-600">27 de marzo de 2019 · No. S0505844</p>
            </div>
            <div class="p-5 bg-gray-50 rounded-xl transition-all duration-300 hover:-translate-y-1 hover:shadow-md">
                <i class="fas fa-file-alt text-3xl text-[#F97316] mb-2 block"></i>
                <p class="font-bold">RUP</p>
                <p class="text-sm text-gray-600">Registro Único de Proponentes actualizado</p>
            </div>
        </div>

        <!-- PARTE 3: HISTORIA -->
        <div class="mt-12">
            <h2 class="text-2xl font-bold text-[#1A1A1A] mb-4 text-center">Nuestra historia</h2>
            <div class="bg-gray-50 p-8 rounded-2xl">
                <p class="text-gray-700 text-lg leading-relaxed" style="text-align: justify;">
                    La <span class="font-bold text-[#F97316]">FUNDACIÓN PARA LA TRANSFORMACIÓN SOCIAL, DESARROLLO E INNOVACIÓN TRADEIN</span> es una entidad sin ánimo de lucro constituida el <span class="font-bold">12 de marzo de 2019</span>, inscrita en la Cámara de Comercio de Cúcuta el <span class="font-bold">27 de marzo de 2019</span>, con registro <span class="font-mono">No. S0505844</span>.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mt-4" style="text-align: justify;">
                    Inscrita y actualizada en el <span class="font-bold">Registro Único de Proponentes (RUP)</span> de la Cámara de Comercio de Cúcuta.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mt-4" style="text-align: justify;">
                    En TRADEIN formulamos y ejecutamos proyectos con impacto tecnológico e innovador. A partir del diseño de programas y proyectos sociales, económicos, de infraestructura, ambientales, agropecuarios, de investigación y comunicación, que contribuyen al desarrollo de las comunidades y grupos poblacionales.
                </p>
                <p class="text-gray-700 text-lg leading-relaxed mt-4" style="text-align: justify;">
                    Como <span class="font-bold">Entidad Sin Ánimo de Lucro</span>, nos especializamos en el diseño y ejecución de programas en áreas clave como lo social, económico, infraestructura, ambiente, agropecuario, investigación y comunicación, siempre con un enfoque en el desarrollo sostenible.
                </p>
            </div>
        </div>
        
    </div>
</section>

<!-- Script para carga optimizada de la imagen -->
<script>
    (function() {
        var bgImg = new Image();
        var bgDiv = document.getElementById('quienesBg');
        if (bgImg && bgDiv) {
            bgImg.onload = function() {
                bgDiv.classList.add('loaded');
            };
            bgImg.src = 'img/quienes-somos.png';
            if (bgImg.complete) {
                bgDiv.classList.add('loaded');
            }
        }
    })();
</script>

<?php include 'footer.php'; ?>