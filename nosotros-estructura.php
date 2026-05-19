<?php include 'header.php'; ?>

<!-- Precargar la imagen de fondo -->
<link rel="preload" as="image" href="img/estructura.png" type="image/png">

<style>
    /* Estilos consistentes con las otras páginas */
    .estructura-hero {
        position: relative;
        overflow: hidden;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #2d2d2d;
    }
    
    /* Imagen de fondo - ajustada sin zoom excesivo */
    .estructura-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center 20%;
        background-attachment: fixed;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        z-index: 0;
    }
    
    .estructura-bg.loaded {
        opacity: 1;
    }
    
    /* Overlay oscuro */
    .estructura-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }
    
    /* Contenido del banner */
    .estructura-hero .container {
        position: relative;
        z-index: 2;
    }
    
    /* Título */
    .estructura-hero h1 {
        color: white;
        text-shadow: 0 1px 3px rgba(0,0,0,0.3);
    }
    
    .estructura-hero .inline-flex {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(4px);
    }
    
    .estructura-hero .w-20 {
        background-color: #F97316;
    }
    
    .estructura-hero p {
        color: rgba(255,255,255,0.9);
    }
    
    /* Ajuste responsive */
    @media (max-width: 768px) {
        .estructura-hero {
            min-height: 40vh;
        }
        .estructura-bg {
            background-attachment: scroll;
            background-position: center 30%;
        }
    }
    
    /* ===== ESTILOS ORIGINALES DE LA ESTRUCTURA ===== */
    .mapa-card {
        transition: all 0.3s ease;
        background: white;
        border-radius: 1rem;
        overflow: hidden;
    }
    .mapa-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
    }
    
    .nivel-junta {
        background: linear-gradient(135deg, #0B2B40, #1A3A4A);
        color: white;
        text-align: center;
        padding: 12px;
        border-radius: 10px;
        font-weight: bold;
        margin-bottom: 12px;
        font-size: 0.95rem;
    }
    
    .nivel-apoyo {
        background: linear-gradient(135deg, #2D5A6E, #1D6F7A);
        color: white;
        text-align: center;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 12px;
        font-size: 0.85rem;
    }
    
    .nodo-principal {
        background: linear-gradient(135deg, #1A1A1A, #333333);
        color: white;
        text-align: center;
        padding: 12px;
        border-radius: 10px;
        font-weight: bold;
        margin-bottom: 15px;
        font-size: 0.95rem;
    }
    
    .nodo-coordinador {
        background-color: #F3F4F6;
        border-left: 3px solid #F97316;
        padding: 10px 12px;
        margin-bottom: 8px;
        border-radius: 8px;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    .nodo-coordinador:hover {
        background-color: #F97316;
        color: white;
        border-left-color: white;
    }
    
    .conector {
        text-align: center;
        color: #F97316;
        font-size: 1.2rem;
        margin: 5px 0;
    }
    
    .area-badge {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 0.7rem;
        font-weight: 600;
        margin-bottom: 12px;
    }
    .badge-administrativa { background: #8B5CF6; color: white; }
    .badge-financiera { background: #10B981; color: white; }
    .badge-proyectos { background: #3B82F6; color: white; }
</style>

<!-- ==================== BANNER CON IMAGEN DE FONDO ==================== -->
<section class="estructura-hero">
    <!-- Imagen de fondo -->
    <div id="estructuraBg" class="estructura-bg" style="background-image: url('img/estructura.png');"></div>
    <div class="estructura-overlay"></div>
    
    <div class="container mx-auto px-4 text-center">
        <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full text-sm text-white mb-4">
            <i class="fas fa-sitemap"></i> Organigrama
        </div>
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4">Estructura organizacional</h1>
        <div class="w-20 h-1 mx-auto my-4 rounded-full"></div>
        <p class="text-lg max-w-2xl mx-auto">Conoce cómo está organizada nuestra fundación</p>
    </div>
</section>

<!-- ==================== CONTENIDO PRINCIPAL ==================== -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <!-- Estructura general común a todas las áreas -->
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-6 rounded-2xl mb-12">
            <div class="text-center mb-6">
                <span class="bg-[#1A1A1A] text-white px-4 py-1 rounded-full text-sm">🏛️ Nivel Directivo</span>
            </div>
            <div class="max-w-md mx-auto">
                <div class="nivel-junta">🎯 JUNTA DIRECTIVA</div>
                <div class="conector"><i class="fas fa-arrow-down"></i></div>
                <div class="nivel-apoyo">📋 Revisor Fiscal</div>
                <div class="conector"><i class="fas fa-arrow-down"></i></div>
                <div class="nivel-apoyo">👔 Dirección General</div>
            </div>
        </div>
        
        <!-- ==================== ÁREA ADMINISTRATIVA ==================== -->
        <div class="mb-12">
            <div class="flex items-center justify-center gap-2 mb-6">
                <span class="area-badge badge-administrativa">Área 1</span>
                <h2 class="text-2xl md:text-3xl font-bold text-[#1A1A1A]">Área Administrativa</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="mapa-card p-5 bg-gray-50 rounded-2xl shadow-md">
                    <div class="nodo-principal">🏛️ Director Administrativo</div>
                    <div class="conector"><i class="fas fa-arrow-down"></i></div>
                    <div class="nodo-coordinador">👥 Coordinador de Gestión Humana</div>
                    <div class="pl-6 text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Contratación</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Capacitación</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Evaluación de desempeño</div>
                    </div>
                    <div class="nodo-coordinador">📋 Apoyo Administrativo</div>
                    <div class="pl-6 text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Gestión documental</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Archivo</div>
                    </div>
                    <div class="nodo-coordinador">🛡️ Seguridad y Salud en el Trabajo</div>
                    <div class="pl-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Riesgos laborales</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Capacitación SST</div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-bold text-[#1A1A1A] mb-3 flex items-center gap-2">
                        <i class="fas fa-info-circle text-[#F97316]"></i> Descripción
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        En el área administrativa de la Fundación TRADEIN se desarrollan los procesos de gestión humana: contratación, capacitación, evaluación de desempeño y fortalecimiento al equipo de trabajo, garantizando así la mejora continua.
                    </p>
                    <div class="mt-4 pt-4 border-t grid grid-cols-2 gap-2 text-sm text-gray-500">
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Gestión Humana</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Gestión Administrativa</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Seguridad en el trabajo</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Infraestructura</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ==================== ÁREA FINANCIERA ==================== -->
        <div class="mb-12">
            <div class="flex items-center justify-center gap-2 mb-6">
                <span class="area-badge badge-financiera">Área 2</span>
                <h2 class="text-2xl md:text-3xl font-bold text-[#1A1A1A]">Área Financiera</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="mapa-card p-5 bg-gray-50 rounded-2xl shadow-md">
                    <div class="nodo-principal">💰 Director Financiero</div>
                    <div class="conector"><i class="fas fa-arrow-down"></i></div>
                    <div class="nodo-coordinador">📊 Contabilidad</div>
                    <div class="pl-6 text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Registros contables</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Estados financieros</div>
                    </div>
                    <div class="nodo-coordinador">🤝 Contabilidad de Convenios</div>
                    <div class="pl-6 text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Liquidación de convenios</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Seguimiento financiero</div>
                    </div>
                    <div class="nodo-coordinador">🛒 Gestión de Compras</div>
                    <div class="pl-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Adquisiciones</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Proveedores</div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-bold text-[#1A1A1A] mb-3 flex items-center gap-2">
                        <i class="fas fa-info-circle text-[#F97316]"></i> Descripción
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        El área financiera de la Fundación TRADEIN lidera procesos y subprocesos de gestión financiera, contabilidad, convenios, cartera y compras.
                    </p>
                    <div class="mt-4 pt-4 border-t grid grid-cols-2 gap-2 text-sm text-gray-500">
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Contabilidad</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Convenios</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Cartera</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Compras</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- ==================== ÁREA DE PROYECTOS ==================== -->
        <div class="mb-12">
            <div class="flex items-center justify-center gap-2 mb-6">
                <span class="area-badge badge-proyectos">Área 3</span>
                <h2 class="text-2xl md:text-3xl font-bold text-[#1A1A1A]">Área de Proyectos</h2>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div class="mapa-card p-5 bg-gray-50 rounded-2xl shadow-md">
                    <div class="nodo-principal">📌 Director de Proyectos</div>
                    <div class="conector"><i class="fas fa-arrow-down"></i></div>
                    <div class="nodo-coordinador">🎨 Coordinador de Diseño y Desarrollo</div>
                    <div class="pl-6 text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Formulación de proyectos</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Diseño metodológico</div>
                    </div>
                    <div class="nodo-coordinador">💻 Coordinador de Virtualidad y desarrollo TIC</div>
                    <div class="pl-6 text-sm text-gray-500 mb-2">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Plataformas digitales</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Implementación TIC</div>
                    </div>
                    <div class="nodo-coordinador">📢 Coordinador de Comunicaciones</div>
                    <div class="pl-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Estrategia digital</div>
                        <div class="flex items-center gap-2 py-1"><i class="fas fa-check-circle text-green-500 text-xs"></i> Redes sociales</div>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-6 rounded-2xl shadow-md">
                    <h3 class="text-lg font-bold text-[#1A1A1A] mb-3 flex items-center gap-2">
                        <i class="fas fa-info-circle text-[#F97316]"></i> Descripción
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        El área de proyectos de la Fundación TRADEIN se encarga de la formulación, estructuración, ejecución y medición de proyectos en cada una de las líneas de atención priorizadas.
                    </p>
                    <div class="mt-4 pt-4 border-t grid grid-cols-2 gap-2 text-sm text-gray-500">
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Diseño y desarrollo</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Virtualidad y TIC</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Comunicaciones</p>
                        <p><i class="fas fa-check text-green-500 mr-1"></i> Evaluación</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Texto final -->
        <div class="bg-gray-50 p-6 rounded-2xl mt-8 text-center">
            <i class="fas fa-sitemap text-3xl text-[#F97316] mb-3 block"></i>
            <p class="text-gray-700 leading-relaxed">
                La estructura organizacional de TRADEIN brinda un orden y permite a cada responsable y colaborador de área seguir una determinada dirección, así mismo diferenciar tareas y asignar correctamente a los profesionales en los equipos de trabajo.
            </p>
        </div>
        
    </div>
</section>

<!-- Script para carga optimizada de la imagen -->
<script>
    (function() {
        var bgImg = new Image();
        var bgDiv = document.getElementById('estructuraBg');
        if (bgImg && bgDiv) {
            bgImg.onload = function() {
                bgDiv.classList.add('loaded');
            };
            bgImg.src = 'img/estructura.png';
            if (bgImg.complete) {
                bgDiv.classList.add('loaded');
            }
        }
    })();
</script>

<?php include 'footer.php'; ?>