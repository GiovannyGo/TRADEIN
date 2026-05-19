<?php include 'header.php'; ?>

<style>
    .donation-card {
        transition: all 0.3s ease;
    }
    .donation-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
    }
    .donation-card:hover .icon-circle {
        transform: scale(1.05);
        background-color: #F97316 !important;
    }
    .donation-card:hover .icon-circle i {
        color: white !important;
    }
    .icon-circle {
        transition: all 0.3s ease;
    }
</style>

<!-- ==================== HERO ==================== -->
<section class="relative py-20 overflow-hidden" 
         style="background-image: url('img/donar.png'); background-size: cover; background-position: center; background-attachment: fixed;">
    
    <div class="absolute inset-0 bg-black/50"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-1 rounded-full text-sm text-white mb-4">
            ❤️ Tu apoyo transforma vidas
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">Apoya nuestra causa</h1>
        <div class="w-20 h-1 bg-[#F97316] mx-auto my-4 rounded-full"></div>
        <p class="text-xl max-w-2xl mx-auto text-gray-200">
            Para garantizar transparencia y acompañamiento personalizado, las donaciones se gestionan directamente con nuestro equipo.
        </p>
        <div class="flex flex-wrap justify-center gap-3 mt-6">
            <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-xs text-white">🔒 Proceso 100% seguro</span>
            <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-xs text-white">📋 Recibo legal de donación</span>
            <span class="bg-white/10 backdrop-blur-sm px-3 py-1 rounded-full text-xs text-white">💚 Transparencia garantizada</span>
        </div>
    </div>
</section>

<!-- ==================== CONTENIDO PRINCIPAL ==================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">

        <!-- INTRO -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1A1A1A] mb-4">¿Cómo puedes ayudar?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Existen diferentes formas de apoyar nuestra misión. Elige la que mejor se adapte a ti.
            </p>
            <div class="w-24 h-1 bg-[#F97316] mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- TARJETAS (sin botones internos) -->
        <div class="grid md:grid-cols-3 gap-8">

            <!-- 1. DONACIÓN ECONÓMICA -->
            <div class="bg-white rounded-2xl shadow-md p-6 donation-card text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4 icon-circle">
                    <i class="fas fa-hand-holding-heart text-2xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-3">Donación económica</h3>
                <p class="text-gray-600 text-sm mb-4">
                    Tu aporte económico nos permite seguir transformando comunidades.
                </p>
                <div class="text-left bg-white border border-gray-100 rounded-xl p-4 shadow-sm mt-2">
                    <p class="font-semibold text-gray-800 mb-2 flex items-center gap-1">
                        <i class="fas fa-hand-holding-heart text-[#F97316]"></i> 
                        ¿Cómo realizar tu donación?
                    </p>
                    <p class="text-gray-600 text-xs leading-relaxed">
                        En TRADEIN creemos en la transparencia y el acompañamiento personalizado.  
                        Para realizar tu aporte, contáctanos vía WhatsApp o correo electrónico;  
                        nuestro equipo te responderá con gusto y te guiará en el proceso.
                    </p>
                </div>
            </div>

            <!-- 2. VOLUNTARIADO -->
            <div class="bg-white rounded-2xl shadow-md p-6 donation-card text-center">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4 icon-circle">
                    <i class="fas fa-hands-helping text-2xl text-purple-600"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-3">Voluntariado</h3>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    Tu tiempo y talento pueden transformar vidas. Únete a nuestro equipo.
                </p>
                <div class="flex flex-wrap justify-center gap-2 mb-4">
                    <span class="bg-gray-50 text-gray-700 px-2.5 py-1 rounded-full text-xs border border-gray-200">💻 Desarrollo web</span>
                    <span class="bg-gray-50 text-gray-700 px-2.5 py-1 rounded-full text-xs border border-gray-200">📱 Redes sociales</span>
                    <span class="bg-gray-50 text-gray-700 px-2.5 py-1 rounded-full text-xs border border-gray-200">📊 Gestión de proyectos</span>
                    <span class="bg-gray-50 text-gray-700 px-2.5 py-1 rounded-full text-xs border border-gray-200">🎨 Diseño gráfico</span>
                    <span class="bg-gray-50 text-gray-700 px-2.5 py-1 rounded-full text-xs border border-gray-200">📋 Apoyo administrativo</span>
                    <span class="bg-gray-50 text-gray-700 px-2.5 py-1 rounded-full text-xs border border-gray-200">📚 Docencia</span>
                </div>
                <p class="text-xs text-gray-500">Cuéntanos en qué área te gustaría apoyar.</p>
            </div>

            <!-- 3. ALIANZAS EMPRESARIALES -->
            <div class="bg-white rounded-2xl shadow-md p-6 donation-card text-center">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4 icon-circle">
                    <i class="fas fa-building text-2xl text-blue-600"></i>
                </div>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-3">Alianzas empresariales</h3>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    Tu empresa puede generar impacto social mientras fortalece su compromiso con la sostenibilidad.
                </p>
                <div class="space-y-2 text-left bg-gray-50/50 p-4 rounded-xl">
                    <p class="flex items-center gap-2 text-xs text-gray-700">
                        <i class="fas fa-check-circle text-[#F97316] text-xs"></i> 
                        <span>Visibilidad destacada en nuestro sitio web</span>
                    </p>
                    <p class="flex items-center gap-2 text-xs text-gray-700">
                        <i class="fas fa-check-circle text-[#F97316] text-xs"></i> 
                        <span>Certificado oficial de impacto social</span>
                    </p>
                    <p class="flex items-center gap-2 text-xs text-gray-700">
                        <i class="fas fa-check-circle text-[#F97316] text-xs"></i> 
                        <span>Reporte detallado de beneficiarios</span>
                    </p>
                    <p class="flex items-center gap-2 text-xs text-gray-700">
                        <i class="fas fa-check-circle text-[#F97316] text-xs"></i> 
                        <span>Acompañamiento personalizado</span>
                    </p>
                </div>
            </div>
        </div>

        <!-- BLOQUE ÚNICO DE CONTACTO (WhatsApp + Correo) -->
        <div class="mt-16 text-center">
            <div class="bg-white rounded-2xl shadow-lg p-8 max-w-2xl mx-auto">
                <i class="fas fa-comments text-3xl text-[#F97316] mb-3 block"></i>
                <h3 class="text-xl font-bold text-[#1A1A1A] mb-2">¿Listo para ayudar?</h3>
                <p class="text-gray-600 text-sm mb-6">
                    Contáctanos por WhatsApp o correo electrónico. Estaremos encantados de acompañarte.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="https://wa.me/573015512810?text=Hola%20TRADEIN,%20quiero%20apoyar" 
                       target="_blank" 
                       class="inline-flex items-center gap-2 bg-green-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-green-700 transition shadow-md">
                        <i class="fab fa-whatsapp text-xl"></i> WhatsApp
                    </a>
                    <a href="mailto:fundaciontradein@gmail.com?subject=Apoyo%20TRADEIN" 
                       class="inline-flex items-center gap-2 bg-[#1A1A1A] text-white px-6 py-3 rounded-xl font-semibold hover:bg-[#333333] transition shadow-md">
                        <i class="fas fa-envelope text-xl"></i> fundaciontradein@gmail.com
                    </a>
                </div>
            </div>
        </div>

        <!-- FRASE FINAL -->
        <div class="mt-12 text-center">
            <div class="inline-block bg-white rounded-full px-6 py-2 shadow-sm">
                <p class="text-gray-500 italic">"Cada aporte cuenta. Juntos hacemos la diferencia."</p>
            </div>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?>
                   
