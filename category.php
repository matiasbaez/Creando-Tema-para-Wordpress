<?php get_header('page'); ?>
	
			<!-- Main -->
			<div id="main-wrapper">
				<div class="container">
					<div class="row">
						<div class="12u">

							<!-- Portfolio -->
							<section>
								<header class="major">
									<h2><?php wp_title(); ?></h2>
									<!-- El titulo de acuerdo a la ubicacion -->
								</header>
									
								<div class="row">

								<?php $id_categoria = get_query_var('cat'); 
								// Adquiero el id de la categoria?>

								<?php
									query_posts(
										array(
											'showposts' => 10,
											'category__in' => $id_categoria
											// Va mostrar todos lo de la categoria sin sus hijos
										)
									);

								?>

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
													
									<div class="4u 12u(mobile)">
										<section class="box">

											<!-- Agrego la imagen de forma dinamica -->
											<a href="<?php the_permalink(); ?>" class="image featured">
																	
											<?php
												if ( has_post_thumbnail() ) {
													the_post_thumbnail('vista-previa-entrada');
												} 
											?>

											</a>
													
											<header>
												<h3><?php the_title(); ?></h3>
											</header>
															
											<!-- El extracto del articulo -->
											<!-- <p><?php the_excerpt(); ?></p>  -->
																
											<footer>
												<a href="<?php the_permalink(); ?>" class="button alt">Find out more</a>
											</footer>
										</section>
									</div>

									<?php endwhile; ?>

								<?php else: ?>
													
									<h3>No hay que mostrar en esta Categoria</h3>

								<?php endif; ?>
											
								<?php wp_reset_query(); // Resetea este query para que no haya problemas cuando se quiera usar otro ?>
								</div>
							</section>

						</div>
					</div>

				</div>
			</div>

<?php get_footer(); ?>