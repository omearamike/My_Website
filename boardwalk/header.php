<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Boardwalk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'boardwalk' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
								<div class="clear">
						<h1 class="site-title"><a href="http://omearamike.com" rel="home"><!--?xml version="1.0" encoding="utf-8"?-->
		<!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
		<svg version="1.1" id="MO_x5F_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 488" style="enable-background:new 0 0 1440 488;" xml:space="preserve">
		<style type="text/css">
			.st0{fill:none;stroke:#000000;stroke-width:36;stroke-miterlimit:5;}
		</style>
		<path id="M_x5F_Letter" class="st0" d="M296.7,441.4l50-365.4c0.9-6.7,10-8,12.8-1.9l160.9,353.7c2.4,5.3,9.9,5.3,12.3-0.1
			l155-348.9c2.7-6.1,11.8-4.9,12.8,1.7l56,359.5"></path>
		<circle id="Circle" class="st0" cx="960.4" cy="270.6" r="154"></circle>
		<line id="Line" class="st0" x1="104.1" y1="275.4" x2="1306.9" y2="278.2"></line>
		</svg>
		</a></h1>
						<!-- <h1 class="site-title"><a href="http://192.168.1.15:8888/wordpress/" rel="home">O&#039;MearaMike.com</a></h1> -->
						<!-- <h2 class="site-description">Just another WordPress site</h2> -->
					</div>
				</div>
		<?php if ( is_active_sidebar( 'sidebar-1' ) || has_nav_menu( 'primary' ) ) : ?>
			<button class="sidebar-toggle" aria-expanded="false" ><span class="screen-reader-text"><?php _e( 'Toggle Sidebar', 'boardwalk' ); ?></span></button>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
