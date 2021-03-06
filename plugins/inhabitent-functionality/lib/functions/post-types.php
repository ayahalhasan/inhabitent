<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function inhabitent_register_product_cpt() {

	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'menu_name'             => 'Product',
		'name_admin_bar'        => 'Product',
		'archives'              => 'Product Archives',
		'parent_item_colon'     => 'Parent Product:',
		'all_items'             => 'All Product',
		'add_new_item'          => 'Add New Product',
		'add_new'               => 'Add New',
		'new_item'              => 'New Product',
		'edit_item'             => 'Edit Product',
		'update_item'           => 'Update Product',
		'view_item'             => 'View Product',
		'search_items'          => 'Search Products',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Product Image',
		'set_featured_image'    => 'Set Product image',
		'remove_featured_image' => 'Remove Product image',
		'use_featured_image'    => 'Use as Product image',
		'insert_into_item'      => 'Insert into product',
		'uploaded_to_this_item' => 'Uploaded to this product',
		'items_list'            => 'Product list',
		'items_list_navigation' => 'Product list navigation',
		'filter_items_list'     => 'Filter products list',
	);
	$args = array(
		'label'                 => 'Product',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'products',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_register_product_cpt', 0 );


// This is for the latest Adventuers

// Register Custom Post Type
function inhabitent_adventure_post_type() {

	$labels = array(
		'name'                  => 'Adventure',
		'singular_name'         => 'Adventure',
		'menu_name'             => 'Adventures',
		'name_admin_bar'        => 'Adventures',
		'archives'              => 'Adventures Archives',
		'parent_item_colon'     => 'Parent Adventures:',
		'all_items'             => 'All Adventures',
		'add_new_item'          => 'Add New Adventures',
		'add_new'               => 'Add New',
		'new_item'              => 'New Adventures',
		'edit_item'             => 'Edit Adventures',
		'update_item'           => 'Update Adventures',
		'view_item'             => 'View Adventures',
		'search_items'          => 'Search Adventures',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into adventure',
		'uploaded_to_this_item' => 'Uploaded to this adventure',
		'items_list'            => 'Adventuers list',
		'items_list_navigation' => 'Adventuers list navigation',
		'filter_items_list'     => 'Filter adventuers list',
	);
	$args = array(
		'label'                 => 'Adventure',
		'description'           => 'Adventure Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-palmtree',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'adventures',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'adventuer', $args );

}
add_action( 'init', 'inhabitent_adventure_post_type', 0 );
