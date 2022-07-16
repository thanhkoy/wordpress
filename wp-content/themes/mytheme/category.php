<?php
$oneItem = get_queried_object();
$categories = get_categories(
	array('parent' => $oneItem->term_id)
);
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
		get_template_part('rom', 'game', ['category_id' => $oneItem->term_id]);
		break;
}