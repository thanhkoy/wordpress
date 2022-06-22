<?php
$oneItem = get_queried_object();
$id = $oneItem->ID;
switch ($id) {
	case 34373: /*Games*/
		get_template_part('game', 'type');
		break;
	default:
		break;
}