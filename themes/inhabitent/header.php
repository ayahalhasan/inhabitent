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
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<!-- the logo is added in here -->
					<div class="container">
						<div class="logo">
							<a href="../logo/inhabitent-logo-tent.svg"></a>
							<h1 class="site-title"></h1>
						</div>
					</div>
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<!-- this is for the main-navigation I add it!!!!  -->

					<!-- <nav id='navigation-site' class="main-navigation clearfix" role="navigation">
					<div class="main-navigation-container">
						<ul id="primary-menu" class="menu">
							<li>
								<a href="#shop">Shop</a>
							</li>
							<li>
								<a href="#journal">Journal</a>
							</li>
							<li>
								<a href="#about">About</a>
							</li>
							<li>
								<a href="#find-us">Find Us</a>
							</li>
						</ul>
					</div>
					</nav> -->

						<!-- ************************************* -->

					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
