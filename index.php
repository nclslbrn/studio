<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package studio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php

			endif;

			if( is_front_page() ) {
				?>
				<div class="hero">
					<div class="wrapper row">
						<div class="col-xs-12 col-md-6">
							<?php the_custom_logo(); ?>
							<h4>Web developpeur freelance depuis 2011.</h4>
							<a class="button" href="/devis-rapide">Demande de devis</a>
						</div>
					</div>
				</div>
				<?php
			}
			echo '<div class=\'wrapper\'>';

				echo '<div class=\'row\'>';
				$counter = 0;
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
					$counter++;
	          if ($counter % 2 == 0) {
	          echo '</div><div class="row">';
	        }
				endwhile;
				echo '</div>';
			echo '</div>';

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
