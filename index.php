<?php include 'header.php'; ?>

<style>
    /* Estilos del carrusel rápido de imágenes de fondo */
    .hero-section {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    /* Carrusel de fondo */
    .hero-background-carousel {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        overflow: hidden;
    }
    
    .hero-bg-track {
        display: flex;
        width: calc(100% * 2);
        height: 100%;
        animation: scrollBgCarousel 30s linear infinite;
    }
    
    .hero-bg-track:hover {
        animation-play-state: paused;
    }
    
    .hero-bg-slide {
        width: 100vw;
        height: 100%;
        flex-shrink: 0;
        position: relative;
    }
    
    .hero-bg-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    /* Overlay oscuro para que el texto sea legible */
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }
    
    /* Contenido del hero (por encima del carrusel) */
    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 80px 20px;
        max-width: 900px;
        margin: 0 auto;
    }
    
    .hero-content h1 {
        color: white;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
    }
    
    .hero-content p {
        color: rgba(255,255,255,0.95);
        text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
    }
    
    @keyframes scrollBgCarousel {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-content {
            padding: 60px 20px;
        }
        .hero-content h1 {
            font-size: 1.8rem;
        }
        .hero-content p {
            font-size: 1rem;
        }
    }
    
    /* ========== TEXTO JUSTIFICADO (nuevo) ========== */
    .text-justificado {
        text-align: justify;
    }
    
    /* Aplicar justificación a párrafos específicos */
    .texto-bienvenida,
    .texto-presentacion,
    .texto-permanencia {
        text-align: justify;
    }
</style>

<!-- ==================== HERO SECTION CON CARRUSEL DE FONDO ==================== -->
<section class="hero-section">
    <!-- Carrusel de fondo -->
    <div class="hero-background-carousel">
        <div class="hero-bg-track">
            <!-- Grupo 1 de imágenes -->
            <div class="hero-bg-slide">
                <img src="img/index.png" alt="TRADEIN" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/programas-sociales.jpg" alt="Programas Sociales" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/formacion-para-el-trabajo.jpg" alt="Formación para el trabajo" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/creacion-de-microempresas.jpg" alt="Creación de microempresas" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/formacion-ciudadana.png" alt="Formación ciudadana" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/sensibilizacion.png" alt="Sensibilización" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/innovacion-tecnologica.png" alt="Innovación tecnológica" loading="lazy">
            </div>
            <!-- Grupo 2 (duplicado para efecto infinito) -->
            <div class="hero-bg-slide">
                <img src="img/index.png" alt="TRADEIN" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/programas-sociales.jpg" alt="Programas Sociales" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/formacion-para-el-trabajo.jpg" alt="Formación para el trabajo" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/creacion-de-microempresas.jpg" alt="Creación de microempresas" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/formacion-ciudadana.png" alt="Formación ciudadana" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/sensibilizacion.png" alt="Sensibilización" loading="lazy">
            </div>
            <div class="hero-bg-slide">
                <img src="img/innovacion-tecnologica.png" alt="Innovación tecnológica" loading="lazy">
            </div>
        </div>
    </div>
    
    <div class="hero-overlay"></div>
    
    <div class="hero-content">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold max-w-4xl mx-auto mb-4 leading-tight">
            Fundación para la Transformación Social, Desarrollo e Innovación
        </h1>
        <p class="text-lg md:text-xl max-w-2xl mx-auto mb-6">
            Formulamos y ejecutamos proyectos con impacto tecnológico e innovador para el desarrollo sostenible de comunidades.
        </p>
        <div class="flex flex-wrap justify-center gap-4 mt-4">
            <a href="donar.php" class="bg-[#F97316] text-white font-semibold px-8 py-3 rounded-lg shadow-md hover:bg-[#EA580C] transition inline-block">🤝 Donar / Apoyar</a>
            <a href="servicios.php" class="border-2 border-white text-white font-semibold px-8 py-3 rounded-lg hover:bg-white hover:text-[#F97316] transition inline-block">Conoce Nuestro Impacto</a>
            <a href="contacto.php" class="border-2 border-white text-white font-semibold px-8 py-3 rounded-lg hover:bg-white hover:text-[#F97316] transition inline-block">Contáctanos</a>
        </div>
    </div>
</section>

