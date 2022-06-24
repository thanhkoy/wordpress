<?php
/**
 * Script Class
 *
 * Handles the script and style functionality of plugin
 *
 * @package WP Blog and Widgets
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Wpbaw_Script {

	function __construct() {

		// Action to add style && script in backend
		add_action( 'admin_enqueue_scripts', array($this, 'wpbaw_admin_script') );

		// Action to add style at front side
		add_action( 'wp_enqueue_scripts', array($this, 'wpbaw_front_style') );
	}

	/**
	 * Enqueue admin script
	 * 
	 * @package WP Blog and Widgets
	 * @since 2.0
	 */
	function wpbaw_admin_script( $hook ) {

		global $typenow;

		/* Styles */
		// Registring admin css
		wp_register_style( 'wpbaw-admin-style', WPBAW_URL.'assets/css/wpbaw-admin.css', array(), WPBAW_VERSION );

		/* Script */
		// Registring admin JS
		wp_register_script( 'wpbaw-admin-js', WPBAW_URL.'assets/js/wpbaw-admin.js', array('jquery'), WPBAW_VERSION, true );

		// Taking pages array
		$pages_arr = array( WPBAW_POST_TYPE, 'blog_post_page_wpbaw-solutions-features' );

		if( in_array($typenow, $pages_arr) ) {
			wp_enqueue_style( 'wpbaw-admin-style' );
		}

		if( $hook == WPBAW_POST_TYPE.'_page_wpbawh-designs' ) {
			wp_enqueue_script( 'wpbaw-admin-js' );
		}

		// if( $hook == 'blog_post_page_wpbaw-solutions-features' ) {
		// 	wp_enqueue_style( 'wpbaw-admin-style' );
		// }
	}

	/**
	 * Function to add style at front side
	 * 
	 * @package WP Blog and Widgets
	 * @since 1.0.0
	 */
	function wpbaw_front_style() {

		// Register Style
		wp_register_style( 'wpbaw-public-style', WPBAW_URL.'assets/css/wpbaw-public.css', array(), WPBAW_VERSION );
		wp_enqueue_style( 'wpbaw-public-style' );

	}
}

$wpbaw_script = new Wpbaw_Script();