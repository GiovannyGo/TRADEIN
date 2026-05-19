<?php include 'header.php'; ?>

<style>
    .service-card {
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
    }
    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 35px -12px rgba(0, 0, 0, 0.2);
    }
    .image-container {
        height: 220px;
        overflow: hidden;
        position: relative;
        background-color: #f3f4f6;
    }
    .service-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
        transition: transform 0.5s ease;
    }
    .service-card:hover .service-img {
        transform: scale(1.05);
    }
    .img-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.2) 100%);
        pointer-events: none;
    }
    .img-badge {
        position: absolute;
        bottom: 12px;
        left: 12px;
        z-index: 2;
    }
    .service-icon {
        transition: all 0.3s ease;
        flex-shrink: 0;
    }
    .service-card:hover .service-icon {
        transform: scale(1.1) rotate(5deg);
        background-color: #F97316 !important;
    }
    .service-card:hover .service-icon i {
        color: white !important;
    }
    .service-img.error {
        display: none;
    }
    .image-container .fallback-icon {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 3rem;
        color: #9ca3af;
    }
    .service-img.error + .fallback-icon {
        display: block;
    }
</style>

<!-- ==================== TÍTULO CON IMAGEN DE FONDO ==================== -->
<section class="relative py-16 overflow-hidden" 
         style="background-image: url('img/servicios.png'); background-size: cover; background-position: center; background-attachment: fixed;">
    <!-- Overlay oscuro para legibilidad del texto -->
    <div class="absolute inset-0 bg-black/50"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="inline-block bg-[#F97316]/20 px-4 py-1 rounded-full text-sm text-[#F97316] mb-4 backdrop-blur-sm">
            ✨ Nuestro compromiso
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Nuestros Servicios</h1>
        <div class="w-20 h-1 bg-[#F97316] mx-auto my-4 rounded-full"></div>
        <p class="text-xl max-w-2xl mx-auto text-gray-200">Conoce todos los servicios y programas que ofrecemos</p>
    </div>
</section>

<!-- Introducción (sin cambios) -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4 text-center max-w-3xl">
        <i class="fas fa-quote-left text-3xl text-[#F97316]/20 mb-2 block"></i>
        <p class="text-gray-700 text-lg">Atendemos las necesidades de cada área definida en el marco del objeto de la Fundación, desarrollando proyectos con alto impacto social y tecnológico.</p>
        <i class="fas fa-quote-right text-3xl text-[#F97316]/20 mt-2 block"></i>
    </div>
</section>