<!-- ==================== BIENVENIDA (texto justificado) ==================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 text-center max-w-4xl">
        <div class="inline-block bg-gray-100 text-[#F97316] text-sm font-semibold px-3 py-1 rounded-full mb-4">
            📅 Constituida el 12 de marzo de 2019
        </div>
        <h2 class="text-3xl md:text-4xl font-bold text-[#1A1A1A] mb-6">Bienvenidos a TRADEIN</h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-8 texto-bienvenida">
            Somos una entidad sin ánimo de lucro dedicada a la formulación y ejecución de proyectos con impacto tecnológico e innovador, contribuyendo al desarrollo sostenible de comunidades y grupos poblacionales en Colombia.
        </p>
        <div class="w-24 h-1 bg-[#F97316] mx-auto"></div>
    </div>
</section>

<!-- ==================== PRESENTACIÓN AMPLIADA (texto justificado) ==================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="bg-white p-8 rounded-2xl shadow-md">
            <p class="text-gray-700 text-lg leading-relaxed mb-4 texto-presentacion">
                <span class="font-bold text-[#F97316]">TRADEIN</span> es una organización líder dedicada a la formulación y ejecución de proyectos con un enfoque distintivo en impacto tecnológico e innovador. A través del diseño y ejecución de programas en áreas clave como lo social, económico, infraestructura, ambiente, agropecuario, investigación y comunicación, buscamos activamente contribuir al desarrollo sostenible de comunidades y grupos poblacionales.
            </p>
            <p class="text-gray-700 text-lg leading-relaxed texto-presentacion">
                La organización se distingue por su compromiso con la <span class="font-semibold">excelencia</span>, la <span class="font-semibold">innovación continua</span> y la generación de soluciones especializadas que marcan una diferencia positiva en los entornos en los que opera.
            </p>
        </div>
    </div>
</section>

<!-- ==================== SERVICIOS DESTACADOS ==================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1A1A1A] mb-4">Nuestras líneas de acción</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Atendemos las necesidades de cada área definida en el marco del objeto de la Fundación</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <!-- Tarjeta 1 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-purple-600 transition-colors">
                    <i class="fas fa-users text-3xl text-purple-600 group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">Diseño y desarrollo de programas</h3>
                <p class="text-gray-600">Programas para adulto mayor, mujer cabeza de familia, niñez maltratada y población desplazada.</p>
            </div>
            <!-- Tarjeta 2 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-green-600 transition-colors">
                    <i class="fas fa-chalkboard-user text-3xl text-green-600 group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">Formación para el trabajo</h3>
                <p class="text-gray-600">Desarrollamos programas de capacitación directamente o por encargo a través de convenios.</p>
            </div>
            <!-- Tarjeta 3 -->
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl group">
                <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-colors">
                    <i class="fas fa-store text-3xl text-blue-600 group-hover:text-white transition-colors"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">Creación de microempresas</h3>
                <p class="text-gray-600">Gestión y desarrollo de planes de educación y capacitación para el desarrollo productivo.</p>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="servicios.php" class="inline-block text-[#F97316] font-semibold hover:text-[#EA580C] transition">Ver todas las líneas de acción →</a>
        </div>
    </div>
</section>

