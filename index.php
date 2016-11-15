<?php get_header(); ?>
	
			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row">
							<div class="12u">

								<!-- Portfolio -->
									<section>
										<header class="major">
											<h2>My Portfolio</h2>
										</header>
										<div class="row">


											<?php  
												// Comienzo a reemplazar el contenido estatico de las entradas
												// El contenido se mostrara de acuerdo a las categorias


												// En este caso se usa query_posts porque recibe algunos parametros que se puede modificar dependiendo de lo que se quiera usar
												query_posts(
													array(
														'showposts' => 6, // La cantidad a mostrar
														'cat' => 3		  // La categoria y el id (tambien puede ser por el slug de la categoria)
													)
												);

												?>

											<?php 
												if ( have_posts() ) :
													while ( have_posts() ) : the_post(); ?>
														
														<div class="4u 12u(mobile)">
															<section class="box">

																<!-- Agrego la ubicacion de cada imagen -->
																<a href="<?php the_permalink(); ?>" class="image featured"><img src="<?php bloginfo('template_directory') ?>/images/pic02.jpg" alt="" /></a>
																<header>
																	<h3><?php the_title(); ?></h3>
																</header>
																<p><?php the_excerpt(); ?></p> <!-- El extracto del articulo -->
																<footer>
																	<a href="<?php the_permalink(); ?>" class="button alt">Find out more</a>
																</footer>
															</section>
														</div>

													<?php endwhile; ?>
													<!-- post navigation -->
												<?php else: ?>
													
													<h3>No se encontro nada para mostrar</h3>

												<?php endif; ?>
											?>


									</section>

							</div>
						</div>
						<div class="row">
							<div class="12u">

								<!-- Blog -->
									<section>
										<header class="major">
											<h2>The Blog</h2>
										</header>
										<div class="row">
											<div class="6u 12u(mobile)">
												<section class="box">

													<!-- Agrego la ubicacion de cada imagen -->
													<a href="#" class="image featured"><img src="<?php bloginfo('template_directory') ?>/images/pic08.jpg" alt="" /></a>
													<header>
														<h3>Magna tempus consequat lorem</h3>
														<p>Posted 45 minutes ago</p>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
															<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
											<div class="6u 12u(mobile)">
												<section class="box">

													<!-- Agrego la ubicacion de cada imagen -->
													<a href="#" class="image featured"><img src="<?php bloginfo('template_directory') ?>/images/pic09.jpg" alt="" /></a>
													<header>
														<h3>Aptent veroeros et aliquam</h3>
														<p>Posted 45 minutes ago</p>
													</header>
													<p>Lorem ipsum dolor sit amet sit veroeros sed et blandit consequat sed veroeros lorem et blandit  adipiscing feugiat phasellus tempus hendrerit, tortor vitae mattis tempor, sapien sem feugiat sapien, id suscipit magna felis nec elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos lorem ipsum dolor sit amet.</p>
													<footer>
														<ul class="actions">
															<li><a href="#" class="button icon fa-file-text">Continue Reading</a></li>
															<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
														</ul>
													</footer>
												</section>
											</div>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

<?php get_footer(); ?>