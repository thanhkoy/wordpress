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

	wp_register_script( 'script-js', plugins_url( 'assets/js/copy.js', __FILE__ ), array( 'jquery' ) );
	wp_localize_script( 'script-js', 'plugin_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

	wp_enqueue_script( 'script-js' );

	wp_enqueue_style( 'style-css' );
}
/*add_action('wp_ajax_get_emails', 'get_emails');
add_action('wp_ajax_nopriv_get_emails', 'get_emails');
function get_emails()
{
    global $wpdb;
    $response = array();

    // Fetch all records
    $response = $wpdb->get_results("SELECT email FROM  wp_user_email ");

    echo json_encode($response);
    wp_die();
}*/

/*function generate_table_user_search()
{
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_data_search';
    $sql = "CREATE TABLE $table_name (
    id mediumint(9) unsigned NOT NULL AUTO_INCREMENT,
    search nvarchar(500) not null,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY  (id)
    );";
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'generate_table_user_search');*/

function init_plugin_screen() {
	include PLUGIN_LOCATE . 'src/Importer.php';
}
