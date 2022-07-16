<?php
$parent = get_the_category();
if (!empty($parent[0])) {
    if ($parent[0]->name == 'BLOG') {
	    get_template_part('blog', 'detail');
    } else {
	    get_template_part('single', 'detail');
    }
} else {
	get_template_part('single', 'detail');
}