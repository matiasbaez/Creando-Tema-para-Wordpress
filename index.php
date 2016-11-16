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

											<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
														
														<div class="4u 12u(mobile)">
															<section class="box">

																<!-- Agrego la imagen de forma dinamica -->
																<a href="<?php the_permalink(); ?>" class="image featured">
																	
																	<?php // Si la ENTRADA tiene imagen se muestra
																		if ( has_post_thumbnail() ) {
																			the_post_thumbnail('vista-previa-entrada');
																			// Recibe como parametro el nombre del tamaño de la imagen que se configuro
																		} 
																	?>

																</a>
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
											
											<?php wp_reset_query(); // Resetea este query para que no haya problemas cuando se quiera usar otro ?>

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
											
											<?php  
												// Comienzo a reemplazar el contenido estatico de las entradas

												query_posts(
													array(
														'showposts' => 2, // La cantidad a mostrar
														'cat' => 4		  // La categoria y el id (tambien puede ser por el slug de la categoria)
													)
												);

												?>

											<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

													<div class="6u 12u(mobile)">
														<section class="box">

															<!-- Agrego la imagen de forma dinamica -->
															<a href="<?php the_permalink(); ?>" class="image featured">
																
																<?php
																	if ( has_post_thumbnail() ) {
																		the_post_thumbnail('miniatura-blog');
																	} 
																?>

															</a>
															<header>
																<h3><?php the_title(); ?></h3>
																<p><?php the_ ?>Posted 45 minutes ago</p>
															</header>
															
															<?php the_excerpt(); // El contenido ?>

															<footer>
																<ul class="actions">
																	<li><a href="<?php the_permalink(); ?>" class="button icon fa-file-text">Continue Reading</a></li>
																	<li><a href="#" class="button alt icon fa-comment">33 comments</a></li>
																</ul>
															</footer>
														</section>
													</div>

													<?php endwhile; ?>
													<!-- post navigation -->
												<?php else: ?>
													
													<h3>No se encontro nada para mostrar</h3>

												<?php endif; ?>
											
											<?php wp_reset_query(); // Resetea este query para que no haya problemas cuando se quiera usar otro ?>

										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

<?php get_footer(); ?>