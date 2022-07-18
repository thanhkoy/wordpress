<?php
$oneItem = get_queried_object();
$parent = $oneItem->parent;
if (!empty($parent)) $parent = get_category($parent);
$categories = get_categories([
	'child_of'                 => $oneItem->term_id,
	'hide_empty'               => FALSE,
	'taxonomy'                 => 'category',
	'number' => 0
]);
if (empty($parent)) {
	switch ($oneItem->name) {
		case 'ROMS':
			get_template_part('rom', 'type', ['list_item' => $categories]);
			break;
		case 'EMULATORS':
			get_template_part('emu', 'type', ['list_item' => $categories]);
			break;
		case 'BLOG':
			get_template_part('blog', 'post');
			break;
		default:
			get_template_part('rom', 'game');
			break;
	}
} else {
	switch ($parent->name) {
		case 'ROMS':
			get_template_part('rom', 'game', ['type' => 'rom', 'one_item' => $oneItem]);
			break;
		case 'EMULATORS':
			get_template_part('rom', 'game', ['type' => 'emu', 'one_item' => $oneItem]);
			break;
		default:
			get_template_part('rom', 'game');
			break;
	}
}