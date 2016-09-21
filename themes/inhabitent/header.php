<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
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
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header reverse">
				<div class="container">

				<div class="branding">
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>

					<?php if (is_page( array('home','about'))) { ?>

    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="site-logo"src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-tent-white.svg" alt="logo" border="0"/>
						</a>

    			<?php } else{ ?>

    				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img class="site-logo"src="<?php bloginfo('template_directory'); ?>/images/logos/inhabitent-logo-tent.svg" alt="logo2" border="0"/>
						</a>

    			<?php } ?>

				</div><!-- .branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<i class="fa fa-search search-toggle" aria-hidden="true"></i>
					<div class="search-header">
						<?php get_search_form(); ?>
				</nav><!-- #site-navigation -->
				</div>

			</header><!-- #masthead -->
		</div>
