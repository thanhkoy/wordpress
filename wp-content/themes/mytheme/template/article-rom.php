<?php
if (!empty($args['category'])):
$class = !empty($args['class']) ? $args['class'] : 'col-lg-3';
$category = $args['category'];
?>
<article class="col-6 <?= $class ?> px-2 mb-3">
    <a href="<?= get_category_link($category) ?>" class="card-rom d-inline-block position-relative w-100 border rounded-2 overflow-hidden" title="<?= $category->cat_name ?>">
        <img loading="lazy" class="w-100" src="<?= z_taxonomy_image_url($category->term_id, array(200, 240)) ?>"
             alt="<?= $category->cat_name ?>">
        <div class="blur-card position-absolute top-0 left-0 w-100 bg-main z-index-5 rounded-2"></div>
        <div class="body bg-main h-35px position-absolute z-index-5 w-100 font-weight-bold d-flex justify-content-center align-items-center">
            <div class="font-14 text-white text-center d-flex justify-content-center align-items-center"><?= $category->cat_name ?></div>
        </div>
    </a>
</article>
<?php endif; ?>