<div id="comments">

	<?php
	//---------------------------------------------------------------------
	// Evita que carguen directamente este archivo comments.php
	//---------------------------------------------------------------------
	if (!empty($_SERVER['SCRIPT-FILENAME']) && basename($_SERVER['SCRIPT-FILENAME']) == 'comments.php') {
		die(__('Sabes que no puedes acceder a esta página.', 'neurosport'));
	}

	//---------------------------------------------------------------------
	// Si el artículo está protegido muestra un texto 
	//---------------------------------------------------------------------
	if (post_password_required()) : ?>
		<p><?php _e( 'Este artículo está protegido por contraseña.', 'neurosport'); ?></p> 
		</div>
		<?php return; ?>
	<?php endif;

	//---------------------------------------------------------------------
	// Si es que hay comentarios, se muestran
	//---------------------------------------------------------------------
	if (have_comments()) : ?>

			<?php //Muestra un titulo para los comentarios, hay 3 opciones: cuando no hay, cuando hay un solo comentario y cuando hay 2 o más  ?>
			<h3><?php comments_number(__('Sé el primero en comentar:', 'neurosport'), __('Hay sólo 1 comentario:', 'neurosport'), __('% comentarios. ¿Quieres comentar algo?:', 'neurosport')); ?></h3>

			<ol id="comments-list">
				<?php wp_list_comments('avatar_size=40'); //Muestra el listado de comentarios y define el tamaño del avatar ?> 
			</ol>

			<?php //Si es que los comentarios están paginados, muestra links para comentarios antiguos y recientes
			if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>

				<ul class="pager">

					<li class="previous">&larr; <?php previous_comments_link(__( 'Comentarios antiguos', 'neurosport')); ?></li>
					<li class="next"><?php next_comments_link(__( 'Comentarios recientes', 'neurosport')); ?> &rarr;</li>

				</ul> <!-- end .pager -->

			<?php endif; ?>

	<?php
	//---------------------------------------------------------------------
	// Si no hay comentarios y los comentarios están cerrados muestra un texto
	//---------------------------------------------------------------------
	elseif (!comments_open() && !is_page() && post_type_supports(get_post_type(), 'comments')) : ?>

		<p><?php _e( 'No se permiten comentarios en este artículo.', 'neurosport');?></p>
		</div>
		<?php return; ?>

	<?php endif; 

	//---------------------------------------------------------------------
	// Muestra el formulario de comentarios
	//---------------------------------------------------------------------
	comment_form();

	?>

</div><!-- end #comments-area -->