<?php include("header.php"); ?>

		<title>Neurosport Clínica de Fisioterapia - Tratamientos</title>
		
		<!-- Accordion -->
		<script>
			$( function(){
 
			//algo.com/archivo.html?clave  ('clave' debe ser un numero)
			var indice = String(window.location).split('?')[1];
		 
			//Oculto todos los contenidos del acordeon
			$('.accordionContent').hide();
		 
			//Le doy un evento a cada h2 que son los titulos de cada tratamiento
			$('#accordion>.accordion-trigger').click(function() {
				//Si activo esta definido quiere decir que hay un contenido abierto, entonces lo cierro
				if ( typeof activo != 'undefined' )
					activo.slideUp();
		 
				//Guardo en activo el div accordionContent y a continuacion lo abro
				activo = $(this).next();
				activo.slideDown('normal');
			});
		 
			//Lanzo un click en la pestaña segun el indice que obtengo de la url
			$('#accordion>.accordion-trigger:eq('+indice+')').click();
		});
		</script>

	</head>
	
	<body lang="es">
	

<?php include("menu.php"); ?>
			
			<!-- Content -->
			<div id="content">
				<!-- masthead -->
		        <div id="masthead">
					<span class="head">Tratamientos</span>
					<ul class="breadcrumbs">
						<li><a href="inicio.php">inicio</a>/tratamientos</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->
				
				<!-- page content -->
				<div id="page-content-full">
				
				<h2 class="h-margin">¿Qué tratamos?</h2>
				<img src="img\tratamientos.jpg" width="38%" align="right" alt="" style="margin-left: 10px">
				<p>En <b>Neurosport Clínica de Fisioterapia Avanzada</b>, apostamos por un abordaje completo de la lesión, basándonos en el diagnóstico inicial. Buscamos el origen de la lesión, no nos quedamos sólo en el tratamiento del síntoma, sino que abordamos la causa para así evitar recaídas.</p>
				<p>Nuestros tratamientos residen en nuestras manos, apostamos por una fisioterapia de calidad basándonos en la Terapia Manual, utilizando las técnicas manuales más avanzadas y apoyándonos en la tecnología más avanzada.</p>
				<p>Estamos especializados en:</p>
				<div class="lists-check" style="padding-bottom: 10px">
					<ul>
						<li>El <b>tratamiento integral de los tejidos blandos</b>: ligamentos, tendones, músculos, cápsula, etc.</li>
						<li>En <b>terapias manuales</b> con el más alto reconocimiento científico como son <i>Mulligan Concept</i> y <i>Maitland</i>.</li>
						<li>Somos expertos en el <b>tratamiento de la Articulación Temporomandibular (ATM)</b>.</li>
						<li>El <b>tratamiento del nervio periférico</b> y sus patologías.</li>
						<li><b>Asesoramiento y readaptación a las actividades de la vida diaria</b>, tanto deportivas como no deportivas. Después del tratamiento y solución de la lesión, combinamos unas sesiones de readaptación deportiva para lograr el fortalecimiento de la estructura lesionada con el fin de evitar recaídas.</li>
						<li><b>Pilates terapéutico</b>, sesiones de pilates dirigidas y personalizadas para cada caso, con el fin de fortalecer el cuerpo y/o la zona lesionada.</li>
						<li><b>Pilates para embarazadas</b>, sesiones de pilates individualizadas o en grupos muy reducidos, con el fin de preparar a las mamás durante el embarazo, evitando las dolencias típicas, tales cómo: ciáticas, debilidad abdominal, debilidad de la musculatura del suelo pélvico.</li>
					</ul>
							</div>
				
				<!-- Accordions -->
				<div id="accordion">
					<div class="accordion-trigger">Fisioterapia Básica</div>		
					<div class="accordionContent">
						<img src="img\electroterapia.jpg" width="200" height="299" align="right" alt="">
						<p style="margin-top: 20px">Cualquier patología del músculo, tendón, ligamento, articular:</p>
						<div class="lists-check" style="padding-bottom: 130px">
								<ul>
									<li>Contracturas</li>
									<li>Esguinces</li>
									<li>Luxaciones</li>
									<li>Tratamiento post-quirúrgico</li>
									<li>Masajes</li>
								</ul>
							</div>
					</div>
					
					<div class="accordion-trigger">Fisioterapia Avanzada</div>		
					<div class="accordionContent">
						<div class="lists-check">
								<ul>
									<li><b>Lesiones de los tejidos blandos:</b> bursitis, capsulitis, tendinopatías tanto agudas como crónicas, roturas fibrilares, fascitis plantar, fibrosis, adherencias post-quirúrgicas, cicatrices….</li>
									<li><b>Lesiones articulares:</b> limitaciones del rango articular, manguito rotador, cadera en resorte, dedos martillo, escoliosis, latigazo cervical, epicondilalgia (codo tenista), epitrocleitis (codo golfista), dupuytren, hombro congelado….</li>
									<li><b>Lesiones de la Articulación Mandíbular:</b> bruxismo, déficit de apertura o cierre de la boca, debilidad en la masticación, tratamiento post-odontología, cefaleas, neuralgia del trigémino, neuralgia del facial, dolor oro facial….</li>
								</ul>
							</div>
					</div>
					
					<div class="accordion-trigger">Fisioterapia Neurológica</div>			
					<div class="accordionContent">
						<p style="margin-top: 20px">Tratamiento, asesoramiento y seguimiento individualizado de cada patología neurológica, tanto del <b>SNC (Sistema Nervioso Central)</b> como Párkinson, ELA, Esclerosis Múltiple, Paralísis, ACV, ICTUS, como del <b>SNP (Sistema Nervioso Periférico)</b> como Ciáticas, Neuralgias periféricas, Cefaleas, Migrañas, Vértigos, Parestesias.</p>
					</div>
				</div>
				    <!-- ENDS Accordions -->
				</div>
			<!-- ENDS page content -->
			</div>
			<!-- ENDS content -->
			
			<div class="clearfix"></div>
			<div class="shadow-main"></div>
			
		</div>
		<!-- ENDS MAIN -->
		
<?php include("footer.php"); ?>