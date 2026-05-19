<!-- FOOTER -->
<footer class="bg-[#1A1A1A] text-white pt-12 pb-6">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-6">
            
            <!-- Columna 1: Logo + frase + registro + redes -->
            <div>
                <div class="flex items-center gap-2 mb-4">
                    <img src="img/logo.jpg" alt="Logo TRADEIN" class="h-12 w-auto object-contain bg-white rounded-full p-1">
                </div>
                <p class="text-sm opacity-80">
                    Transformación social, desarrollo e innovación para comunidades.
                </p>
                <p class="text-xs opacity-60 mt-3">
                    Cámara de Comercio de Cúcuta<br>Registro S0505844
                </p>
                <div class="flex gap-3 mt-4">
                    <a href="https://www.facebook.com/p/Fundaci%C3%B3n-Tradein-100057052826141/" target="_blank" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#1877F2] transition">
                        <i class="fab fa-facebook-f text-white text-sm"></i>
                    </a>
                    <a href="#" target="_blank" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#E4405F] transition">
                        <i class="fab fa-instagram text-white text-sm"></i>
                    </a>
                    <a href="#" target="_blank" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#0A66C2] transition">
                        <i class="fab fa-linkedin-in text-white text-sm"></i>
                    </a>
                    <a href="#" target="_blank" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-[#FF0000] transition">
                        <i class="fab fa-youtube text-white text-sm"></i>
                    </a>
                    <a href="https://wa.me/573015512810" target="_blank" class="w-8 h-8 bg-white/10 rounded-full flex items-center justify-center hover:bg-green-600 transition">
                        <i class="fab fa-whatsapp text-white text-sm"></i>
                    </a>
                </div>
            </div>
            
            <!-- Columna 2: Enlaces rápidos con toggle para Nosotros -->
            <div>
                <h4 class="font-bold mb-3">Enlaces rápidos</h4>
                <ul class="space-y-2 text-sm opacity-80">
                    <li><a href="index.php" class="hover:text-[#F97316] transition">Inicio</a></li>
                    <li>
                        <button onclick="toggleNosotrosFooter()" class="hover:text-[#F97316] transition flex items-center gap-1">
                            Nosotros
                            <i id="footer-icon-nosotros" class="fas fa-chevron-down text-xs transition-transform"></i>
                        </button>
                        <ul id="footer-submenu-nosotros" class="ml-4 mt-1 space-y-1 hidden">
                            <li><a href="nosotros-quienes.php" class="hover:text-[#F97316] transition">📌 Quiénes somos</a></li>
                            <li><a href="nosotros-mision-vision.php" class="hover:text-[#F97316] transition">🎯 Misión y Visión</a></li>
                            <li><a href="nosotros-valores.php" class="hover:text-[#F97316] transition">💎 Valores</a></li>
                            <li><a href="nosotros-estructura.php" class="hover:text-[#F97316] transition">🏢 Estructura</a></li>
                            <li><a href="nosotros-mapa-procesos.php" class="hover:text-[#F97316] transition">🗺️ Mapa de Procesos</a></li>
                            <li><a href="nosotros-calidad.php" class="hover:text-[#F97316] transition">✅ Política de Calidad</a></li>
                            <li><a href="nosotros-certificacion.php" class="hover:text-[#F97316] transition">📜 Certificación Legal</a></li>
                        </ul>
                    </li>
                    <li><a href="servicios.php" class="hover:text-[#F97316] transition">Servicios</a></li>
                    <li><a href="donar.php" class="hover:text-[#F97316] transition">Donar</a></li>
                    <li><a href="contacto.php" class="hover:text-[#F97316] transition">Contacto</a></li>
                </ul>
            </div>
            
            <!-- Columna 3: Contacto -->
            <div>
                <h4 class="font-bold mb-3">Contacto</h4>
                <ul class="space-y-2 text-sm opacity-80">
                    <li><i class="fas fa-envelope w-5"></i> fundaciontradein@gmail.com</li>
                    <li><i class="fas fa-phone w-5"></i> 6075843204</li>
                    <li><i class="fab fa-whatsapp w-5"></i> 3015512810</li>
                    <li><i class="fas fa-phone w-5"></i> 3024431752</li>
                    <li class="mt-2"><i class="fas fa-map-marker-alt w-5"></i> AV 0 NRO. 11-30 CC GRAN BULEVAR<br>OF 503A - Cúcuta, Colombia</li>
                </ul>
            </div>
            
            <!-- Columna 4: Legal -->
            <div>
                <h4 class="font-bold mb-3">Legal</h4>
                <ul class="space-y-2 text-sm opacity-80">
                    <li>🏛️ Entidad Sin Ánimo de Lucro</li>
                    <li>📄 NIT: 901.268.815-5</li>
                    <li><a href="certificado.php" class="hover:text-[#F97316] transition">📄 Certificado Cámara de Comercio</a></li>
                    <li>📋 Registro: S0505844</li>
                    <li>📅 Constitución: 27 marzo 2019</li>
                    <li><a href="politicas.php" class="hover:text-[#F97316] transition">📜 Políticas de privacidad</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-white/20 mt-8 pt-6 text-center text-sm opacity-70">
            <p>© 2026 TRADEIN | Todos los derechos reservados | Desarrollado por Adrian G.</p>
        </div>
        
        <!-- Admin -->
        <div class="text-center mt-2">
            <a href="admin_login.php" class="text-xs opacity-30 hover:opacity-100 transition">🔐 Admin</a>
        </div>
    </div>
</footer>
<!-- Botón WhatsApp -->
<a href="https://wa.me/573015512810?text=Hola%20TRADEIN,%20me%20gustaría%20recibir%20información" 
   class="fixed bottom-6 right-6 bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition z-50"
   target="_blank">
    <i class="fab fa-whatsapp text-2xl"></i>
</a>
<script>
    function copiarTexto(id) {
        const texto = document.getElementById(id).innerText;
        navigator.clipboard.writeText(texto);
        alert("📋 " + texto + " copiado al portapapeles");
    }
    
    function toggleNosotrosFooter() {
        const submenu = document.getElementById('footer-submenu-nosotros');
        const icon = document.getElementById('footer-icon-nosotros');
        if (submenu.classList.contains('hidden')) {
            submenu.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            submenu.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    }
</script>
<?php
if(isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true):
?>
<div class="fixed bottom-20 left-4 z-50 bg-[#1A1A1A] text-white rounded-lg shadow-lg overflow-hidden">
    <div class="px-4 py-2 text-sm font-bold border-b border-white/20">✏️ Modo Edición</div>
    <div class="p-2 space-y-1">
        <button onclick="irAEditarAliados()" class="w-full text-left px-3 py-1 text-xs hover:bg-[#F97316] rounded transition">🖼️ Editar aliados</button>
        <button onclick="window.location.href='admin_editor.php'" class="w-full text-left px-3 py-1 text-xs hover:bg-[#F97316] rounded transition">📝 Editor completo</button>
        <a href="admin_logout.php" class="block w-full text-left px-3 py-1 text-xs hover:bg-red-500 rounded transition">🚪 Cerrar sesión</a>
    </div>
</div>
<script>
    let modoEdicionActivo = false;
    
    function activarModoEdicion() {
        if(modoEdicionActivo) {
            document.body.classList.remove('edit-mode');
            modoEdicionActivo = false;
            alert('Modo edición desactivado');
        } else {
            document.body.classList.add('edit-mode');
            modoEdicionActivo = true;
            alert('Modo edición activado');
        }
    }
    
    function irAEditarAliados() {
        window.location.href = 'admin_aliados.php';
    }
</script>
<?php endif; ?>

</body>
</html>