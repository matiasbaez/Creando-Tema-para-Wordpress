<?php 
	// En este archivo se muestra el contenido de las ENTRADAS

	get_header('page');

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

				the_title();
				the_content();
			
		endwhile;
	else:
		echo "No se econtro nada para mostrar";
	endif;

	get_footer();

?>