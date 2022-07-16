<?php ob_start(); get_header();
if (isset($_GET['s']) && trim($_GET['s']) != ''):
    $keyword = strip_tags($_GET['s']);
    do_action('logUsrSearch');
    $params = array(
        'post_type' => array('post'),
        's' => $keyword,
        'post_status' => 'publish',
        'showposts' => get_option('posts_per_page'),
        'orderby' => 'date',
        'order' => 'desc',
        'paged' => get_query_var('paged')
    );
    $list_item = new WP_Query($params);
    $count = $list_item->post_count;
?>
<div class="row">
    <div class="col-12">
        <section class="mb-4">
	        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <h1 class="font-18 font-lg-28 font-weight-500 mb-3 text-grey-1 text-uppercase text-center">SEARCH FOR <?= $keyword ?></h1>
            <div class="row px-2 mb-3">
	            <?php global $post; if ($list_item->have_posts()) while ($list_item->have_posts()) {
		            $list_item->the_post();
		            get_template_part('template/article', 'game', ['class' => 'col-lg-2']);
		            wp_reset_postdata();
                } ?>

	            <?php the_posts_pagination(array(
		            'type' => 'list',
		            'mid_size'  => 2,
		            'class' => 'w-100',
		            'prev_text' => __('<i class="fa fa-chevron-left" aria-hidden="true"></i>', 'textdomain' ),
		            'next_text' => __('<i class="fa fa-chevron-right" aria-hidden="true"></i>', 'textdomain' ),
	            )) ?>

            </div>
        </section>
    </div>
</div>
<?php endif; get_footer(); ?>
