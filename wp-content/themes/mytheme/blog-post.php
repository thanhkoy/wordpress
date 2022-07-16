<?= get_header(); ?>
<div class="row">
	<div class="col-12">
		<section class="mb-4">
			<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <div class="d-flex justify-content-between flex-column flex-lg-row mb-3">
                <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase"><?= single_cat_title() ?></h1>
            </div>
			<div class="row px-2 mb-3">
				<?php if (have_posts()) : while (have_posts()) {
					the_post();
					get_template_part('template/article', 'blog', [
						'class' => 'col-lg-6 px-2',
						'date' => get_the_date('M d, Y')
                    ]);
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
<?= get_footer(); ?>
