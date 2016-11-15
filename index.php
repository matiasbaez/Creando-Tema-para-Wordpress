<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Tema</title>

	<!-- Añadimos el archivo de estilo css -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

	<?php 

		// Si hay un articulo empieza a mostrarlos
		if ( have_posts() ) :

			// Mientras que haya articulos
			while ( have_posts() ) : the_post();
	?>
			
			<!-- Mostramos el titulo y el contenido del articulo existente -->
			<h3><?php the_title('<h1>', '</h1>'); ?></h3>
			<p><?php the_content(); ?></p>

	<?php
			endwhile;
		else :
			echo wpautop( 'Lo sentimos, no hay ningun articulo' );
		endif;

	?>
	
</body>
</html>