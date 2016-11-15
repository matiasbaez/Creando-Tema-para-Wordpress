
<?php get_header('page'); // El nombre del otro header entre parentesis ?>

	<!-- En este archivo es donde se muestran el contenido de las PAGINAS -->

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">

						<!-- Content -->

						<!-- Si encuentra articulos -->
						<?php if ( have_posts() ) : 
								while ( have_posts() ) : the_post(); ?>

								<article class="box post">
									<a href="#" class="image featured"><img src="<?php bloginfo('template_url'); ?>/images/pic01.jpg" alt="" /></a>
									<header>
										<h2><?php the_title(); ?></h2> <!-- El titulo del articulo -->
									</header>

									<?php the_content(); ?> <!-- El contenido del articulo -->

								</article>

								<?php endwhile; ?>

						<?php else: ?>
							<h3 class="error">No se encontro ningun resultado</h3>
						<?php endif; ?>

					</div>
				</div>

			<!-- Footer -->
			<?php get_footer(); ?>
