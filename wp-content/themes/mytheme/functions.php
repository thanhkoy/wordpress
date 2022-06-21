<?php
add_theme_support( 'post-thumbnails' );

function getChoicePost() {
	$params = array(
		'showposts' => 12,
		'orderby' => 'date',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'post_type'=>array('post')
	);
	return new WP_Query($params);
}

function getNewPost() {
	$params = array(
		'showposts' => 12,
		'orderby' => 'date',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'post_type'=>array('post')
	);
	return new WP_Query($params);
}

function getPopularPost() {
	$params = array(
		'showposts' => 12,
		'orderby' => 'views',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'post_type'=>array('post')
	);
	return new WP_Query($params);
}

function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class))
		$classes[] = $args->add_li_class;
	if(isset($args->add_li_parent_class) && array_search("menu-item-has-children", $classes)) {
		$classes[] = $args->add_li_parent_class;
		$item->title .= '<i class="fa fa-caret-down ml-1" aria-hidden="true"></i>';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_additional_class_on_link($classes, $item, $args) {
	if(isset($args->add_link_class)) {
		$classes['class'] = $args->add_link_class;
	}
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_additional_class_on_link', 10, 3 );

class My_Walker_Nav_Menu extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = NULL) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu position-lg-absolute left-0 bg-transparent d-block d-lg-none z-index-5 p-0 ml-2 ml-lg-0\">\n";
	}
}

add_filter('wp_nav_menu_items', 'add_item_nav', 10, 2);
function add_item_nav($items, $args){
	if( $args->menu == 'SUONERIE' ){
		$items = '<a class="d-lg-none position-absolute top-0 right-0" href="javascript:void(0)"
                       onclick="document.getElementById(\'menu-head\').classList.toggle(\'open\');">
                        <i class="fa fa-times text-white font-25" aria-hidden="true"></i>
                    </a>' . $items;
	}
	return $items;
}

add_theme_support('nav-menus');

register_nav_menus( array(
	'main_top' => __( 'Menu chính ở trên'),
) );


add_action('admin_menu', 'RingtoneConfig');
function RingtoneConfig()
{
	add_menu_page('Ringtone setting', 'Ringtone Setting', 'manage_options', 'ringtone-settings', 'get_ringtone_config');

}
function get_ringtone_config()
{
	global $wpdb;

	$templates = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}ringtone_config");
	$renderHtml = "";
	$renderHtml .= "<h1>Ringtone Setting</h1>";
	if (isset($_POST['save-config'])) {
		foreach ($_POST as $key => $value) {
			if($key != 'save-config'){
				$wpdb->update(
					"{$wpdb->prefix}ringtone_config",
					[
						"text_value" => $value
					],
					[
						"text_key" => $key
					]);
			}
		}
		$renderHtml .="<hr><div class='update-nag'><b>Cập nhật thành công !</b></div>";
	}
	$renderHtml .= '<form name="ringtone-setting" action="" method="post">';
	$renderHtml .= '<table class="widefat fixed" cellspacing="0">
        <thead>
        <tr>
            <th id="col-title" class="manage-column column-columnname" scope="col"  width="20%">Text Key</th>
            <th id="col-create" class="manage-column column-columnname" scope="col" width="70%">Text Value</th>
        </tr>
        </thead>';
	$renderHtml .= ' <tbody>';
	foreach ($templates as $templates) {
		$renderHtml .= '<tr class="alternate">';
		$renderHtml .= '<th class="check-column" scope="row">' . $templates->text_key . '</th>';
		if($templates->text_key == 'about-content'){
			$renderHtml .= '<td class="column-columnname"><textarea style="width:100%;" rows="5" name="'.$templates->text_key.'" required>'.esc_html($templates->text_value) .'</textarea></td>';
		}else{
			$renderHtml .= '<td class="column-columnname"><input style="width:100%;" type="text" name="'.$templates->text_key.'" value="'.htmlentities($templates->text_value).'" required></td>';
		}
		$renderHtml .= '</tr>';
	}
	$renderHtml .= ' </tbody>';
	$renderHtml .= '</table>';
	$renderHtml .= '<button type="submit" name="save-config" class="button button-primary">Lưu</button>';
	$renderHtml .= '</form>';
	echo $renderHtml;
}
function get_config_ringtone(){
	global $wpdb;
	return $wpdb->get_results("SELECT text_key,text_value FROM {$wpdb->prefix}ringtone_config");
}