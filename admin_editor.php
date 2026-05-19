<?php
session_start();
include 'admin_config.php';
if(!isAdmin()) { header('Location: index.php'); exit(); }

// Crear carpeta data si no existe
if (!is_dir('data')) {
    mkdir('data', 0777, true);
}

// Cargar todos los textos editables
$textos = [];
if (file_exists('data/textos.json')) {
    $textos = json_decode(file_get_contents('data/textos.json'), true);
    if (!is_array($textos)) {
        $textos = [];
    }
}

// Valores por defecto
$defaults = [
    // Index
    'hero_titulo' => 'Fundación para la Transformación Social, Desarrollo e Innovación',
    'bienvenida_titulo' => 'Bienvenidos a TRADEIN',
    'bienvenida_texto' => '<p>Somos una entidad dedicada a la formulación y ejecución de proyectos con impacto tecnológico e innovador, contribuyendo al desarrollo sostenible de comunidades y grupos poblacionales en Colombia.</p>',
    'servicio1_titulo' => 'Programas Sociales',
    'servicio1_descripcion' => 'Diseñamos programas para adultos mayores, mujeres cabeza de familia, niñez y población desplazada.',
    'servicio2_titulo' => 'Formación',
    'servicio2_descripcion' => 'Capacitación para el trabajo y desarrollo humano, creando oportunidades laborales.',
    'servicio3_titulo' => 'Innovación Tecnológica',
    'servicio3_descripcion' => 'Ferias de ciencia, planes TIC y estrategias digitales para municipios.',
    'permanencia_titulo' => 'Compromiso con la permanencia',
    'permanencia_texto' => 'Más que proyectos temporales, construimos soluciones que perduran en el tiempo y transforman realidades de manera sostenible.',
    'permanencia1_titulo' => 'Desde 2019',
    'permanencia1_texto' => 'Más de 6 años de trabajo ininterrumpido, creciendo y fortaleciendo nuestro impacto.',
    'permanencia2_titulo' => 'Proyectos sostenibles',
    'permanencia2_texto' => 'Diseñamos programas con visión de futuro, generando cambios que perduran.',
    'permanencia3_titulo' => 'Acompañamiento continuo',
    'permanencia3_texto' => 'Seguimiento permanente a nuestros beneficiarios para asegurar el éxito.',
    
    // Nosotros
    'nosotros_historia' => '<p>TRADEIN fue fundada el <strong>27 de marzo de 2019</strong> en Cúcuta, Norte de Santander, con el propósito de generar transformación social a través de la innovación y la tecnología. Desde entonces, hemos trabajado incansablemente para formular y ejecutar proyectos que impactan positivamente a comunidades vulnerables en Colombia.</p>',
    'mision' => '<p>Formular y ejecutar proyectos con impacto tecnológico e innovador, diseñando soluciones integrales que abarcan programas sociales, económicos, de infraestructura, ambientales, agropecuarios, de investigación y comunicación, contribuyendo al desarrollo sostenible de comunidades y grupos poblacionales.</p>',
    'vision' => '<p>Ser líderes reconocidos a nivel local y nacional en la formulación y ejecución de proyectos con impacto tecnológico e innovador, destacándonos por nuestro compromiso con el desarrollo sostenible, la innovación continua y la creación de un impacto positivo duradero.</p>',
    
    // Valores
    'valor1' => 'Excelencia',
    'valor2' => 'Innovación',
    'valor3' => 'Compromiso Social',
    'valor4' => 'Integridad',
    'valor5' => 'Colaboración',
    'valor6' => 'Sostenibilidad',
    'valor7' => 'Aprendizaje Continuo',
    'valor8' => 'Mejora Continua',
    
    // Servicios
    'servicio_linea1_titulo' => 'Diseño y desarrollo de programas',
    'servicio_linea1_lista' => "Adulto mayor\nMujer cabeza de familia\nNiñez maltratada y desprotegida\nPoblación desplazada por conflictos armados o catástrofes",
    'servicio_linea2_titulo' => 'Formación para el trabajo',
    'servicio_linea2_lista' => "Directamente con comunidades\nPor encargo a través de convenios\nFormación para el desarrollo humano\nCertificación de competencias laborales",
    'servicio_linea3_titulo' => 'Creación de microempresas',
    'servicio_linea3_lista' => "Educación y capacitación empresarial\nAcompañamiento en creación de negocios\nAcceso a microcréditos\nMentoría y seguimiento",
    'servicio_linea4_titulo' => 'Formación ciudadana',
    'servicio_linea4_lista' => "Inversión e intercambio comercial\nComercio nacional e internacional\nExportación de bienes y servicios\nCultura ciudadana y participación",
    'servicio_linea5_titulo' => 'Sensibilización y atención',
    'servicio_linea5_lista' => "Niños, niñas y adolescentes\nJóvenes en situación de riesgo\nMujeres víctimas de violencia\nAdultos mayores",
    'servicio_linea6_titulo' => 'Innovación tecnológica',
    'servicio_linea6_lista' => "Ferias de ciencia y tecnología\nPlanes municipales TIC\nEstrategias digitales para municipios\nSuministro de material vegetal clonado",
    
    // Estructura organizacional
    'estructura_area1_titulo' => 'Área Administrativa',
    'estructura_area1_lista' => "Gestión Humana\nGestión Administrativa\nSeguridad en el trabajo\nInfraestructura",
    'estructura_area2_titulo' => 'Área Financiera',
    'estructura_area2_lista' => "Contabilidad\nConvenios\nCartera\nCompras",
    'estructura_area3_titulo' => 'Área de Proyectos',
    'estructura_area3_lista' => "Diseño y desarrollo\nVirtualidad y TIC\nComunicaciones\nEvaluación",
    
    // Política de calidad
    'politica_calidad' => '<p>Comprometidos con la excelencia en la formulación y ejecución de proyectos con impacto tecnológico e innovador, cumpliendo con todos los requisitos legales y reglamentarios aplicables, garantizando la mejora continua de nuestros procesos.</p>',
    
    // Contacto
    'contacto_texto' => 'Estamos ubicados en Cúcuta, listos para atender tus necesidades',
    'horario_atencion' => 'Lunes a Viernes - 8:00 am a 5:00 pm'
];

