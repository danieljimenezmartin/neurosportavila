<?php 

/*
	FUNCIONES Y DEFINICIONES DEL TEMA
	----------------------------------------------
	Crear o pegar el código a continuación.

	NOTAS: 
		- No duplicar la etiqueta de apertura "<?php"
		- No es necesaria la etiqueta de cierre "?>"
	
*/
//---------------------------------------------------------------------
// REGISTRAMOS EL MENU
//---------------------------------------------------------------------
/*
register_nav_menus( array(
	'menu-principal' => __('Area principal de navegación', 'neurosport')
) );
*/
//---------------------------------------------------------------------
// CARACTERÍSTICAS DEL TEMA
//---------------------------------------------------------------------

// Ajustar el máximo ancho de las imagenes de acuerdo al diseño de este modo cualquier imagen que insertemos en el contenido de un artículo va a tener como máximo este ancho
if ( ! isset( $content_width ) )
	$content_width = 500; //El ancho máximo será de 500 pixeles

// Creamos una función para registrar algunas características del tema
function neurosport_theme_features()  {

	// Permitimos que el sitio soporte RSS Automáticos
	add_theme_support( 'automatic-feed-links' );

	// Permitimos qe el tema soporte imagenes destacadas
	add_theme_support( 'post-thumbnails');	
}

// Ejecutamos la función y registra las características
add_action( 'after_setup_theme', 'neurosport_theme_features' );

//---------------------------------------------------------------------
// REGISTRAMOS EL SIDEBAR
//---------------------------------------------------------------------

//Con la función register_sidebar, registramos una zona dinámica para nuestro tema y le pasamos algunos parámetros
function neurosport_custom_sidebar() {
	register_sidebar(array(
		'name' => __('Barra lateral', 'neurosport'), //El nombre del área dinámica
		'id' => 'barra-lateral', //Un identificador único para la zona
		'description' => __( 'Este es el área de widgets del sitio.', 'neurosport'), //Una breve descripción
		'before_widget' => '<div id="%1$s" class="widget %2$s">', //Algo de HTML que irá antes de cada widget
		'after_widget'  => '</div>', //Algo de HTML que irá después de cada widget
		'before_title' => '<h3>', //La etiqueta que irá antes del título de cada widget
		'after_title' => '</h3>' //La etiqueta que irá después del título de cada widget
	));
}
 
// Asocia la función 'neurosport_custom_sidebar' a la acción 'widgets_init'
add_action( 'widgets_init', 'neurosport_custom_sidebar' );


//---------------------------------------------------------------------
// CARGANDO ESTILOS DEL TEMA
//---------------------------------------------------------------------
//Creamos una función para cargar los estilos
function neurosport_theme_styles() { 

	//Registramos las fuentes de Google Fonts
	wp_register_style( 'font-allan', 'http://fonts.googleapis.com/css?family=Allan:700', '', '', 'all' );
	
	wp_register_style( 'font-robotocondensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400', '', '', 'all' );
	
	wp_register_style( 'font-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700i', '', '', 'all' );

	//Registramos style.css original
	wp_register_style( 'cssoriginal', 'http://www.neurosportavila.es/css/style.css', '', '1.0.0', 'all' );

	//registramos la hoja de estilos del tema
	wp_register_style( 'neurosport-style', get_stylesheet_uri(), array('font-allan','font-robotocondensed','font-roboto','cssoriginal'), '1.0.0', 'all' );

	//Ahora cargamos los estilos. Nota que sólo cargamos 'neurosport-style' ya que en esta hoja de estilos declaramos dependendencia de 'font-sans' y 'bootstrap', éstas cargaran de manera automática
	wp_enqueue_style( 'neurosport-style' );
}
add_action('wp_enqueue_scripts', 'neurosport_theme_styles'); //Ejecutamos la función


//-------------------------------------------------------------------------------
// EVITAR ERROR TITLE
//-------------------------------------------------------------------------------
add_action( 'after_setup_theme', 'theme_slug_setup' );

function theme_slug_setup() {

	add_theme_support( 'title-tag' );
}

//---------------------------------------------------------------------------------
// AÑADIR ARCHIVOS TEMA//-------------------------------------------------------------

add_theme_support( 'custom-header' );

$args = array(
	'width'         => 417,
	'height'        => 303,
	'default-image' => get_template_directory_uri() . '/img/logonuevo.jpg',
);
add_theme_support( 'custom-header', $args );


add_theme_support( 'custom-background' );

$args = array(
	'default-color' => '43ace2',
	'default-image' => get_template_directory_uri() . '/img/main-pattern.png',
);
add_theme_support( 'custom-background', $args );

add_editor_style( 'style.css' );