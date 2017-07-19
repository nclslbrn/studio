<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package studio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav id="site-navigation" class="main-navigation">
		<?php
			the_custom_logo();

			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
		?>
	</nav><!-- #site-navigation -->
	<page id="pusher" class="page-container">
		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'studio' ); ?></a>

			<header id="masthead" class="site-header">

				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

				</div><!-- .site-branding -->
				<div class="social">
					<a href="https://twitter.com/Nicolas_Lebrun_" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/dist/img/twitter-logo.svg">
					</a>
					<a href="https://github.com/nclslbrn" target="_blank">
						<span class="devicons devicons-github_badge">
					</a>
				</div>
				<button id="toggle-nav" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span></span>
					<?php //esc_html_e( 'Primary Menu', 'studio' ); ?>
				</button>
			</header><!-- #masthead -->

			<div id="content" class="site-content">
