<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rb-2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<!--	<a class="skip-link screen-reader-text" href="#content">-->
<!--		--><?php //esc_html_e( 'Skip to content', 'rb-2016' ); ?>
<!--	</a>-->

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
				<div class="site-branding">
					<?php echo file_get_contents(esc_url( home_url( '/' ) )."/wp-content/themes/rb-2016/images/logos1o.svg"); ?>

					<?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>
				</div><!-- .site-branding -->
				</div>
				<div class="col-sm-6">
				<nav id="site-navigation" class="main-navigation" role="navigation">

					<button class="menu-toggle visible-xs" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rb-2016' ); ?></button>
					<div class="hidden-xs">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</div>
				</nav><!-- #site-navigation -->

				</div>
			</div><!-- end row -->
		</div><!-- end wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
