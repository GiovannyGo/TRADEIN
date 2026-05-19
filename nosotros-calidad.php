<?php include 'header.php'; ?>

<style>
    .principio-card {
        transition: all 0.3s ease;
        height: 100%;
        border-left: 3px solid #F97316;
    }
    .principio-card:hover {
        transform: translateX(5px);
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.1);
        background-color: #F97316;
    }
    .principio-card:hover .principio-icon i {
        color: white !important;
    }
    .principio-card:hover .principio-title,
    .principio-card:hover .principio-text {
        color: white !important;
    }
    .principio-icon {
        transition: all 0.3s ease;
    }
    .calidad-badge {
        background: linear-gradient(135deg, #F97316 0%, #EA580C 100%);
    }
</style>

<!-- ==================== BANNER CON FONDO MEJORADO ==================== -->
<section class="relative py-20 overflow-hidden" 
         style="background: linear-gradient(135deg, #1A1A1A 0%, #2d2d2d 100%), url('img/calidad.png'); background-size: cover; background-position: center; background-blend-mode: overlay;">
    
    <div class="absolute inset-0 bg-black/40"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-1 rounded-full text-sm text-white mb-4">
            ✅ Nuestro compromiso
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 drop-shadow-lg">Política de calidad</h1>
        <div class="w-20 h-1 bg-[#F97316] mx-auto my-4 rounded-full"></div>
        <p class="text-xl max-w-2xl mx-auto text-white drop-shadow">
            Excelencia, mejora continua y compromiso con las comunidades
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        
        <!-- Introducción destacada -->
        <div class="bg-gradient-to-r from-[#1A1A1A] to-[#333333] text-white p-8 rounded-2xl mb-10">
            <div class="flex items-center gap-3 mb-4">
                <div class="w-12 h-12 bg-[#F97316]/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-certificate text-2xl text-[#F97316]"></i>
                </div>
                <span class="text-sm text-[#F97316] font-semibold">Declaración oficial</span>
            </div>
            <p class="text-white/90 leading-relaxed">
                En TRADEIN, estamos comprometidos con la excelencia en la formulación y ejecución de proyectos con impacto tecnológico e innovador. Nuestra misión es diseñar, formular y ejecutar programas y proyectos que contribuyan al desarrollo sostenible de comunidades y grupos poblacionales, abarcando áreas sociales, económicas, de infraestructura, ambientales, agropecuarias, de investigación y comunicación, mejorando continuamente, cumpliendo con todos los requisitos legales y reglamentarios aplicables a nuestras actividades.
            </p>
        </div>
        
        <!-- Título de principios -->
        <div class="text-center mb-10">
            <div class="inline-flex items-center gap-2 bg-gray-100 px-4 py-2 rounded-full mb-3">
                <i class="fas fa-list-check text-[#F97316]"></i>
                <span class="text-sm text-gray-600">Nuestra base ética y operativa</span>
            </div>
            <h2 class="text-2xl md:text-3xl font-bold text-[#1A1A1A]">12 principios de calidad</h2>
            <div class="w-16 h-0.5 bg-[#F97316] mx-auto mt-3"></div>
        </div>
        
        <!-- Principios en grid -->
        <div class="grid md:grid-cols-2 gap-5">
            
            <!-- Principio 1 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-microchip text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">1. Compromiso con la Innovación</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Buscamos constantemente la innovación y la aplicación de tecnologías avanzadas para optimizar la efectividad de nuestros proyectos.</p>
            </div>
            
            <!-- Principio 2 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-globe text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">2. Integración Social y Ambiental</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Desarrollamos programas que integran aspectos sociales, económicos y ambientales, promoviendo el desarrollo sostenible y la mejora continua.</p>
            </div>
            
            <!-- Principio 3 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-tasks text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">3. Calidad en la Gestión de Proyectos</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">En la gestión de proyectos, nos comprometemos a brindar consultoría e interventoría de alta calidad en áreas psicosociales, educativas, organizacionales, socioeconómicas, productivas, de infraestructura y ambientales.</p>
            </div>
            
            <!-- Principio 4 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-children text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">4. Desarrollo Social Integral</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Priorizamos la atención psicosocial especializada para niños, niñas, adolescentes y jóvenes víctimas de violación de sus derechos fundamentales, y diseñamos programas específicos para adultos mayores, mujeres cabeza de familia, niñez maltratada, población desplazada y otros grupos vulnerables.</p>
            </div>
            
            <!-- Principio 5 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-apple-alt text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">5. Enfoque Nutricional y de Salud</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Desarrollamos planes y programas de nutrición y salud, tanto a nivel nacional como internacional, contribuyendo al bienestar de las comunidades.</p>
            </div>
            
            <!-- Principio 6 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-shield-alt text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">6. Sensibilización y Prevención</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Diseñamos programas para la protección integral de diferentes grupos demográficos, contribuyendo a la sensibilización, prevención y atención de situaciones críticas.</p>
            </div>
            
            <!-- Principio 7 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-flask text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">7. Experiencia Comprobada</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Basamos nuestra calidad en una sólida experiencia, evidenciada en la organización, logística y realización de ferias de ciencia y tecnología, implementación de planes municipales TIC, suministro de material vegetal clonado, ejecución de estrategias digitales y servicios integrales en proyectos de paz y reconciliación.</p>
            </div>
            
            <!-- Principio 8 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-chalkboard-user text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">8. Desarrollo Productivo y Formación</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Impulsamos competencias productivas a través de programas de formación para el trabajo y el desarrollo humano, así como la creación y desarrollo de microempresas.</p>
            </div>
            
            <!-- Principio 9 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-hand-holding-heart text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">9. Compromiso con la Comunidad</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Nos comprometemos a cumplir con los requisitos aplicables, promover la formación ciudadana, la inversión comercial nacional e internacional, y la exportación de bienes y servicios.</p>
            </div>
            
            <!-- Principio 10 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-city text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">10. Desarrollo Urbanístico y Ambiental</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Gestionamos y desarrollamos planes de vivienda de interés social, rural y urbana, abarcando vivienda nueva, mejoramientos, obras de urbanismo, obras civiles, saneamiento básico, electrificación y desarrollos urbanísticos, con un enfoque en la recuperación del medio ambiente y el agro.</p>
            </div>
            
            <!-- Principio 11 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-gavel text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">11. Cumplimiento de Requisitos Aplicables</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Nos comprometemos a cumplir con todos los requisitos legales y reglamentarios aplicables a nuestras actividades, productos y servicios.</p>
            </div>
            
            <!-- Principio 12 -->
            <div class="bg-gray-50 p-4 rounded-xl principio-card">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-[#F97316]/10 rounded-full flex items-center justify-center principio-icon">
                        <i class="fas fa-chart-line text-[#F97316] text-sm"></i>
                    </div>
                    <span class="font-semibold principio-title text-[#1A1A1A]">12. Mejora Continua</span>
                </div>
                <p class="text-sm text-gray-600 mt-2 ml-11 principio-text">Nos comprometemos a la mejora continua de nuestro Sistema de Gestión de la Calidad, revisando regularmente nuestros procesos, implementando acciones correctivas y preventivas, y fomentando una cultura organizacional centrada en la calidad y la excelencia.</p>
            </div>
            
        </div>
        
        <!-- Sello de certificación -->
        <div class="mt-10 text-center">
            <div class="inline-flex items-center gap-3 calidad-badge text-white px-6 py-3 rounded-full shadow-lg">
                <i class="fas fa-certificate"></i>
                <span class="text-sm font-semibold">Política de calidad certificada - Mejora continua</span>
                <i class="fas fa-chart-line"></i>
            </div>
            <p class="text-xs text-gray-400 mt-3">Compromiso con la excelencia y el desarrollo sostenible</p>
        </div>
        
    </div>
</section>

<?php include 'footer.php'; ?>
