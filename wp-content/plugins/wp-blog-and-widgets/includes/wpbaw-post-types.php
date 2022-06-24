<?php
/**
 * Register Post type functionality
 *
 * @package WP Blog and Widgets Pro
 * @since 1.1.7
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Function to register post type
 * 
 * @package WP Blog and Widgets
 * @since 1.0.0
 */
function wpbaw_register_post_type() {
  // Create new News custom post type
	$wpbaw_blog_labels = array(
	'name'                 => _x('Blog', 'wp-blog-and-widgets'),
	'singular_name'        => _x('blog', 'wp-blog-and-widgets'),
	'add_new'              => _x('Add Blog', 'wp-blog-and-widgets'),
	'add_new_item'         => __('Add New Blog', 'wp-blog-and-widgets'),
	'edit_item'            => __('Edit Blog', 'wp-blog-and-widgets'),
	'new_item'             => __('New Blog', 'wp-blog-and-widgets'),
	'view_item'            => __('View Blog', 'wp-blog-and-widgets'),
	'search_items'         => __('Search Blog', 'wp-blog-and-widgets'),
	'not_found'            =>  __('No Blog Items found', 'wp-blog-and-widgets'),
	'not_found_in_trash'   => __('No Blog Items found in Trash', 'wp-blog-and-widgets'), 
	'_builtin'             =>  false, 
	'parent_item_colon'    => '',    
	'menu_name'              => _x('Blog', 'wp-blog-and-widgets')
  );
  $wpbaw_blog_args = array(
	'labels'              => $wpbaw_blog_labels,
	'public'              => true,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'show_ui'             => true,
	'show_in_menu'        => true, 
	'query_var'           => true,
	'rewrite'             => array(
							'slug' => apply_filters('wpbaw_blog_post_slug', 'blog-post'),
							'with_front' => false
							),
	'capability_type'     => 'post',
	'has_archive'         => true,
	'hierarchical'        => false,
	'menu_position'       => 5,
	'menu_icon'   		  => 'dashicons-feedback',
	'supports'            => array('title','editor','thumbnail','excerpt','comments','author'),
	'show_in_rest'		  => true,
	'taxonomies'          => array('post_tag')
  );
 
  register_post_type( 'blog_post', apply_filters( 'wpbaw_blog_registered_post_type_args', $wpbaw_blog_args ) );
}

// Action to register plugin post type
add_action('init', 'wpbaw_register_post_type');

/**
 * Function to register taxonomy
 * 
 * @package WP Blog and Widgets
 * @since 1.1.7
 */
function wpbaw_register_taxonomies() {
	$labels = array(
		'name'              => _x( 'Category', 'wp-blog-and-widgets' ),
		'singular_name'     => _x( 'Category', 'wp-blog-and-widgets' ),
		'search_items'      => __( 'Search Category', 'wp-blog-and-widgets' ),
		'all_items'         => __( 'All Category', 'wp-blog-and-widgets' ),
		'parent_item'       => __( 'Parent Category', 'wp-blog-and-widgets' ),
		'parent_item_colon' => __( 'Parent Category:', 'wp-blog-and-widgets' ),
		'edit_item'         => __( 'Edit Category', 'wp-blog-and-widgets' ),
		'update_item'       => __( 'Update Category', 'wp-blog-and-widgets' ),
		'add_new_item'      => __( 'Add New Category', 'wp-blog-and-widgets' ),
		'new_item_name'     => __( 'New Category Name', 'wp-blog-and-widgets' ),
		'menu_name'         => __( 'Blog Category', 'wp-blog-and-widgets' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'show_in_rest'		=> true,
		'rewrite'           => array( 'slug' => apply_filters('wpbaw_blog_cat_slug', WPBAW_CAT) ),
	);

	register_taxonomy( WPBAW_CAT, array( WPBAW_POST_TYPE ), $args );
}

// Action to register plugin taxonomies
add_action( 'init', 'wpbaw_register_taxonomies');