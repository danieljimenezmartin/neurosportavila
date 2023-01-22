<?php include("header.php"); ?>
	
	<!-- posts list -->
	<div id="posts-list">
		
		<?php $stylesheet_root = get_stylesheet_directory();?>
		<?php if ( is_category('terapia-manual-avanzada') ) : // Si estamos en la página de categoría terapia-manual-avanzada?>
				<?php include( $stylesheet_root . '/tecnicas/terapiamanual.php'); ?>
		<?php elseif ( is_category('fisioterapia-invasiva-ecoguiada') ) : // Si estamos en la página de categoría fisioterapia-invasiva-ecoguiada?>
				<?php include( $stylesheet_root . '/tecnicas/fisioterapia.php'); ?>
		<?php elseif ( is_category('ecografia-musculoesqueletica') ) : // Si estamos en la página de categoría ecografia-musculoesqueletica?>
				<?php include( $stylesheet_root . '/tecnicas/ecografia.php'); ?>
		<?php elseif ( is_category('mesoterapia') ) : // Si estamos en la página de categoría mesoterapia?>
				<?php include( $stylesheet_root . '/tecnicas/mesoterapia.php'); ?>
		<?php elseif ( is_category('puncion-seca') ) : // Si estamos en la página de categoría puncion-seca?>
				<?php include( $stylesheet_root . '/tecnicas/puncionseca.php'); ?>
		<?php elseif ( is_category('neuromodulacion') ) : // Si estamos en la página de categoría neuromodulacion?>
				<?php include( $stylesheet_root . '/tecnicas/neuromodulacion.php'); ?>
		<?php elseif ( is_category('epi-ecoguiada') ) : // Si estamos en la página de categoría epi-ecoguiada?>
				<?php include( $stylesheet_root . '/tecnicas/epi.php'); ?>
		<?php elseif ( is_category('diatermia') ) : // Si estamos en la página de categoría diatermia?>
				<?php include( $stylesheet_root . '/tecnicas/diatermia.php'); ?>
		<?php elseif ( is_category('readaptacion-funcional-y-deportiva') ) : // Si estamos en la página de categoría readaptacion-funcional-y-deportiva?>
				<?php include( $stylesheet_root . '/tecnicas/readaptacion.php'); ?>
		<?php endif; // Fin de las comprobaciones condicionales ?>
		
		
		<?php if ( is_category() ) : // Si estamos en una página de categoría?>
				<div class="alert alert-info">
					<p><?php _e('Artículos en la categoría', 'neurosport');?>: <strong><?php single_cat_title(); //Muestra el nombre de la categoría ?></strong></p>
				</div>
			<?php elseif ( is_tag() ) : // Si estamos en una página de etiqueta?>
				<div class="alert alert-info">
					<p><?php _e('Artículos etiquetados como', 'neurosport');?>: <strong><?php single_tag_title(); //Muestra el nombre de la etiqueta ?></strong></p>
				</div>
			<?php elseif ( is_day() ) : // Si estamos en una página de archivo diario?>
				<div class="alert alert-info">
					<p><?php _e('Archivo', 'neurosport');?>: <strong><?php get_the_date(); //Muestra la fecha del archivo ?></strong></p>
				</div>
			<?php elseif ( is_month() ) : // Si estamos en una página de archivo mensual?>
				<div class="alert alert-info">
					<p><?php _e('Archivo', 'neurosport');?>: <strong><?php get_the_date('F Y'); //Muestra la fecha del archivo (mes y año) ?></strong></p>
				</div>
			<?php elseif ( is_year() ) : // Si estamos en una página de archivo anual?>
				<div class="alert alert-info">
					<p><?php _e('Archivo', 'neurosport');?>: <strong><?php get_the_date('Y'); //Muestra la fecha del archivo (año) ?></strong></p>
				</div>
			<?php elseif ( is_search() ) : // Si estamos en una página de resultados de búsqueda?>
				<div class="alert alert-info">
					<p><?php _e('Resultados para', 'neurosport');?>: <strong><?php echo the_search_query(); ////Muestra el término por el que se ha realizado la búsqueda ?></strong></p>
				</div>
			<?php elseif ( is_author() ) : // Si estamos en una página de artículos escritos pur un autor específico?>
				<div class="alert alert-info">
					<p><?php _e('Artículos por', 'neurosport');?>: <strong><?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name; //Muestra el nombre del autor ?></strong></p>
				</div>
			<?php elseif ( is_404() ) : // Si estamos en una página de error 404?>
				<div class="alert alert-danger">
					<p><strong><?php _e('Error 404', 'neurosport');?>:</strong> <?php _e('Página no encontrada', 'neurosport');?></p>
				</div>
			<?php endif; // Fin de las comprobaciones condicionales ?>
		
		<?php //El loop básicamente comprueba si hay posts para mostrar, luego mientras haya posts cargará cada uno de ellos usando el esquema que se ve a continuación
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article <?php post_class('clearfix'); //Carga las clases específicas del post y agrega la clase clearfix ?>>
 
		<header class="tituloentrada">
			<h2><?php the_title(); //Muestra el título del post ?></h2>
			<div class="meta">
				<?php the_time(get_option('date_format')); //Muestra la fecha de publicación del artículo ?>
				&bull;
				<?php the_category(', '); //Muestra enlaces a las categorías separados por coma ?></div>
		</header>
 
		<?php //Verifica si el post tiene una imágen destacada
		if ( has_post_thumbnail() ) {
 
			//Si tiene imágen destacada entonces carga la imagen en tamaño thumbnail (miniatura), y le añade la clase alignleft
			the_post_thumbnail('thumbnail', array(
				'class' => 'alignleft'
			));
		}?>
 
		<?php //En esta parte muestra el extracto del post
		the_excerpt(); ?>
 
		<p>
			<a href="<?php the_permalink(); //Imprime un link al detalle del post ?>" title="<?php the_title_attribute(); //Añade ul título al enlace ?>" class="btn btn-default"><?php _e('Ver más', 'neurosport'); //El botón dirá Ver más. ?></a></p>
 
		</article>
 
		<hr />
 
	<?php endwhile; //Acá termina la estructura con la que se presentará cada post
	else: //Ahora bien, si no hay artículos para mostrar entonces cargará lo siguiente  ?>
	 
		<article>
	 
			<header class="tituloentrada">
				<h2><?php _e('Este contenido no está disponible', 'neurosport'); //Un simple título ?></h2>
			</header>
			<br/>
			<?php get_search_form(); //Llama un formulario de búsqueda  ?>
	 
		</article>
	 
	<?php endif; // Aquí termina el loop?>
	
	<ul class="pager">
		<?php if( get_next_posts_link()) { //Si es que hay más posts anteriores ?>
			<li class="previous">
				<?php next_posts_link(__('&larr; Anteriores', 'neurosport')); //Muestra un enlace a los posts anteriores ?>
			</li>
		<?php } ?>
		<?php if( get_previous_posts_link()) { //Si es que hay más posts más recientes ?>
			<li class="next">
				<?php previous_posts_link(__('Recientes &rarr;', 'neurosport'));  //Muestra un enlace a los posts más recientes?>
			</li>
		<?php } ?>
	</ul>
		
   	</div>
   	<!-- ENDS posts list -->
	
	        	
	   	<!-- sidebar -->
	       	<aside id="sidebar">
				<?php get_sidebar(); ?>
	       	</aside>
				
	    <div class="clearfix"></div>
		<!-- ENDS sidebar -->

    	<!-- ENDS pager -->
				
	</div>
		<!-- ENDS content -->
			
		<div class="clearfix"></div>
		<div class="shadow-main"></div>
			
			
		</div>
		<!-- ENDS MAIN -->
		
<?php get_footer(); ?>