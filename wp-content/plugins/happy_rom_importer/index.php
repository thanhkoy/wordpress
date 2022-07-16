<?php
/**
 * Plugin Name: Happy Rom Importer
 * Description: Allow user import data from Happy Rom and create new post with it :))
 * Version: 1.0
 * Author: Hoang HUy Thanh
 **/
?>
<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
define( 'PLUGIN_LOCATE', plugin_dir_path( __FILE__ ) );
add_action( 'admin_menu', 'HappyRomImport' );
function HappyRomImport() {
	add_menu_page( 'Happy Rom Import', 'Happy Rom Import', 'manage_options', 'happy-rom-importer',
		'init_plugin_screen', plugins_url('assets/img/icon.jpg', __FILE__) );
}

/* Include CSS and Script */
if ( is_admin() ) {
	wp_register_style( 'style-css', plugins_url( 'assets/css/style.css', __FILE__ ) );
	wp_enqueue_style( 'style-css' );
}

function init_primary()
{
	wp_create_category('ROMS');
	wp_create_category('EMULATORS');
	wp_create_category('BLOG');
	wp_insert_post([
		'post_title' => 'GAMES',
		'post_type' => 'page',
		'post_status'   => 'publish'
	]);
	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
}
register_activation_hook(__FILE__, 'init_primary');

function init_plugin_screen() {
	include PLUGIN_LOCATE . 'src/Importer.php';
}
