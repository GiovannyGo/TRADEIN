<?php include 'header.php'; ?>

<style>
    .legal-card {
        transition: all 0.3s ease;
    }
    .legal-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
    }
    .badge-legal {
        background: linear-gradient(135deg, #F97316 0%, #EA580C 100%);
    }
    .icon-circle {
        width: 50px;
        height: 50px;
        background-color: rgba(249, 115, 22, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    .legal-card:hover .icon-circle {
        background-color: #F97316;
    }
    .legal-card:hover .icon-circle i {
        color: white !important;
    }
</style>

<!-- ==================== BANNER CON IMAGEN DE FONDO ==================== -->
<section class="relative py-20 overflow-hidden min-h-[40vh] flex items-center" 
         style="background-image: url('img/legal.jpg'); background-size: cover; background-position: center center;">
    
    <!-- Overlay más suave para mejor legibilidad -->
    <div class="absolute inset-0 bg-black/40"></div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-1 rounded-full text-sm text-white mb-4">
            ⚖️ Transparencia y legalidad
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 drop-shadow-lg">Certificación legal</h1>
        <div class="w-20 h-1 bg-[#F97316] mx-auto my-4 rounded-full"></div>
        <p class="text-xl max-w-2xl mx-auto text-white drop-shadow">
            Conoce nuestros datos oficiales de constitución y representación legal
        </p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-5xl">
        
        <!-- Sellos de confianza -->
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <div class="bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm flex items-center gap-2">
                <i class="fas fa-check-circle"></i> ESAL - Entidad Sin Ánimo de Lucro
            </div>
            <div class="bg-blue-50 text-blue-700 px-4 py-2 rounded-full text-sm flex items-center gap-2">
                <i class="fas fa-building"></i> Cámara de Comercio de Cúcuta
            </div>
            <div class="bg-purple-50 text-purple-700 px-4 py-2 rounded-full text-sm flex items-center gap-2">
                <i class="fas fa-file-alt"></i> RUP Actualizado
            </div>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Datos de constitución -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md legal-card">
                <div class="flex items-center gap-4 mb-4">
                    <div class="icon-circle">
                        <i class="fas fa-building text-xl text-[#F97316]"></i>
                    </div>
                    <div>
                        <span class="text-xs text-[#F97316] font-semibold">Documento oficial</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Datos de constitución</h3>
                    </div>
                </div>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Razón Social:</span> <span class="flex-1">FUNDACIÓN PARA LA TRANSFORMACIÓN SOCIAL DESARROLLO E INNOVACIÓN</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Nombre Comercial:</span> <span class="flex-1">TRADEIN</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">NIT:</span> <span class="flex-1">901.268.815-5</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Tipo:</span> <span class="flex-1">Entidad Sin Ánimo de Lucro (ESAL)</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Fecha Constitución:</span> <span class="flex-1">27 de marzo de 2019</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Registro Cámara:</span> <span class="flex-1">S0505844</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">RUP:</span> <span class="flex-1">Registro Único de Proponentes actualizado</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Tamaño:</span> <span class="flex-1">Pequeña empresa</span></li>
                </ul>
                <div class="mt-4 pt-3 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span>Certificado vigente</span>
                    </div>
                </div>
            </div>
            
            <!-- Representación Legal -->
            <div class="bg-gray-50 p-6 rounded-2xl shadow-md legal-card">
                <div class="flex items-center gap-4 mb-4">
                    <div class="icon-circle">
                        <i class="fas fa-user-tie text-xl text-[#F97316]"></i>
                    </div>
                    <div>
                        <span class="text-xs text-[#F97316] font-semibold">Autorizado por</span>
                        <h3 class="text-xl font-bold text-[#1A1A1A]">Representación Legal</h3>
                    </div>
                </div>
                <ul class="space-y-3 text-gray-600 text-sm">
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Representante Legal:</span> <span class="flex-1">MARTHA MORELIA SANCHEZ SANGUINO</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Cédula:</span> <span class="flex-1">C.C. 60.292.506</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Entidad de control:</span> <span class="flex-1">Alcaldía de Cúcuta</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Cámara de Comercio:</span> <span class="flex-1">Cúcuta</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Registro No.:</span> <span class="flex-1">S0505844</span></li>
                    <li class="flex flex-wrap gap-1"><span class="font-semibold w-40">Última renovación:</span> <span class="flex-1">2025</span></li>
                </ul>
                <div class="mt-4 pt-3 border-t border-gray-200">
                    <div class="flex items-center gap-2 text-xs text-gray-400">
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span>Renovación al día</span>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Certificado PDF -->
        <div class="mt-8 bg-gradient-to-r from-gray-50 to-gray-100 p-6 rounded-2xl shadow-md">
            <div class="flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-[#F97316]/10 rounded-full flex items-center justify-center">
                        <i class="fas fa-file-pdf text-2xl text-red-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#1A1A1A]">Certificado Cámara de Comercio</h4>
                        <p class="text-xs text-gray-500">Documento oficial de existencia y representación legal</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <a href="certificado.php" class="bg-[#1A1A1A] text-white px-5 py-2 rounded-lg hover:bg-[#333333] transition flex items-center gap-2">
                        <i class="fas fa-eye"></i> Ver certificado
                    </a>
                    <a href="docs/certificado-camara-comercio.pdf" download class="border border-[#F97316] text-[#F97316] px-5 py-2 rounded-lg hover:bg-[#F97316] hover:text-white transition flex items-center gap-2">
                        <i class="fas fa-download"></i> Descargar PDF
                    </a>
                </div>
            </div>
            <div class="mt-3 text-center">
                <p class="text-xs text-gray-500">
                    <i class="fas fa-shield-alt text-green-600 mr-1"></i> 
                    Código de verificación: <span class="font-mono bg-white px-2 py-0.5 rounded">NA6V1suvZm</span>
                    <br>Verificable en: <a href="https://sii.confecamaras.co/vista/plantilla/cv.php?empresa=11" target="_blank" class="text-[#F97316] hover:underline">sii.confecamaras.co</a>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
