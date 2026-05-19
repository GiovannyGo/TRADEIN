<?php include 'header.php'; ?>

<style>
    .policy-card {
        transition: all 0.3s ease;
        border: 1px solid #e5e7eb;
    }
    .policy-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
        border-color: #F97316;
    }
    .policy-icon {
        transition: all 0.3s ease;
    }
    .policy-card:hover .policy-icon {
        background-color: #F97316;
    }
    .policy-card:hover .policy-icon i {
        color: white !important;
    }
    .list-item {
        position: relative;
        padding-left: 20px;
        margin-bottom: 8px;
    }
    .list-item::before {
        content: "▹";
        position: absolute;
        left: 0;
        color: #F97316;
    }
    .badge-cumplimiento {
        background: linear-gradient(135deg, #10B981 0%, #059669 100%);
    }
    /* Estilos para el banner con imagen */
    .hero-banner {
        position: relative;
        background-image: url('img/privacidad.jpg');
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    .hero-content {
        position: relative;
        z-index: 2;
    }
</style>

<!-- Hero con imagen de fondo (sin zoom) -->
<section class="hero-banner py-20 relative overflow-hidden">
    <div class="hero-overlay"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="inline-block bg-white/10 backdrop-blur-sm px-4 py-1 rounded-full text-sm mb-4">
            📜 Transparencia y legalidad
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 drop-shadow-lg">Políticas de la Fundación</h1>
        <div class="w-20 h-1 bg-[#F97316] mx-auto my-4 rounded-full"></div>
        <p class="text-xl max-w-2xl mx-auto text-gray-200 drop-shadow">Transparencia, legalidad y compromiso con nuestros usuarios</p>
        <!-- Badge de cumplimiento -->
        <div class="inline-flex items-center gap-2 badge-cumplimiento text-white px-4 py-2 rounded-full text-sm mt-6 shadow-lg">
            <i class="fas fa-shield-alt"></i> Cumplimiento Ley 1581 de 2012
        </div>
    </div>
</section>

<div class="container mx-auto px-4 py-12 max-w-5xl">
    
    <!-- ==================== POLÍTICA DE PRIVACIDAD ==================== -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden policy-card mb-8">
        <div class="bg-gradient-to-r from-gray-50 to-white p-5 border-b">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-[#F97316]/10 rounded-xl flex items-center justify-center policy-icon transition-all duration-300">
                    <i class="fas fa-lock text-xl text-[#F97316]"></i>
                </div>
                <div>
                    <span class="text-xs text-[#F97316] font-semibold">Política oficial</span>
                    <h2 class="text-2xl font-bold text-[#1A1A1A]">Política de Privacidad</h2>
                </div>
            </div>
        </div>
        <div class="p-6">
            <p class="text-gray-600 mb-4"><strong>Última actualización:</strong> <?php echo date('d \d\e F \d\e Y'); ?></p>
            <p class="text-gray-700 mb-4">En <strong>TRADEIN</strong>, la privacidad de nuestros visitantes es una prioridad. Esta política detalla cómo recopilamos, usamos y protegemos tu información personal cuando interactúas con nuestro sitio web y servicios.</p>
            
            <div class="grid md:grid-cols-2 gap-6 mt-6">
                <div>
                    <h3 class="text-lg font-bold mb-3 text-[#1A1A1A] flex items-center gap-2">
                        <span class="w-1 h-5 bg-[#F97316] rounded-full"></span> 1. Información que recopilamos
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="list-item">Nombre completo (cuando nos contactas)</li>
                        <li class="list-item">Correo electrónico</li>
                        <li class="list-item">Número de teléfono (opcional)</li>
                        <li class="list-item">Mensaje o consulta enviada</li>
                        <li class="list-item">Datos de navegación (IP, navegador, tiempo de visita)</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-3 text-[#1A1A1A] flex items-center gap-2">
                        <span class="w-1 h-5 bg-[#F97316] rounded-full"></span> 2. Uso de la información
                    </h3>
                    <ul class="space-y-2 text-gray-600 text-sm">
                        <li class="list-item">Responder a tus consultas y solicitudes</li>
                        <li class="list-item">Mejorar nuestros servicios y contenido</li>
                        <li class="list-item">Enviar información sobre proyectos y actividades</li>
                        <li class="list-item">Cumplir con requisitos legales aplicables</li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-6 pt-4 border-t">
                <h3 class="text-lg font-bold mb-2 text-[#1A1A1A] flex items-center gap-2">
                    <span class="w-1 h-5 bg-[#F97316] rounded-full"></span> 3. Protección de datos
                </h3>
                <p class="text-gray-600 text-sm mb-4">Implementamos medidas de seguridad técnicas y administrativas para proteger tu información personal contra acceso no autorizado, pérdida, alteración o divulgación.</p>
                
                <h3 class="text-lg font-bold mb-2 text-[#1A1A1A] flex items-center gap-2">
                    <span class="w-1 h-5 bg-[#F97316] rounded-full"></span> 4. Tus derechos (Ley 1581 de 2012)
                </h3>
                <p class="text-gray-600 text-sm mb-3">Como titular de datos personales, tienes derecho a:</p>
                <ul class="space-y-1 text-gray-600 text-sm mb-4">
                    <li class="list-item">Conocer, actualizar y rectificar tus datos</li>
                    <li class="list-item">Solicitar la eliminación de tus datos cuando proceda</li>
                    <li class="list-item">Revocar el consentimiento otorgado</li>
                    <li class="list-item">Acceder de forma gratuita a tus datos</li>
                </ul>
                <p class="text-gray-600 text-sm bg-gray-50 p-3 rounded-lg flex items-center gap-2">
                    <i class="fas fa-envelope text-[#F97316]"></i> 
                    Para ejercer tus derechos: <strong class="text-[#F97316]">fundaciontradein@gmail.com</strong>
                </p>
            </div>
        </div>
    </div>
    
    <!-- ==================== TRATAMIENTO DE DATOS PERSONALES ==================== -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden policy-card mb-8">
        <div class="bg-gradient-to-r from-gray-50 to-white p-5 border-b">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-[#F97316]/10 rounded-xl flex items-center justify-center policy-icon transition-all duration-300">
                    <i class="fas fa-database text-xl text-[#F97316]"></i>
                </div>
                <div>
                    <span class="text-xs text-[#F97316] font-semibold">Ley 1581 de 2012</span>
                    <h2 class="text-2xl font-bold text-[#1A1A1A]">Tratamiento de Datos Personales</h2>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-bold mb-2 text-[#1A1A1A] flex items-center gap-2">
                        <span class="w-1 h-5 bg-[#F97316] rounded-full"></span> Responsable del tratamiento
                    </h3>
                    <div class="bg-white p-3 rounded-lg border border-gray-100">
                        <p class="text-gray-800 font-semibold">Fundación TRADEIN</p>
                        <p class="text-gray-600 text-xs mt-1">NIT: 901.268.815-5</p>
                        <p class="text-gray-600 text-xs">AV 0 NRO. 11-30 CC GRAN BULEVAR OF 503A</p>
                        <p class="text-gray-600 text-xs">Cúcuta, Colombia</p>
                        <p class="text-gray-600 text-xs mt-1">📧 fundaciontradein@gmail.com</p>
                        <p class="text-gray-600 text-xs">📞 3015512810</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-2 text-[#1A1A1A] flex items-center gap-2">
                        <span class="w-1 h-5 bg-[#F97316] rounded-full"></span> Finalidad del tratamiento
                    </h3>
                    <ul class="space-y-1 text-gray-600 text-sm">
                        <li class="list-item">Gestionar solicitudes de información y contacto</li>
                        <li class="list-item">Registrar voluntarios y donantes</li>
                        <li class="list-item">Enviar comunicaciones institucionales</li>
                        <li class="list-item">Cumplir obligaciones legales y contractuales</li>
                    </ul>
                </div>
            </div>
            <div class="mt-4 bg-green-50 p-4 rounded-lg text-center text-sm text-green-700">
                <i class="fas fa-check-circle mr-2"></i> Al utilizar nuestro sitio web, aceptas nuestra Política de Tratamiento de Datos Personales.
            </div>
        </div>
    </div>
    
    <!-- ==================== POLÍTICA DE COOKIES ==================== -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden policy-card mb-8">
        <div class="bg-gradient-to-r from-gray-50 to-white p-5 border-b">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-[#F97316]/10 rounded-xl flex items-center justify-center policy-icon transition-all duration-300">
                    <i class="fas fa-cookie-bite text-xl text-[#F97316]"></i>
                </div>
                <div>
                    <span class="text-xs text-[#F97316] font-semibold">Tu privacidad es importante</span>
                    <h2 class="text-2xl font-bold text-[#1A1A1A]">Política de Cookies</h2>
                </div>
            </div>
        </div>
        <div class="p-6">
            <p class="text-gray-700 mb-3">Las cookies son pequeños archivos de texto que los sitios web colocan en tu dispositivo para mejorar la experiencia de navegación, recordar preferencias y analizar el tráfico.</p>
            
            <div class="grid md:grid-cols-2 gap-4 mt-4">
                <div class="bg-gray-50 p-3 rounded-lg flex items-start gap-2">
                    <i class="fas fa-shield-alt text-[#F97316] mt-0.5"></i>
                    <div>
                        <span class="font-semibold text-sm">Cookies esenciales</span>
                        <p class="text-xs text-gray-500 mt-1">Necesarias para el funcionamiento básico del sitio (navegación, acceso a áreas seguras).</p>
                    </div>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-start gap-2">
                    <i class="fas fa-chart-line text-[#F97316] mt-0.5"></i>
                    <div>
                        <span class="font-semibold text-sm">Cookies de análisis</span>
                        <p class="text-xs text-gray-500 mt-1">Nos ayudan a entender cómo los visitantes interactúan con el sitio.</p>
                    </div>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-start gap-2">
                    <i class="fas fa-sliders-h text-[#F97316] mt-0.5"></i>
                    <div>
                        <span class="font-semibold text-sm">Cookies de preferencias</span>
                        <p class="text-xs text-gray-500 mt-1">Recuerdan tus preferencias de navegación (idioma, región).</p>
                    </div>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-start gap-2">
                    <i class="fas fa-ad text-[#F97316] mt-0.5"></i>
                    <div>
                        <span class="font-semibold text-sm">Cookies de marketing</span>
                        <p class="text-xs text-gray-500 mt-1">Se utilizan para mostrar contenido relevante (no usamos publicidad de terceros).</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-4 bg-gray-50 p-3 rounded-lg">
                <p class="text-gray-600 text-sm flex items-center gap-2">
                    <i class="fas fa-cog text-[#F97316]"></i>
                    <strong>Gestión de cookies:</strong> Puedes configurar tu navegador para bloquear o eliminar cookies en cualquier momento.
                </p>
            </div>
        </div>
    </div>
    
    <!-- ==================== POLÍTICA DE DONACIONES ==================== -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden policy-card mb-8">
        <div class="bg-gradient-to-r from-gray-50 to-white p-5 border-b">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-[#F97316]/10 rounded-xl flex items-center justify-center policy-icon transition-all duration-300">
                    <i class="fas fa-hand-holding-heart text-xl text-[#F97316]"></i>
                </div>
                <div>
                    <span class="text-xs text-[#F97316] font-semibold">Transparencia total</span>
                    <h2 class="text-2xl font-bold text-[#1A1A1A]">Política de Donaciones</h2>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="bg-green-50 p-4 rounded-lg mb-4 text-center">
                <i class="fas fa-shield-alt text-green-600 text-2xl mb-2 block"></i>
                <p class="text-green-800 font-semibold">TRADEIN es una Entidad Sin Ánimo de Lucro (ESAL).</p>
                <p class="text-green-700 text-sm">El 100% de los recursos se destinan a programas y proyectos sociales.</p>
            </div>
            
            <p class="text-gray-700 mb-3">Todas las donaciones recibidas son destinadas íntegramente a:</p>
            <ul class="space-y-1 text-gray-600 text-sm mb-4">
                <li class="list-item">Programas de desarrollo social y comunitario</li>
                <li class="list-item">Formación para el trabajo y emprendimiento</li>
                <li class="list-item">Proyectos de innovación tecnológica</li>
                <li class="list-item">Atención a poblaciones vulnerables</li>
            </ul>
            
            <div class="grid md:grid-cols-2 gap-4 mt-4">
                <div class="bg-gray-50 p-3 rounded-lg flex items-center gap-3">
                    <i class="fas fa-university text-2xl text-[#F97316]"></i>
                    <div>
                        <span class="font-semibold text-sm">Bancolombia</span>
                        <p class="text-xs text-gray-500">Cuenta de ahorros 123-456789-01</p>
                    </div>
                </div>
                <div class="bg-gray-50 p-3 rounded-lg flex items-center gap-3">
                    <i class="fas fa-mobile-alt text-2xl text-[#F97316]"></i>
                    <div>
                        <span class="font-semibold text-sm">Nequi / Daviplata</span>
                        <p class="text-xs text-gray-500">3015512810</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ==================== CONTACTO LEGAL ==================== -->
    <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl p-8 text-center">
        <div class="w-16 h-16 bg-[#F97316]/10 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-envelope text-3xl text-[#F97316]"></i>
        </div>
        <h3 class="text-xl font-bold text-[#1A1A1A] mb-3">¿Preguntas sobre nuestras políticas?</h3>
        <p class="text-gray-600 mb-4">Si tienes alguna duda sobre el manejo de tus datos o nuestras políticas de privacidad, contáctanos:</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="mailto:fundaciontradein@gmail.com" class="inline-flex items-center gap-2 bg-[#1A1A1A] text-white px-5 py-2 rounded-lg hover:bg-[#F97316] transition-all duration-300">
                <i class="fas fa-envelope"></i> fundaciontradein@gmail.com
            </a>
            <a href="https://wa.me/573015512810?text=Hola%20TRADEIN,%20tengo%20una%20pregunta%20sobre%20las%20políticas%20de%20privacidad" target="_blank" class="inline-flex items-center gap-2 bg-green-600 text-white px-5 py-2 rounded-lg hover:bg-green-700 transition-all duration-300">
                <i class="fab fa-whatsapp"></i> 3015512810
            </a>
        </div>
        <p class="text-xs text-gray-500 mt-6">
            <i class="fas fa-shield-alt text-[#F97316] mr-1"></i> 
            Política actualizada: <?php echo date('d \d\e F \d\e Y'); ?>
        </p>
    </div>
    
</div>

<?php include 'footer.php'; ?>