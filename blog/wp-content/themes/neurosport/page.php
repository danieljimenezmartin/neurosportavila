<?php include("header.php"); ?>

	<!-- posts list -->
	<div id="posts-list">
		
		<?php //El loop básicamente comprueba si hay posts para mostrar, luego mientras haya posts cargará cada uno de ellos usando el esquema que se ve a continuación
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<article <?php post_class('clearfix'); //Carga las clases específicas del post y agrega la clase clearfix ?>>
 
		<header class="tituloentrada">
			<h1><?php the_title(); //Muestra el título del post ?></h1>
		</header>
 
		<?php //En esta parte muestra el contenido del post
		the_content();
 
		//Muestra una paginación si es que el post tiene la etiqueta <!--nextpage-->
			wp_link_pages(array(
				'before'           => '<p class="paginacion">' . __('Páginas', 'neurosport')
				));?>

		</article>
 
		<hr />
 
	<?php endwhile; //Acá termina la estructura con la que se presentará cada post
	else: //Ahora bien, si no hay artículos para mostrar entonces cargará lo siguiente  ?>
	 
		<article>
	 
			<header>
				<h2><?php _e('Este contenido no está disponible', 'neurosport'); //Un simple título ?></h2>
			</header>
	 
			<?php get_search_form(); //Llama un formulario de búsqueda  ?>
	 
		</article>
	 
	<?php endif; // Aquí termina el loop?>
	
	<?php //Cargamos la plantilla de comentarios
		comments_template(); ?>
		
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