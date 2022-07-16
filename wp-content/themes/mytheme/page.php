<?php
$oneItem = get_queried_object();
switch ($oneItem->post_title) {
	case 'GAMES':
		get_template_part('game', 'type');
		break;
	default:
		get_template_part('page', 'detail');
		break;
}