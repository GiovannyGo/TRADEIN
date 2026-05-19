<?php include 'header.php'; ?>
<!-- Precargar la imagen de fondo para que cargue rápido -->
<link rel="preload" as="image" href="img/contactos.png" type="image/png">

<style>
    /* Estilos para el banner con imagen de fondo optimizada */
    .contact-hero {
        position: relative;
        overflow: hidden;
        background-color: #2d2d2d; /* color sólido de respaldo */
    }
    .contact-bg {
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
    .contact-bg.loaded {
        opacity: 1;
    }
    .contact-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    .contact-hero .container {
        position: relative;
        z-index: 2;
    }
    .contact-hero h1,
    .contact-hero p,
    .contact-hero .inline-flex {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    .contact-hero .inline-flex {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
    }
    .contact-hero h1 {
        color: white;
    }
    .contact-hero p a {
        color: #F97316;
        text-decoration: underline;
    }
    .contact-hero .w-20 {
        background-color: #F97316;
    }
    /* Ajuste responsive */
    @media (max-width: 768px) {
        .contact-bg {
            background-attachment: scroll;
        }
    }
    
    /* Estilo para el contenedor del mapa */
    .mapa-container {
        position: relative;
        width: 100%;
        height: 400px;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    .mapa-container:hover {
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.2);
        transform: translateY(-2px);
    }
    .mapa-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>

<!-- Título con imagen de fondo optimizada -->
<section class="contact-hero py-20 md:py-24">
    <div id="contactBg" class="contact-bg" style="background-image: url('img/contactos.png');"></div>
    <div class="contact-overlay"></div>
    
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full text-sm mb-4">
            <i class="fas fa-comments"></i> Estamos para ayudarte
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Contáctanos</h1>
        <div class="w-20 h-1 mx-auto my-4 rounded-full"></div>
        <p class="text-lg max-w-2xl mx-auto">¿Quieres apoyarnos? <a href="donar.php" class="hover:underline transition font-semibold">Conoce cómo donar aquí</a></p>
    </div>
</section>

<!-- ==================== CONTENIDO PRINCIPAL ==================== -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- Mensajes de éxito/error -->
        <?php if(isset($_GET['enviado']) && $_GET['enviado'] == 'ok'): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 text-center flex items-center justify-center gap-2">
                <i class="fas fa-check-circle text-green-600"></i> ¡Mensaje enviado con éxito! Te responderemos pronto.
            </div>
        <?php elseif(isset($_GET['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6 text-center flex items-center justify-center gap-2">
                <i class="fas fa-exclamation-triangle text-red-600"></i> Error al enviar. Escríbenos directamente a fundaciontradein@gmail.com
            </div>
        <?php endif; ?>
        
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Columna izquierda: información -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <!-- Clima -->
                <div class="bg-gradient-to-br from-[#1A1A1A] to-[#333333] text-white p-5" id="clima-container">
                    <div class="flex justify-between items-center">
                        <div>
                            <p class="text-sm opacity-80">Cúcuta, Norte de Santander</p>
                            <p class="text-4xl font-bold mt-1" id="temperatura">--°C</p>
                            <p class="text-sm opacity-90 mt-1" id="condicion">🌍 Cargando clima...</p>
                        </div>
                        <div class="text-right">
                            <i class="fas fa-cloud-sun text-5xl opacity-90" id="icono-clima"></i>
                            <p class="text-xs mt-2" id="fecha-actualizacion"></p>
                        </div>
                    </div>
                </div>
                
                <!-- Información de contacto -->
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-4 text-[#1A1A1A] flex items-center gap-2">
                        <i class="fas fa-map-pin text-[#F97316]"></i> Información de contacto
                    </h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-xl transition-all hover:bg-gray-100">
                            <i class="fas fa-envelope text-[#F97316] text-xl mt-0.5"></i>
                            <div class="flex-1">
                                <p class="font-semibold text-sm text-gray-500">Correo electrónico</p>
                                <p class="text-gray-800" id="email-mostrar">fundaciontradein@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-xl transition-all hover:bg-gray-100">
                            <i class="fas fa-phone text-[#F97316] text-xl mt-0.5"></i>
                            <div class="flex-1">
                                <p class="font-semibold text-sm text-gray-500">Teléfono fijo</p>
                                <p class="text-gray-800" id="telefono1-mostrar">6075843204</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-xl transition-all hover:bg-gray-100">
                            <i class="fab fa-whatsapp text-green-500 text-xl mt-0.5"></i>
                            <div class="flex-1">
                                <p class="font-semibold text-sm text-gray-500">WhatsApp</p>
                                <p class="text-gray-800" id="whatsapp-mostrar">3015512810</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-xl transition-all hover:bg-gray-100">
                            <i class="fas fa-phone text-[#F97316] text-xl mt-0.5"></i>
                            <div class="flex-1">
                                <p class="font-semibold text-sm text-gray-500">Teléfono móvil</p>
                                <p class="text-gray-800" id="telefono2-mostrar">3024431752</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-3 p-3 bg-gray-50 rounded-xl transition-all hover:bg-gray-100">
                            <i class="fas fa-map-marker-alt text-[#F97316] text-xl mt-0.5"></i>
                            <div class="flex-1">
                                <p class="font-semibold text-sm text-gray-500">Dirección</p>
                                <p class="text-gray-800">AV 0 NRO. 11-30 CC GRAN BULEVAR OF 503A<br>Cúcuta, Colombia</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Redes sociales -->
                    <div class="mt-6 pt-4 border-t">
                        <p class="text-sm font-semibold text-gray-500 mb-3">Síguenos en redes sociales</p>
                        <div class="flex gap-3">
                            <a href="https://www.facebook.com/p/Fundaci%C3%B3n-Tradein-100057052826141/" target="_blank" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#1A1A1A] hover:bg-[#1877F2] hover:text-white transition-all duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#1A1A1A] hover:bg-[#E4405F] hover:text-white transition-all duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://wa.me/573015512810" target="_blank" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-green-600 hover:bg-green-500 hover:text-white transition-all duration-300">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-[#1A1A1A] hover:bg-[#0A66C2] hover:text-white transition-all duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Columna derecha: formulario -->
            <div class="bg-white rounded-2xl p-6 shadow-md transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                <h2 class="text-xl font-bold mb-4 text-[#1A1A1A] flex items-center gap-2">
                    <i class="fas fa-pen-alt text-[#F97316]"></i> Envíanos un mensaje
                </h2>
                <p class="text-gray-500 text-sm mb-4">Completa el formulario y te responderemos a la brevedad.</p>
                
                <form action="enviar_contacto.php" method="POST">
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nombre completo</label>
                        <input type="text" name="nombre" placeholder="Tu nombre" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#F97316] focus:ring-1 focus:ring-[#F97316] transition" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Correo electrónico</label>
                        <input type="email" name="correo" placeholder="tu@email.com" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#F97316] focus:ring-1 focus:ring-[#F97316] transition" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Teléfono (opcional)</label>
                        <input type="tel" name="telefono" placeholder="Tu número de contacto" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#F97316] focus:ring-1 focus:ring-[#F97316] transition">
                    </div>
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Mensaje</label>
                        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-[#F97316] focus:ring-1 focus:ring-[#F97316] transition" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#F97316] text-white py-3 rounded-lg font-semibold hover:bg-[#EA580C] transition shadow-md flex items-center justify-center gap-2">
                        <i class="fas fa-paper-plane"></i> Enviar mensaje
                    </button>
                </form>
                <p class="text-xs text-gray-500 text-center mt-4">
                    <i class="fas fa-envelope mr-1"></i> O escríbenos directamente a <strong class="text-[#F97316]">fundaciontradein@gmail.com</strong>
                </p>
            </div>
        </div>
        
        <!-- MAPA REAL DE GOOGLE (reemplaza la imagen estática) -->
        <div class="mt-8">
            <div class="mapa-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.986544701586!2d-72.50734648522135!3d7.889141794313357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a5e5e5e5e5e5e%3A0x0!2zN8KwNTMnMjAuOSJOIDcywrAzMCcyNi43Ilc!5e0!3m2!1ses!2sco!4v1712345678901!5m2!1ses!2sco" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="text-center mt-3">
                <a href="https://maps.google.com/?q=AV+0+NRO.+11-30+CC+GRAN+BULEVAR+OF+503A+Cúcuta" 
                   target="_blank" 
                   class="text-sm text-[#F97316] hover:underline inline-flex items-center gap-1">
                    <i class="fas fa-external-link-alt"></i> Ver ubicación en Google Maps
                </a>
            </div>
        </div>
        
        <!-- Horarios -->
        <div class="mt-8 text-center">
            <div class="inline-flex items-center gap-3 bg-white rounded-2xl px-6 py-3 shadow-md hover:shadow-lg transition-all duration-300">
                <div class="w-10 h-10 bg-[#F97316]/10 rounded-full flex items-center justify-center">
                    <i class="fas fa-clock text-[#F97316] text-xl"></i>
                </div>
                <div class="text-left">
                    <p class="text-sm text-gray-500">Horario de atención</p>
                    <p class="font-semibold text-gray-800">Lunes a Viernes - 8:00 am a 5:00 pm</p>
                </div>
            </div>
        </div>
        
        <div class="mt-8 text-center">
            <p class="text-xs text-gray-400">📍 Cúcuta, Norte de Santander - Colombia</p>
        </div>
    </div>
</section>

<script>
    async function obtenerClima() {
        try {
            const response = await fetch('https://wttr.in/Cucuta?format=j1');
            const data = await response.json();
            const temp = data.current_condition[0].temp_C;
            const descripcion = data.current_condition[0].weatherDesc[0].value;
            document.getElementById('temperatura').innerText = `${temp}°C`;
            let condicionTexto = '';
            let icono = '';
            if (descripcion.toLowerCase().includes('sunny') || descripcion.toLowerCase().includes('clear')) {
                condicionTexto = '☀️ Soleado';
                icono = 'fas fa-sun';
            } else if (descripcion.toLowerCase().includes('partly cloudy') || descripcion.toLowerCase().includes('cloud')) {
                condicionTexto = '🌥️ Parcialmente nublado';
                icono = 'fas fa-cloud-sun';
            } else if (descripcion.toLowerCase().includes('overcast')) {
                condicionTexto = '☁️ Nublado';
                icono = 'fas fa-cloud';
            } else if (descripcion.toLowerCase().includes('rain') || descripcion.toLowerCase().includes('drizzle')) {
                condicionTexto = '🌧️ Lluvioso';
                icono = 'fas fa-cloud-rain';
            } else if (descripcion.toLowerCase().includes('thunder')) {
                condicionTexto = '⛈️ Tormenta';
                icono = 'fas fa-bolt';
            } else {
                condicionTexto = `🌍 ${descripcion}`;
                icono = 'fas fa-cloud-sun';
            }
            document.getElementById('condicion').innerHTML = condicionTexto;
            document.getElementById('icono-clima').className = `${icono} text-5xl opacity-90`;
            const ahora = new Date();
            const fechaStr = `${ahora.getDate()}/${ahora.getMonth() + 1}/${ahora.getFullYear()}`;
            document.getElementById('fecha-actualizacion').innerHTML = `Actualizado: ${fechaStr}`;
        } catch (error) {
            document.getElementById('temperatura').innerText = '25°C';
            document.getElementById('condicion').innerHTML = '🌥️ Mayormente nublado';
            document.getElementById('icono-clima').className = 'fas fa-cloud-sun text-5xl opacity-90';
        }
    }
    obtenerClima();
    setInterval(obtenerClima, 1800000);
    
    function copiarTexto(id) {
        const texto = document.getElementById(id).innerText;
        navigator.clipboard.writeText(texto);
        alert("📋 " + texto + " copiado al portapapeles");
    }
    
    // Carga optimizada de la imagen de fondo
    (function() {
        var bgImg = new Image();
        var bgDiv = document.getElementById('contactBg');
        bgImg.onload = function() {
            if (bgDiv) bgDiv.classList.add('loaded');
        };
        bgImg.src = 'img/contactos.png';
        if (bgImg.complete) {
            if (bgDiv) bgDiv.classList.add('loaded');
        }
    })();
</script>

<?php include 'footer.php'; ?>