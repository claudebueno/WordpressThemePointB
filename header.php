<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Theme Point-B
 */
 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site">
	<div class="site-top">
		<div class="clearfix container">
			<nav class="site-menu top-menu" role="navigation">
				<div class="menu-toggle"><i class="fa fa-bars"></i></div>
				<div class="menu-text"></div>
				<?php wp_nav_menu( array( 'container_class' => 'clearfix menu-bar', 'theme_location' => 'top' ) ); ?>
			<!-- .top-menu --></nav>
    	</div>
	<!-- .site-top --></div>

	<header class="site-header" role="banner">
		<div class="clearfix container">
			<div class="site-branding">
				<?php echo pointb_site_title(); ?>
				<?php if ( !ot_get_option('site-description') ): ?><div class="site-description"><?php bloginfo( 'description' ); ?></div><?php endif; ?>
			</div>

			<nav class="site-menu main-menu" role="navigation">
				<div class="menu-toggle"><i class="fa fa-bars"></i></div>
				<div class="menu-text"></div>
				<?php wp_nav_menu( array( 'container_class' => 'clearfix menu-bar', 'theme_location' => 'main' ) ); ?>
			<!-- .main-menu --></nav>
		</div>
	<!-- .site-header --></header>

	<div class="site-main">
		<div class="clearfix container">
