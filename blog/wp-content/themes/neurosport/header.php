<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	

	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
	
	<?php wp_head(); ?>
	
		<!--[if lt IE 9]>
			<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->
	
		<!-- JS -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.6.4.min.js"></script>
		
		<!--  <script src="js/less-grid-4.js"></script> -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tabs.js"></script>
		
		<!-- Masonry -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/masonry.min.js" ></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/imagesloaded.js" ></script>
		<!-- ENDS Masonry -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/jquery.tweet.css" media="all"  /> 
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/tweet/jquery.tweet.js" ></script> 
		<!-- ENDS Tweet -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="<?php echo get_stylesheet_directory_uri(); ?>/css/superfish.css" /> 
		<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/superfish-1.4.8/js/superfish.js"></script>
		<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- prettyPhoto -->
		<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/prettyPhoto/css/prettyPhoto.css"  media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/poshytip-1.1/src/tip-twitter/tip-twitter.css"  />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/poshytip-1.1/src/tip-yellowsimple/tip-yellowsimple.css"  />
		<script  src="<?php echo get_stylesheet_directory_uri(); ?>/js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Flex Slider -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/flexslider.css" >
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
		<!-- ENDS Flex Slider -->
		
		<!-- Lessgrid -->
		<link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/css/lessgrid.css"/>
		
		<!-- modernizr -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js"></script>
		
</head>

