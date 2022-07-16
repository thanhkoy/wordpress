<?= get_header(); ?>
<?php if (!empty($args['list_item'])): ?>
<div class="row">
    <div class="col-12">
        <section class="mb-4">
	        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase"><?= single_cat_title() ?></h1>
            <div class="row px-2 mb-3">
	            <?php foreach($args['list_item'] as $value): ?>
					<?php get_template_part('template/article', 'emu', [
                        'class' => 'col-lg-2',
                        'category' => $value
                    ]) ?>
	            <?php endforeach; ?>
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