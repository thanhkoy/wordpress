<?= get_header(); ?>
<?php
$oneItem = get_queried_object();
?>
<div class="row">
	<div class="col-12">
		<section class="mb-4">
			<?php
			if (function_exists('yoast_breadcrumb'))
				yoast_breadcrumb('<nav aria-label="breadcrumb" class="overflow-auto"><ol class="breadcrumb bg-white p-0 d-block text-nowrap">','</ol></nav>');
			?>
            <div class="d-flex justify-content-between mb-3 flex-column flex-lg-row">
                <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase"><?= $oneItem->name ?></h1>
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
				<?php if (have_posts()) : while (have_posts()) {
					the_post();
					get_template_part('template/article', 'game', [
						'class' => 'col-lg-2',
						'tag' => get_the_category()[0]->name ?? false
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
                    <?= $oneItem->description ?>
                </div>
            </div>
		</section>
	</div>
</div>
<?= get_footer(); ?>
