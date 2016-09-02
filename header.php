<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package seltzerUnderscores
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'seltzerunderscores' ); ?></a>
	<div class="header-nav">
		<div class="site-logo">
						<?php if ( has_custom_logo() ) {
								the_custom_logo();
						 } else { ?>
								<a href="/" id="nav-text">SFS</a><!-- Add SFS Logo -->
						<?php } ?>
					</a>
				</div>
				
			<nav id="site-navigation" class="main-navigation" role="navigation">

				

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'seltzerunderscores' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu', 'menu_class'  => 'nav-menu') ); ?>
			</nav><!-- #site-navigation -->
	</div>
			<!-- add header image as background -->
			<?php if ( get_header_image() ) { ?>
				<header id="masthead" class="site-header<?php if(!is_page_template('home.php')) { echo ' screen-reader-text';} ?>" style="background-image: url(<?php header_image(); ?>) " role="banner">
			<?php } else { ?>
				<header id="masthead" class="site-header<?php if(!is_page_template('home.php')) { echo ' screen-reader-text';} ?>" role="banner">
			<?php } ?>

	
			<div class="site-branding">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<div class="container-btn">
				<a class="header-btn" href="/">Learn More</a>
			</div>
		</div>
	
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
