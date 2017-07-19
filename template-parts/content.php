<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package studio
 */

?>
<?php if( is_singular() ): ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
				the_title( '<h1 class="entry-title"><span class="devicons devicons-responsive"></span>', '</h1>' );

			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				if ( 'post' === get_post_type() ) :  ?>
					<div class="entry-meta">
						<?php studio_category_as_devicons(); ?>
					</div><!-- .entry-meta -->
					<?php
				endif;
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'studio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'studio' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">

		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->
<?php else: ?>
	<article id="post-<?php the_ID(); ?>" class="on-home col-xs-12 col-md-6">
    <div class="row">
      <div class="entry-thumb col-xs-12 col-md-6 col-lg-8">
        <?php  the_post_thumbnail(); ?>

        <div class="meta row">
					<?php studio_category_as_devicons( false ); ?>
        </div>

      </div>
      <div class="entry-body col-xs-12 col-md-6 col-lg-4">
        <?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
				<p><?php echo get_the_excerpt(); ?></p>

        <a class="button" href="<?php echo get_permalink(); ?>" rel="bookmark">
					<?php _e('En savoir +', 'studio'); ?>
				</a>
      </div>
    </div>
	</article>
<?php endif; ?>
