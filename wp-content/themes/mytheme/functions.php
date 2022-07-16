<?php
add_filter( 'wpcf7_form_elements', 'do_shortcode' );

$category_rom = get_terms([
	'fields' => 'ids',
	'taxonomy' => 'category',
	'name' => 'ROMS',
	'hide_empty' => false,
])[0];
define('CATEGORY_ROM', $category_rom);

$category_blog = get_terms([
	'fields' => 'ids',
	'taxonomy' => 'category',
	'name' => 'BLOG',
	'hide_empty' => false,
])[0];
define('CATEGORY_BLOG', $category_blog);

add_theme_support( 'post-thumbnails' );

function getChoicePost() {
	$params = array(
		'showposts' => 9,
		'orderby' => 'date',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'post_type'=>array('post'),
		'cat' => '-' . CATEGORY_BLOG
	);
	return new WP_Query($params);
}

function getUpdatedPost() {
	$params = array(
		'showposts' => 8,
		'meta_key' => 'updated',
		'orderby' => 'meta_value',
		'meta_type' => 'DATETIME',
		'order' => 'DESC',
		'paged' => get_query_var('paged'),
		'post_type'=>array('post'),
		'cat' => '-' . CATEGORY_BLOG
	);
	return new WP_Query($params);
}

function getPopularRomPost() {
	$sub_cats = get_term_children( CATEGORY_ROM, 'category' );
	array_push($sub_cats, CATEGORY_ROM);
	$params = array(
		'showposts' => 12,
		'orderby' => 'views',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'post_type' => array('post'),
		'tax_query' => array(
			array(
				'taxonomy' => 'category',
				'field'    => 'id',
				'terms'    => $sub_cats
			),
		)
	);
	return new WP_Query($params);
}

function getBlogPost($exclude = null, $limit = 12) {
	$params = array(
		'showposts' => $limit,
		'orderby' => 'views',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'post_type' => array('post'),
		'cat' => CATEGORY_BLOG
	);
	if (!empty($exclude)) $params['post__not_in'] = [$exclude];
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
	if( $args->theme_location == 'main_top' ){
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

add_filter('upload_mimes', 'allow_custom_mimes');
function allow_custom_mimes ( $existing_mimes=array() ) {
// ' with mime type 'application/vnd.android.package-archive'
	$existing_mimes['apk'] = 'application/vnd.android.package-archive';
	return $existing_mimes;
}