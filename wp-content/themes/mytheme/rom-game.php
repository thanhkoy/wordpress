<?= get_header(); ?>
<?php
if (!empty($args['type'])) :
    $not_in = [];
	if ($args['type'] == 'rom')
	    $not_in[] = CATEGORY_EMULATOR;
	else
	    $not_in[] = CATEGORY_ROM;
	$params = array(
		'post_type' => array('post'),
		'post_status' => 'publish',
		'showposts' => get_option('posts_per_page'),
		'orderby' => 'date',
		'order' => 'desc',
		'paged' => get_query_var('paged'),
		'category__and' => [$args['one_item']->term_id],
        'category__not_in' => $not_in
	);
	$list_item = new WP_Query($params);
?>
<div class="row">
	<div class="col-12">
		<section class="mb-4">
			<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <div class="d-flex justify-content-between flex-column flex-lg-row mb-3">
                <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase"><?= single_cat_title() ?></h1>
                <div class="form-group">
                    <label class="font-12 text-main">SORT BY</label>
                    <select class="form-control font-14 text-grey-1 p-1">
                        <option selected>Recently updated</option>
                        <option>New releases</option>
                        <option>Popular</option>
                    </select>
                </div>
            </div>
			<div class="row px-2 mb-3">
				<?php
				global $post;
				if ($list_item->have_posts()) :
                    while ($list_item->have_posts()) {
                        $list_item->the_post();
                        get_template_part('template/article', 'game', ['class' => 'col-lg-2']);
                        wp_reset_postdata();
				    }
				else: ?>
                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>

				<?php the_posts_pagination(array(
					'type' => 'list',
					'mid_size'  => 2,
					'class' => 'w-100',
					'prev_text' => __('<i class="fa fa-chevron-left" aria-hidden="true"></i>', 'textdomain' ),
					'next_text' => __('<i class="fa fa-chevron-right" aria-hidden="true"></i>', 'textdomain' ),
				)) ?>

			</div>
            <div class="description">
                <h2 class="font-18 font-lg-25 font-weight-500">DESCRIPTION</h2>
                <div class="content text-grey-4">
	                <?= category_description() ?>
                </div>
            </div>
		</section>
	</div>
</div>
<?php endif; ?>
<?= get_footer(); ?>
