<?php include 'header.php'; ?>

<section class="bg-gradient-to-br from-[#1A1A1A] to-[#333333] text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Certificado Cámara de Comercio</h1>
        <p class="text-xl max-w-2xl mx-auto mt-4">Documento oficial de existencia y representación legal</p>
    </div>
</section>

<div class="container mx-auto px-4 py-12 max-w-5xl">
    <div class="bg-white rounded-xl shadow-md p-4">
        <div class="mb-4 flex justify-between items-center flex-wrap gap-3">
            <h2 class="text-xl font-bold text-[#1A1A1A]">Certificado de Existencia y Representación Legal</h2>
            <a href="docs/certificado-camara-comercio.pdf" download class="bg-[#1A1A1A] text-white px-4 py-2 rounded-lg hover:bg-[#333333] transition flex items-center gap-2">
                <i class="fas fa-download"></i> Descargar PDF
            </a>
        </div>
        
        <!-- Visualizador de PDF -->
        <div class="w-full h-[600px] rounded-lg overflow-hidden border border-gray-200">
            <iframe src="docs/certificado-camara-comercio.pdf" class="w-full h-full" frameborder="0">
                Tu navegador no soporta visualización de PDF. 
                <a href="docs/certificado-camara-comercio.pdf">Descargar PDF</a>
            </iframe>
        </div>
        
        <div class="mt-4 text-center text-sm text-gray-500">
            <p><i class="fas fa-shield-alt text-green-600 mr-1"></i> Documento oficial emitido por la Cámara de Comercio de Cúcuta</p>
            <p class="text-xs mt-1">Código de verificación: <span class="font-mono">NA6V1suvZm</span> | Verificable en <a href="https://sii.confecamaras.co/vista/plantilla/cv.php?empresa=11" target="_blank" class="text-[#F97316] hover:underline">sii.confecamaras.co</a></p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>