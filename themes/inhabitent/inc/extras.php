<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//  removing editor sub-menus from functions.php

function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}

add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


//Change the login logo to Inhabitent log
function inhabitent_login_logo() {
	echo '<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg);
			padding-bottom: 30px;
			background-size: 300px 53px;
			height: 53px;
			width: 300px;
		}
		</style>';
 }
add_action( 'login_head', 'inhabitent_login_logo' );




function inhabitent_logo_url() {
return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_logo_url' );

function inhabitent_logo_url_title() {
return 'Inhabitent Supply Co';
}
add_filter( 'login_headertitle', 'inhabitent_logo_url_title' );



/*  Adjusting archive page loop for product */
function inhabitent_modify_produt_archive_query( $query ) {
	if (is_post_type_archive ('product') && !is_admin() && $query->is_main_query()){
	$query->set('post_per_page', 16 );
	$query->set('order', 'ASC');
	$query->set('orderby', 'title');
	}

}
add_action ('pre_get_posts', 'inhabitent_modify_produt_archive_query');




//  use inline style for background image for the about page

function inhabitent_header() {
	if ( !is_page_template("about.php") ) {
		return;
	}
	$background_image = CFS()->get('image');
		if (!$background_image){
			return;
		}
	$custom_css = "
		.hero-image{
		 background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('$background_image') center center no-repeat;
		 background-size: cover;
		 height: 100vh;
	 }";
	 wp_add_inline_style( 'inhabitent-style', $custom_css );
 }
add_action( 'wp_enqueue_scripts', 'inhabitent_header' );

// Display up to 16 product on Product Archive Page (shop)

function inhabitent_filter_product_query( $query ) {
	if ( (is_post_type_archive('product') || is_tax('product_type') ) && !is_admin() && $query->is_main_query() ) {
		$query->set( 'orderby', 'title' );
		$query->set( 'order', 'ASC' );
		$query->set( 'posts_per_page', 16 );
	} }
	add_action( 'pre_get_posts', 'inhabitent_filter_product_query' );