<!-- ==================== IMPACTO EN NÚMEROS ==================== -->
<section class="py-16 relative" 
         style="background-image: url('img/impacto.png'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="absolute inset-0 bg-black/30"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Impacto en números</h2>
            <p class="text-gray-200 max-w-2xl mx-auto">Resultados que reflejan nuestro compromiso con la transformación social</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
            <div class="bg-white rounded-2xl shadow-md p-6 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-calendar-alt text-4xl text-[#F97316] mb-3 block"></i>
                <p class="text-4xl md:text-5xl font-bold text-[#F97316] count-up" data-target="2019">0</p>
                <p class="text-gray-600 mt-2 font-medium">Año de fundación</p>
            </div>
            <div class="bg-white rounded-2xl shadow-md p-6 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-handshake text-4xl text-[#F97316] mb-3 block"></i>
                <p class="text-4xl md:text-5xl font-bold text-[#F97316] count-up" data-target="7">0</p>
                <p class="text-gray-600 mt-2 font-medium">Aliados estratégicos</p>
            </div>
            <div class="bg-white rounded-2xl shadow-md p-6 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-city text-4xl text-[#F97316] mb-3 block"></i>
                <p class="text-4xl md:text-5xl font-bold text-[#F97316] count-up" data-target="8">0</p>
                <p class="text-gray-600 mt-2 font-medium">Municipios impactados</p>
            </div>
            <div class="bg-white rounded-2xl shadow-md p-6 text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-users text-4xl text-[#F97316] mb-3 block"></i>
                <p class="text-4xl md:text-5xl font-bold text-[#F97316] count-up" data-target="293">0</p>
                <p class="text-gray-600 mt-2 font-medium">Beneficiarios directos</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== COMPROMISO CON LA PERMANENCIA (texto justificado) ==================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        <div class="text-center mb-10">
            <i class="fas fa-infinity text-5xl text-[#F97316] mb-4"></i>
            <h2 class="text-3xl md:text-4xl font-bold text-[#1A1A1A] mb-4">Compromiso con la permanencia</h2>
            <div class="w-20 h-1 bg-[#F97316] mx-auto"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto texto-permanencia">
                Más que proyectos temporales, construimos soluciones que perduran en el tiempo y transforman realidades de manera sostenible.
            </p>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-calendar-check text-3xl text-[#F97316] mb-3"></i>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">Desde 2019</h3>
                <p class="text-gray-600 text-sm">Más de 6 años de trabajo ininterrumpido, creciendo y fortaleciendo nuestro impacto.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-chart-line text-3xl text-[#F97316] mb-3"></i>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">Proyectos sostenibles</h3>
                <p class="text-gray-600 text-sm">Diseñamos programas con visión de futuro, generando cambios que perduran.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-xl shadow-md text-center transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <i class="fas fa-hand-holding-heart text-3xl text-[#F97316] mb-3"></i>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">Acompañamiento continuo</h3>
                <p class="text-gray-600 text-sm">Seguimiento permanente a nuestros beneficiarios para asegurar el éxito.</p>
            </div>
        </div>
    </div>
</section>

<!-- ==================== ALIADOS ESTRATÉGICOS ==================== -->
<?php
$aliados = [];

if (file_exists('data/aliados.json')) {
    $aliados = json_decode(file_get_contents('data/aliados.json'), true);

    if (!is_array($aliados)) {
        $aliados = [];
    }
}
?>

<section class="py-16 bg-gray-50 overflow-hidden">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center text-[#1A1A1A] mb-4">
            Aliados estratégicos
        </h2>
        <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">
            Trabajamos de la mano con instituciones comprometidas con el desarrollo social
        </p>
    </div>

    <div class="relative w-full overflow-hidden py-8">
        <div class="flex animate-marquee whitespace-nowrap">

            <?php foreach ($aliados as $aliado): ?>
                <a href="<?php echo htmlspecialchars($aliado['url'] ?? '#'); ?>" target="_blank"
                   class="w-44 h-28 bg-white rounded-xl shadow-md flex items-center justify-center p-3 mx-4 flex-shrink-0">
                    <img src="<?php echo htmlspecialchars($aliado['imagen'] ?? ''); ?>"
                         alt="<?php echo htmlspecialchars($aliado['nombre'] ?? 'Aliado'); ?>"
                         class="max-h-20 max-w-full object-contain"
                         loading="lazy">
                </a>
            <?php endforeach; ?>

            <?php foreach ($aliados as $aliado): ?>
                <a href="<?php echo htmlspecialchars($aliado['url'] ?? '#'); ?>" target="_blank"
                   class="w-44 h-28 bg-white rounded-xl shadow-md flex items-center justify-center p-3 mx-4 flex-shrink-0">
                    <img src="<?php echo htmlspecialchars($aliado['imagen'] ?? ''); ?>"
                         alt="<?php echo htmlspecialchars($aliado['nombre'] ?? 'Aliado'); ?>"
                         class="max-h-20 max-w-full object-contain"
                         loading="lazy">
                </a>
            <?php endforeach; ?>

        </div>
    </div>

    <p class="text-center text-sm text-gray-500 mt-4">
        * Próximamente más aliados estratégicos
    </p>
</section>

<style>
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
</style>

<style>
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
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.count-up');
        const speed = 200;

        const startCounting = (counter) => {
            const updateCount = () => {
                const target = parseInt(counter.getAttribute('data-target'));
                const count = parseInt(counter.innerText);
                const increment = Math.ceil(target / speed);
                if (count < target) {
                    counter.innerText = count + increment;
                    setTimeout(updateCount, 20);
                } else {
                    counter.innerText = target;
                }
            };
            updateCount();
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounting(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => observer.observe(counter));
    });
</script>

<!-- Botón flotante de regreso -->
<div class="fixed bottom-6 left-6 z-40">
    <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;" 
       class="bg-[#1A1A1A] text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg hover:bg-[#F97316] transition-all duration-300 hover:scale-110 focus:outline-none">
        <i class="fas fa-arrow-up"></i>
    </a>
</div>

<?php include 'footer.php'; ?>
