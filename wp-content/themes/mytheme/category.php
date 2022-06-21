<?php
$oneItem = get_queried_object();
$category_id = $oneItem->term_id;
$categories = get_categories(
	array('parent' => $category_id)
);
switch ($category_id) {
	case 5: /*ROM*/
		get_template_part('rom', 'type', ['list_item' => $categories]);
		break;
	case 6: /*EMU*/
		get_template_part('emu', 'type', ['list_item' => $categories]);
		break;
	case 7:
		break;
	default:
		get_template_part('rom', 'game', ['category_id' => $category_id]);
		break;
}