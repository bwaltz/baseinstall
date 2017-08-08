<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Base_Install
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

<body <?php body_class('sideNavBody'); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'baseinstall' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-navbar">

			<div class="site-branding">
				<?php the_custom_logo(); ?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div>

			<button class="menu-toggle" tabindex="0" aria-label="Menu" aria-controls="primary-menu"><?php esc_html_e( 'Menu', 'baseinstall' ); ?><span>toggle menu</span></button>

			<nav id="site-navigation" class="main-navigation">
				<h3 class="screen-reader-text">Main Navigation</h3>
				<?php 
					wp_nav_menu( array(
					'theme_location'	=> 'menu-1',
					'echo'				=> true,
					'depth'				=> 10, 
					'container'			=> 'ul',
					'menu_class'		=> 'nav-menu', 
					'menu_id'			=> 'primary-menu',
					'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'walker'			=> new baseinstall_walker_nav_menu
					) ); 
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content-wrap" class="site-content-wrap">
	<div id="content" class="site-content">