<body <?php body_class(); ?>>
	<!-- mobile-nav -->
		<div id="mobile-nav-holder">
			<div class="wrapper">
				<ul id="mobile-nav">
					<li  class="current-menu-item"><a href="<?php echo esc_url( __('www.neurosportavila.es/inicio.php', 'neurosport'));?>">inicio</a></li>
					<li><a href="<?php echo esc_url( __('www.neurosportavila.es/elcentro.php', 'neurosport'));?>">el centro</a></li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/conocenos.php', 'neurosport'));?>">conócenos</a></li>
						<li><a href="">técnicas</a>
							<ul>
							<li><a href="/blog/terapia-manual-avanzada/">Terapia Manual Avanzada</a></li>
							<li><a href="/blog/fisioterapia-invasiva-ecoguiada/">Fisioterapia Invasiva Ecoguiada</a></li>
							<li><a href="/blog/ecografia-musculoesqueletica/">Ecografía Musculoesquelética</a></li>
							<li><a href="/blog/mesoterapia/">Mesoterapia</a></li>
							<li><a href="/blog/puncion-seca/">Punción Seca</a></li>
							<li><a href="/blog/neuromodulacion/">Neuromodulación</a></li>
							<li><a href="/blog/epi-ecoguiada/">EPI® Ecoguiada</a></li>
							<li><a href="/blog/diatermia/">Diatermia/Tecarterapia</a></li>
							<li><a href="/blog/readaptacion-funcional-y-deportiva/">Readaptación Funcional y Deportiva</a></li>
							</ul>
						</li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php', 'neurosport'));?>">tratamientos</a>
							<ul>
								<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php?1', 'neurosport'));?>">Fisioterapia Básica</a></li>
								<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php?2', 'neurosport'));?>">Fisioterapia Avanzada</a></li>
								<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php?3', 'neurosport'));?>">Fisioterapia Neurológica</a></li>
							</ul>
						</li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/galeria.php', 'neurosport'));?>">galería</a></li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/blog', 'neurosport'));?>">blog</a></li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/contactar.php', 'neurosport'));?>">contactar</a></li>
				</ul>
				<div id="nav-open"><a href="#">Menu</a></div>
			</div>
		</div>
		<!-- ENDS mobile-nav -->

		<header>
				
			<div class="wrapper">
					
				<a href="<?php echo esc_url( __('www.neurosportavila.es/inicio.php', 'neurosport'));?>" id="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logonuevo.png" alt="Neurosport" title="Neurosport" width="190px">
				</a>
				
				<nav>
					<ul id="nav" class="sf-menu">
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/elcentro.php', 'neurosport'));?>">el centro<span class="subheader">instalaciones</span></a></li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/conocenos.php', 'neurosport'));?>">conócenos<span class="subheader">quienes somos</span></a></li>
						<li><a href="">técnicas<span class="subheader">que hacemos</span></a>
							<ul>
							<li><a href="/blog/terapia-manual-avanzada/">Terapia Manual Avanzada</a></li>
							<li><a href="/blog/fisioterapia-invasiva-ecoguiada/">Fisioterapia Invasiva Ecoguiada</a></li>
							<li><a href="/blog/ecografia-musculoesqueletica/">Ecografía Musculoesquelética</a></li>
							<li><a href="/blog/mesoterapia/">Mesoterapia</a></li>
							<li><a href="/blog/puncion-seca/">Punción Seca</a></li>
							<li><a href="/blog/neuromodulacion/">Neuromodulación</a></li>
							<li><a href="/blog/epi-ecoguiada/">EPI® Ecoguiada</a></li>
							<li><a href="/blog/diatermia/">Diatermia/Tecarterapia</a></li>
							<li><a href="/blog/readaptacion-funcional-y-deportiva/">Readaptación Funcional y Deportiva</a></li>
							</ul>
						</li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php', 'neurosport'));?>">tratamientos<span class="subheader">como trabajamos</span></a>
							<ul>
								<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php?1', 'neurosport'));?>">Fisioterapia Básica</a></li>
								<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php?2', 'neurosport'));?>">Fisioterapia Avanzada</a></li>
								<li><a href="<?php echo esc_url( __('www.neurosportavila.es/tratamientos.php?3', 'neurosport'));?>">Fisioterapia Neurológica</a></li>
							</ul>
						</li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/galeria.php', 'neurosport'));?>">galería<span class="subheader">imágenes</span></a></li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/blog', 'neurosport'));?>">blog<span class="subheader">léeme</span></a></li>
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/contactar.php', 'neurosport'));?>">contactar<span class="subheader">escríbenos</span></a></li>
						
					</ul>
				</nav>
				
				<div class="clearfix"></div>
				
			</div>
		</header>
	

		<!-- MAIN -->
		<div id="main">
				
			<!-- social -->
			<div id="social-bar">
				<ul>
					<li><a href="<?php echo esc_url( __('https://www.facebook.com/neurosportavila', 'neurosport'));?>"  title="Hazte seguidor" target="blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/facebook_32.png"  alt="Facebook" title="Facebook"/></a></li>
					<li><a href="<?php echo esc_url( __('https://twitter.com/NeurosportAvila', 'neurosport'));?>" title="Sigue nuestros tweets" target="blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/twitter_32.png"  alt="Twitter" title="Twitter"/></a></li>
					<li><a href="<?php echo esc_url( __('https://es.linkedin.com/in/neurosportavila-fisioterapiaavanzada-4aa67667', 'neurosport'));?>" title="Únete a nuestro linkedin" target="blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/linkedin_32.png"  alt="Linkedin" title="Linkedin"/></a></li>
					<!--<li><a href="http://www.google.com"  title="Añadir a mis círculos"><img src="img/social/google_plus_32.png" alt="Google+" /></a></li>-->
				</ul>
			</div>
			<!-- ENDS social -->
			
			<!-- PESTAÑA LATERAL telefonos-->
			<div class="hiddencon">
				<div class="hiddencon-label"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mono-icons/phone33.png" /></div>
					<p class="headline">920 25 25 62 | 656 559 027</p>
			</div>
			
			<!-- Content -->
			<div id="content">
			
				<!-- masthead -->
		        <div id="masthead">
					<span class="head">Blog</span>
					<ul class="breadcrumbs">
						<li><a href="<?php echo esc_url( __('www.neurosportavila.es/inicio.php', 'neurosport'));?>">inicio</a>/blog</li>
					</ul>
				</div>
	        	<!-- ENDS masthead -->