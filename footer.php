<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studio
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'studio' ) ); ?>"><?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__( 'Fièrement propulsé par %s', 'studio' ), 'WordPress' );
					?></a>
					<span class="sep"> | </span>
					<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Theme: %1$s by %2$s.', 'studio' ), 'studio', '<a href="https://github.com/nclslbrn/studio">Studio</a>' );
					?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	</page> <!-- .page-container -->
	<?php wp_footer(); ?>
	<script id="__bs_script__">
	//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
	//]]>
	</script>
</body>
</html>
