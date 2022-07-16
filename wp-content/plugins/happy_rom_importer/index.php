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
include( PLUGIN_LOCATE . 'assets/lib/simplehtmldom_1_9_1/simple_html_dom.php');
add_action( 'admin_menu', 'HappyRomImport' );
function HappyRomImport() {
	add_menu_page( 'Happy Rom Import', 'Happy Rom Import', 'manage_options', 'happy-rom-importer',
		'init_plugin_screen', plugins_url('assets/img/icon.jpg', __FILE__) );
}

/* Include CSS and Script */
if ( is_admin() ) {
	wp_register_style( 'style-css', plugins_url( 'assets/css/style.css', __FILE__ ) );
	wp_enqueue_style( 'style-css' );

	wp_register_script( 'script-js', plugins_url( 'assets/js/plugin.js', __FILE__ ), array('jquery'), '6.2');
	wp_localize_script( 'script-js', 'plugin_ajax_object',array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
	wp_enqueue_script( 'script-js' );

	add_action('wp_ajax_update_rom', 'update_rom');
	add_action( "wp_ajax_nopriv_update_rom", "update_rom" );

	add_action('wp_ajax_update_emulator', 'update_emulator');
	add_action( "wp_ajax_nopriv_update_emulator", "update_emulator" );
}

function insert_media($url, $description) {
	$file_array  = [ 'name' => wp_basename( $url ), 'tmp_name' => download_url( $url ) ];

	if ( is_wp_error( $file_array['tmp_name'] ) ) {
		return $file_array['tmp_name'];
	}

	$thumbnail_id = media_handle_sideload( $file_array, 0, $description );

	if ( is_wp_error( $thumbnail_id ) ) {
		@unlink( $file_array['tmp_name'] );
		return $thumbnail_id;
	}
	return $thumbnail_id;
}

function update_rom() {
	$url = 'https://happyroms.com/pt/roms/';
	$parent_id = get_cat_ID('ROMS');
	$data = [];

	$total = 0;
	if (!empty($_POST['data']))
		$data = $_POST['data'];
	else {
		$html = @file_get_html($url);
		if (empty($html)) return 0;
		$list_item = $html->find('div.cate-rom-wrp .card-wrp img');
		if (!empty($list_item)) foreach ($list_item as $value) {
			$data[] = [
				'name' => $value->attr['alt'],
				'image' => $value->attr['src']
			];
		}
	}

	if (!empty($data)) foreach ($data as $key => $value) {
		if ($total == 10) break;
		$id = category_exists( $value['name'] );
		if ( !$id ) {
			$thumb_id = insert_media($value['image'], $value['name']);
			$cat_id = wp_insert_category(
				array(
					'cat_name' => $value['name'],
					'category_parent' => $parent_id,
				)
			);
			update_term_meta( $cat_id, 'thumbnail', $thumb_id );
			$total++;
		}
		unset($data[$key]);
	}
	$response = json_encode([
		'message' => $total . ' data updated',
		'data' => $data
	]);
	echo $response;
	wp_die();
}

function update_emulator() {
	$url = 'https://happyroms.com/pt/emulators/';
	$parent_id = get_cat_ID('EMULATORS');
	$data = [];

	$total = 0;
	if (!empty($_POST['data']))
		$data = $_POST['data'];
	else {
		$html = @file_get_html($url);
		if (empty($html)) return 0;
		$list_item = $html->find('div.cate-rom-wrp .card-wrp img');
		if (!empty($list_item)) foreach ($list_item as $value) {
			$data[] = [
				'name' => $value->attr['alt'],
				'image' => $value->attr['src']
			];
		}
	}

	if (!empty($data)) foreach ($data as $key => $value) {
		if ($total == 10) break;
		$id = category_exists( $value['name'] );
		if ( !$id ) {
			$thumb_id = insert_media($value['image'], $value['name']);
			$cat_id = wp_insert_category(
				array(
					'cat_name' => $value['name'],
					'category_parent' => $parent_id,
				)
			);
			update_term_meta( $cat_id, 'thumbnail', $thumb_id );
			$total++;
		}
		unset($data[$key]);
	}
	$response = json_encode([
		'message' => $total . ' data updated',
		'data' => $data
	]);
	echo $response;
	wp_die();
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