<!-- 6 Servicios (sin cambios) -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <!-- Servicio 1 - Diseño y desarrollo de programas -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                <div class="h-2 bg-purple-600"></div>
                <div class="image-container">
                    <img src="img/programas-sociales.jpg" 
                         alt="Diseño y desarrollo de programas" 
                         class="service-img"
                         onerror="this.classList.add('error')">
                    <div class="fallback-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="img-overlay"></div>
                    <div class="img-badge">
                        <span class="text-white text-xs font-semibold bg-black/50 px-2 py-1 rounded">Área social</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center service-icon transition-all duration-300">
                            <i class="fas fa-users text-2xl text-purple-600"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#1A1A1A]">Diseño y desarrollo de programas</h2>
                    </div>
                    <p class="text-gray-600 mb-3">Programas especializados para:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Adulto mayor</li>
                        <li>Mujer cabeza de familia</li>
                        <li>Niñez maltratada y desprotegida</li>
                        <li>Población desplazada por conflictos armados o catástrofes</li>
                    </ul>
                </div>
            </div>
            
            <!-- Servicio 2 - Formación para el trabajo -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                <div class="h-2 bg-green-600"></div>
                <div class="image-container">
                    <img src="img/formacion-para-el-trabajo.jpg" 
                         alt="Formación para el trabajo" 
                         class="service-img"
                         onerror="this.classList.add('error')">
                    <div class="fallback-icon">
                        <i class="fas fa-chalkboard-user"></i>
                    </div>
                    <div class="img-overlay"></div>
                    <div class="img-badge">
                        <span class="text-white text-xs font-semibold bg-black/50 px-2 py-1 rounded">Educación</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center service-icon">
                            <i class="fas fa-chalkboard-user text-2xl text-green-600"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#1A1A1A]">Formación para el trabajo</h2>
                    </div>
                    <p class="text-gray-600 mb-3">Desarrollamos programas de capacitación:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Directamente con comunidades</li>
                        <li>Por encargo a través de convenios</li>
                        <li>Formación para el desarrollo humano</li>
                        <li>Certificación de competencias laborales</li>
                    </ul>
                </div>
            </div>
            
            <!-- Servicio 3 - Creación de microempresas -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                <div class="h-2 bg-blue-600"></div>
                <div class="image-container">
                    <img src="img/creacion-de-microempresas.jpg" 
                         alt="Creación de microempresas" 
                         class="service-img"
                         onerror="this.classList.add('error')">
                    <div class="fallback-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="img-overlay"></div>
                    <div class="img-badge">
                        <span class="text-white text-xs font-semibold bg-black/50 px-2 py-1 rounded">Emprendimiento</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center service-icon">
                            <i class="fas fa-store text-2xl text-blue-600"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#1A1A1A]">Creación de microempresas</h2>
                    </div>
                    <p class="text-gray-600 mb-3">Gestionamos planes para el desarrollo productivo:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Educación y capacitación empresarial</li>
                        <li>Acompañamiento en creación de negocios</li>
                        <li>Acceso a microcréditos</li>
                        <li>Mentoría y seguimiento</li>
                    </ul>
                </div>
            </div>
            
            <!-- Servicio 4 - Formación ciudadana -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                <div class="h-2 bg-orange-600"></div>
                <div class="image-container">
                    <img src="img/formacion-ciudadana.png" 
                         alt="Formación ciudadana" 
                         class="service-img"
                         onerror="this.classList.add('error')">
                    <div class="fallback-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="img-overlay"></div>
                    <div class="img-badge">
                        <span class="text-white text-xs font-semibold bg-black/50 px-2 py-1 rounded">Participación</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-orange-100 rounded-full flex items-center justify-center service-icon">
                            <i class="fas fa-gavel text-2xl text-[#F97316]"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#1A1A1A]">Formación ciudadana</h2>
                    </div>
                    <p class="text-gray-600 mb-3">Promovemos:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Inversión e intercambio comercial</li>
                        <li>Comercio nacional e internacional</li>
                        <li>Exportación de bienes y servicios</li>
                        <li>Cultura ciudadana y participación</li>
                    </ul>
                </div>
            </div>
            
            <!-- Servicio 5 - Sensibilización y atención -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                <div class="h-2 bg-purple-600"></div>
                <div class="image-container">
                    <img src="img/sensibilizacion.png" 
                         alt="Sensibilización y atención" 
                         class="service-img"
                         onerror="this.classList.add('error')">
                    <div class="fallback-icon">
                        <i class="fas fa-shield-heart"></i>
                    </div>
                    <div class="img-overlay"></div>
                    <div class="img-badge">
                        <span class="text-white text-xs font-semibold bg-black/50 px-2 py-1 rounded">Protección</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center service-icon">
                            <i class="fas fa-shield-heart text-2xl text-purple-600"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#1A1A1A]">Sensibilización y atención</h2>
                    </div>
                    <p class="text-gray-600 mb-3">Protección integral para:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Niños, niñas y adolescentes</li>
                        <li>Jóvenes en situación de riesgo</li>
                        <li>Mujeres víctimas de violencia</li>
                        <li>Adultos mayores</li>
                    </ul>
                </div>
            </div>
            
            <!-- Servicio 6 - Innovación tecnológica -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden service-card">
                <div class="h-2 bg-green-600"></div>
                <div class="image-container">
                    <img src="img/innovacion-tecnologica.png" 
                         alt="Innovación tecnológica" 
                         class="service-img"
                         onerror="this.classList.add('error')">
                    <div class="fallback-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="img-overlay"></div>
                    <div class="img-badge">
                        <span class="text-white text-xs font-semibold bg-black/50 px-2 py-1 rounded">Tecnología</span>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center service-icon">
                            <i class="fas fa-microchip text-2xl text-green-600"></i>
                        </div>
                        <h2 class="text-xl font-bold text-[#1A1A1A]">Innovación tecnológica</h2>
                    </div>
                    <p class="text-gray-600 mb-3">Implementamos:</p>
                    <ul class="text-gray-600 text-sm space-y-1 list-disc list-inside">
                        <li>Ferias de ciencia y tecnología</li>
                        <li>Planes municipales TIC</li>
                        <li>Estrategias digitales para municipios</li>
                        <li>Suministro de material vegetal clonado</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Botón flotante de regreso -->
<div class="fixed bottom-6 left-6 z-40">
    <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;" 
       class="bg-[#1A1A1A] text-white w-10 h-10 rounded-full flex items-center justify-center shadow-lg hover:bg-[#F97316] transition-all duration-300 hover:scale-110 focus:outline-none">
        <i class="fas fa-arrow-up"></i>
    </a>
</div>

<?php include 'footer.php'; ?>
