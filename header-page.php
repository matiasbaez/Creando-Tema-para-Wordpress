
<!-- Se crea este otro header porque en el contenido de las paginas cambia un poco la estructura -->

<!DOCTYPE html>

<html <?php language_attributes(); ?> >
	<head>

		<!-- Muestro el titulo configurado en el wordpress -->
		<title><?php bloginfo('name'); ?></title>

		<!-- Configuro el Meta Charset con la funcion de Wordpress -->
		<meta charset="<?php bloginfo('charset'); ?>" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<!--[if lte IE 8]><script src="<?php bloginfo('template_url'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->

		<!-- Elimino los estilos de aca, para agregarlo desde el archivo functions.php -->
		
		<?php wp_head(); ?>

		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/ie8.css" /><![endif]-->
	</head>

	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->
						<!-- Modifico el enlace y el logo con la funcion -->
							<h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>

						
						<!-- Menu -->
						<?php

							// Comienzo a reemplazar el menu estatico

							$args = array(
								'theme_location' => 'principal', // Donde se va a ubicar el menu
								'container' => 'nav', // El contenedor de todo el menu
								'container_id' => 'nav', // El id del menu
							);
						
							wp_nav_menu( $args );
						?>


					</div>
				</div>