// Combinar con datos existentes
foreach ($defaults as $key => $value) {
    if (!isset($textos[$key])) {
        $textos[$key] = $value;
    }
}

// Guardar textos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [];
    foreach ($defaults as $key => $value) {
        $data[$key] = $_POST[$key] ?? $value;
    }
    
    file_put_contents('data/textos.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    header('Location: admin_editor.php?guardado=ok');
    exit();
}

$mensaje = '';
if (isset($_GET['guardado']) && $_GET['guardado'] == 'ok') {
    $mensaje = '✅ Todos los textos han sido guardados correctamente';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editor Completo - TRADEIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background: #f3f4f6; font-family: 'Poppins', sans-serif; }
        .editor-card { transition: all 0.3s ease; margin-bottom: 20px; }
        .editor-card:hover { box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1); }
        .ql-editor { min-height: 150px; font-family: 'Poppins', sans-serif; }
        .section-title { background: linear-gradient(135deg, #1A1A1A, #333333); color: white; padding: 10px 15px; border-radius: 10px 10px 0 0; margin: -20px -20px 20px -20px; }
        .nav-tab { cursor: pointer; padding: 10px 20px; border-radius: 10px; transition: all 0.3s; }
        .nav-tab.active { background: #1A1A1A; color: white; }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .ql-toolbar.ql-snow { border-radius: 8px 8px 0 0; background: #f8f9fa; }
        .ql-container.ql-snow { border-radius: 0 0 8px 8px; min-height: 180px; background: white; }
    </style>
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8 max-w-6xl">
    <!-- Encabezado -->
    <div class="bg-white rounded-xl shadow-md p-6 mb-6">
        <div class="flex justify-between items-center flex-wrap gap-4">
            <div>
                <h1 class="text-2xl font-bold text-[#1A1A1A] flex items-center gap-2">
                    <i class="fas fa-edit text-[#F97316]"></i> Editor Completo de la Página
                </h1>
                <p class="text-sm text-gray-500 mt-1">Edita TODOS los textos de la página web (incluye formato: negrita, colores, listas, etc.)</p>
            </div>
            <div class="flex gap-3">
                <a href="admin_dashboard.php" class="bg-[#1A1A1A] text-white px-4 py-2 rounded-lg hover:bg-[#333333] transition">
                    <i class="fas fa-tachometer-alt"></i> Panel de control
                </a>
                <a href="index.php" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition" target="_blank">
                    <i class="fas fa-eye"></i> Ver sitio
                </a>
                <a href="admin_aliados.php" class="bg-[#F97316] text-white px-4 py-2 rounded-lg hover:bg-[#EA580C] transition">
                    <i class="fas fa-handshake"></i> Editar Aliados
                </a>
                <a href="admin_logout.php" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition">
                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                </a>
            </div>
        </div>
    </div>
    
    <?php if($mensaje): ?>
    <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg flex items-center gap-2">
        <i class="fas fa-check-circle text-green-600"></i> <?php echo $mensaje; ?>
    </div>
    <?php endif; ?>
    
    <!-- Pestañas de navegación -->
    <div class="flex flex-wrap gap-2 mb-6 bg-white p-3 rounded-xl shadow-sm">
        <div class="nav-tab active" data-tab="index">🏠 Inicio</div>
        <div class="nav-tab" data-tab="nosotros">👥 Nosotros (Misión, Visión, Valores)</div>
        <div class="nav-tab" data-tab="estructura">🏢 Estructura y Calidad</div>
        <div class="nav-tab" data-tab="servicios">⚙️ Líneas de acción</div>
        <div class="nav-tab" data-tab="contacto">📞 Contacto</div>
    </div>
    
    <form action="" method="POST" id="editorForm">
        
        <!-- PESTAÑA INICIO -->
        <div id="tab-index" class="tab-content active">
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">🏠 SECCIÓN INICIO - HERO</div>
                <div class="mb-4">
                    <label class="block font-semibold mb-2">Título principal (Hero)</label>
                    <input type="text" name="hero_titulo" value="<?php echo htmlspecialchars($textos['hero_titulo']); ?>" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">📝 BIENVENIDA</div>
                <div class="mb-4">
                    <label class="block font-semibold mb-2">Título de bienvenida</label>
                    <input type="text" name="bienvenida_titulo" value="<?php echo htmlspecialchars($textos['bienvenida_titulo']); ?>" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#F97316]">
                </div>
                <div class="mb-4">
                    <label class="block font-semibold mb-2">Texto de bienvenida</label>
                    <div id="editor_bienvenida" style="height: 200px;"><?php echo $textos['bienvenida_texto']; ?></div>
                    <textarea name="bienvenida_texto" style="display:none;"></textarea>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">🎯 3 SERVICIOS DESTACADOS (Inicio)</div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div><label class="font-semibold">Servicio 1</label><input type="text" name="servicio1_titulo" value="<?php echo htmlspecialchars($textos['servicio1_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316] mb-2"><textarea name="servicio1_descripcion" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="3"><?php echo htmlspecialchars($textos['servicio1_descripcion']); ?></textarea></div>
                    <div><label class="font-semibold">Servicio 2</label><input type="text" name="servicio2_titulo" value="<?php echo htmlspecialchars($textos['servicio2_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316] mb-2"><textarea name="servicio2_descripcion" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="3"><?php echo htmlspecialchars($textos['servicio2_descripcion']); ?></textarea></div>
                    <div><label class="font-semibold">Servicio 3</label><input type="text" name="servicio3_titulo" value="<?php echo htmlspecialchars($textos['servicio3_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316] mb-2"><textarea name="servicio3_descripcion" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="3"><?php echo htmlspecialchars($textos['servicio3_descripcion']); ?></textarea></div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">🔄 COMPROMISO CON LA PERMANENCIA</div>
                <div class="mb-4"><label class="font-semibold">Título</label><input type="text" name="permanencia_titulo" value="<?php echo htmlspecialchars($textos['permanencia_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                <div class="mb-4"><label class="font-semibold">Texto</label><textarea name="permanencia_texto" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="3"><?php echo htmlspecialchars($textos['permanencia_texto']); ?></textarea></div>
                <div class="grid md:grid-cols-3 gap-4">
                    <div><label class="font-semibold">Tarjeta 1</label><input type="text" name="permanencia1_titulo" value="<?php echo htmlspecialchars($textos['permanencia1_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316] mb-2"><textarea name="permanencia1_texto" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="2"><?php echo htmlspecialchars($textos['permanencia1_texto']); ?></textarea></div>
                    <div><label class="font-semibold">Tarjeta 2</label><input type="text" name="permanencia2_titulo" value="<?php echo htmlspecialchars($textos['permanencia2_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316] mb-2"><textarea name="permanencia2_texto" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="2"><?php echo htmlspecialchars($textos['permanencia2_texto']); ?></textarea></div>
                    <div><label class="font-semibold">Tarjeta 3</label><input type="text" name="permanencia3_titulo" value="<?php echo htmlspecialchars($textos['permanencia3_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316] mb-2"><textarea name="permanencia3_texto" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="2"><?php echo htmlspecialchars($textos['permanencia3_texto']); ?></textarea></div>
                </div>
            </div>
        </div>
        
        <!-- PESTAÑA NOSOTROS -->
        <div id="tab-nosotros" class="tab-content">
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">📖 HISTORIA</div>
                <div id="editor_historia" style="height: 200px;"><?php echo $textos['nosotros_historia']; ?></div>
                <textarea name="nosotros_historia" style="display:none;"></textarea>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">🎯 MISIÓN Y VISIÓN</div>
                <div class="mb-4"><label class="font-semibold">Misión</label><div id="editor_mision" style="height: 180px;"><?php echo $textos['mision']; ?></div><textarea name="mision" style="display:none;"></textarea></div>
                <div class="mb-4"><label class="font-semibold">Visión</label><div id="editor_vision" style="height: 180px;"><?php echo $textos['vision']; ?></div><textarea name="vision" style="display:none;"></textarea></div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">💎 VALORES (8 valores)</div>
                <div class="grid md:grid-cols-4 gap-3">
                    <div><label>Valor 1</label><input type="text" name="valor1" value="<?php echo htmlspecialchars($textos['valor1']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 2</label><input type="text" name="valor2" value="<?php echo htmlspecialchars($textos['valor2']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 3</label><input type="text" name="valor3" value="<?php echo htmlspecialchars($textos['valor3']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 4</label><input type="text" name="valor4" value="<?php echo htmlspecialchars($textos['valor4']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 5</label><input type="text" name="valor5" value="<?php echo htmlspecialchars($textos['valor5']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 6</label><input type="text" name="valor6" value="<?php echo htmlspecialchars($textos['valor6']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 7</label><input type="text" name="valor7" value="<?php echo htmlspecialchars($textos['valor7']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                    <div><label>Valor 8</label><input type="text" name="valor8" value="<?php echo htmlspecialchars($textos['valor8']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                </div>
            </div>
        </div>
        
        <!-- PESTAÑA ESTRUCTURA Y CALIDAD -->
        <div id="tab-estructura" class="tab-content">
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">🏢 ÁREA ADMINISTRATIVA</div>
                <div class="mb-4"><label class="font-semibold">Título</label><input type="text" name="estructura_area1_titulo" value="<?php echo htmlspecialchars($textos['estructura_area1_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                <div class="mb-4"><label class="font-semibold">Lista de subprocesos (un elemento por línea)</label><textarea name="estructura_area1_lista" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="5"><?php echo htmlspecialchars($textos['estructura_area1_lista']); ?></textarea></div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">📊 ÁREA FINANCIERA</div>
                <div class="mb-4"><label class="font-semibold">Título</label><input type="text" name="estructura_area2_titulo" value="<?php echo htmlspecialchars($textos['estructura_area2_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                <div class="mb-4"><label class="font-semibold">Lista de subprocesos (un elemento por línea)</label><textarea name="estructura_area2_lista" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="5"><?php echo htmlspecialchars($textos['estructura_area2_lista']); ?></textarea></div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">📋 ÁREA DE PROYECTOS</div>
                <div class="mb-4"><label class="font-semibold">Título</label><input type="text" name="estructura_area3_titulo" value="<?php echo htmlspecialchars($textos['estructura_area3_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                <div class="mb-4"><label class="font-semibold">Lista de subprocesos (un elemento por línea)</label><textarea name="estructura_area3_lista" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="5"><?php echo htmlspecialchars($textos['estructura_area3_lista']); ?></textarea></div>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">✅ POLÍTICA DE CALIDAD</div>
                <div id="editor_calidad" style="height: 200px;"><?php echo $textos['politica_calidad']; ?></div>
                <textarea name="politica_calidad" style="display:none;"></textarea>
            </div>
        </div>
        
        <!-- PESTAÑA SERVICIOS -->
        <div id="tab-servicios" class="tab-content">
            <?php for($i=1; $i<=6; $i++): ?>
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">🔧 LÍNEA DE ACCIÓN <?php echo $i; ?></div>
                <div class="mb-3"><label class="font-semibold">Título</label><input type="text" name="servicio_linea<?php echo $i; ?>_titulo" value="<?php echo htmlspecialchars($textos['servicio_linea'.$i.'_titulo']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                <div class="mb-3"><label class="font-semibold">Lista de elementos (un elemento por línea)</label><textarea name="servicio_linea<?php echo $i; ?>_lista" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]" rows="6"><?php echo htmlspecialchars($textos['servicio_linea'.$i.'_lista']); ?></textarea></div>
            </div>
            <?php endfor; ?>
        </div>
        
        <!-- PESTAÑA CONTACTO -->
        <div id="tab-contacto" class="tab-content">
            <div class="bg-white rounded-xl shadow-md p-6 editor-card">
                <div class="section-title">📞 TEXTO DE CONTACTO</div>
                <div class="mb-4"><label class="font-semibold">Subtítulo</label><input type="text" name="contacto_texto" value="<?php echo htmlspecialchars($textos['contacto_texto']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
                <div class="mb-4"><label class="font-semibold">Horario de atención</label><input type="text" name="horario_atencion" value="<?php echo htmlspecialchars($textos['horario_atencion']); ?>" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#F97316]"></div>
            </div>
        </div>
        
        <!-- Botón guardar -->
        <div class="bg-white rounded-xl shadow-md p-6 flex justify-between items-center sticky bottom-0 z-10">
            <a href="admin_dashboard.php" class="text-gray-500 hover:text-gray-700 transition">
                <i class="fas fa-arrow-left"></i> Volver al panel
            </a>
            <button type="submit" class="bg-[#F97316] text-white px-8 py-3 rounded-lg font-semibold hover:bg-[#EA580C] transition flex items-center gap-2 shadow-md">
                <i class="fas fa-save"></i> GUARDAR TODOS LOS CAMBIOS
            </button>
        </div>
        
    </form>
</div>

<script>
    // Configuración completa del editor Quill
    var quillOptions = {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }, { 'indent': '-1'}, { 'indent': '+1' }],
                ['link', 'clean']
            ]
        }
    };
    
    // Inicializar editores
    var quillBienvenida = new Quill('#editor_bienvenida', quillOptions);
    var quillHistoria = new Quill('#editor_historia', quillOptions);
    var quillMision = new Quill('#editor_mision', quillOptions);
    var quillVision = new Quill('#editor_vision', quillOptions);
    var quillCalidad = new Quill('#editor_calidad', quillOptions);
    
    // Copiar contenido HTML antes de enviar
    document.getElementById('editorForm').addEventListener('submit', function() {
        document.querySelector('textarea[name="bienvenida_texto"]').value = quillBienvenida.root.innerHTML;
        document.querySelector('textarea[name="nosotros_historia"]').value = quillHistoria.root.innerHTML;
        document.querySelector('textarea[name="mision"]').value = quillMision.root.innerHTML;
        document.querySelector('textarea[name="vision"]').value = quillVision.root.innerHTML;
        document.querySelector('textarea[name="politica_calidad"]').value = quillCalidad.root.innerHTML;
    });
    
    // Sistema de pestañas
    document.querySelectorAll('.nav-tab').forEach(tab => {
        tab.addEventListener('click', () => {
            document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
            tab.classList.add('active');
            document.getElementById('tab-' + tab.dataset.tab).classList.add('active');
        });
    });
</script>
</body>
</html>