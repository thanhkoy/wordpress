<?= get_header(); ?>
<?php
$list_item = get_tags(array(
	'hide_empty' => false
));
?>
<div class="row">
    <div class="col-12">
        <section class="mb-4">
	        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
            <h1 class="font-18 font-lg-28 font-weight-500 mb-3 text-grey-1 text-center"><?= get_the_title() ?></h1>
            <div class="row px-2 mb-3">
				<?php foreach ($list_item as $value): ?>
					<div class="col-6 col-lg-2 px-2 mb-3">
                        <a class="bg-main btn-main text-white p-2 h-50px d-flex justify-content-center align-items-center rounded-1 text-decoration-none"
                           href="<?= get_tag_link($value) ?>" title="#<?= $value->name ?>">#<?= $value->name ?></a>
                    </div>
				<?php endforeach; ?>
            </div>
        </section>
    </div>
</div>
<?= get_footer(); ?>