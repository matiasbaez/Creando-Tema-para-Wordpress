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
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

						<!-- Logo -->

							<!-- Modifico el enlace y el logo con la funcion -->
							<h1><a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a></h1>


						<?php

							// Comienzo a reemplazar el menu estatico

							$args = array(
								'theme_location' => 'principal', // Donde se va a ubicar el menu
								'container' => 'nav', // El contenedor de todo el menu
								'container_id' => 'nav', // El id del menu
							);
						
							wp_nav_menu( $args );
						?>

						<!-- Banner -->
							<section id="banner2">
								<!-- <header>
									<h2>Howdy. This is Dopetrope.</h2>
									<p>A responsive template by HTML5 UP</p>
								</header> -->
								<?php echo do_shortcode("[metaslider id=72]"); ?>
							</section>

						<!-- Intro -->
							<section id="intro" class="container">
								<div class="row">
									<div class="4u 12u(mobile)">
										<section class="first">
											<i class="icon featured fa-cog"></i>
											<header>
												<h2>Ipsum consequat</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="middle">
											<i class="icon featured alt fa-flash"></i>
											<header>
												<h2>Magna etiam dolor</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="last">
											<i class="icon featured alt2 fa-star"></i>
											<header>
												<h2>Tempus adipiscing</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
								</div>
								<footer>
									<ul class="actions">
										<li><a href="#" class="button big">Get Started</a></li>
										<li><a href="#" class="button alt big">Learn More</a></li>
									</ul>
								</footer>
							</section>

					</div>
				</div>
