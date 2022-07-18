<?php
if (!empty($args['category'])):
$class = !empty($args['class']) ? $args['class'] : 'col-lg-3';
$category = $args['category'];
?>
<article class="col-6 <?= $class ?> px-2 mb-3">
    <a href="<?= get_category_link($category) ?>" class="card-emu d-inline-block position-relative w-100 border rounded-2 overflow-hidden">
        <img loading="lazy" class="w-100" src="<?= wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail', true)) ?>"
             alt="<?= $category->cat_name ?>">
        <div class="blur-card position-absolute top-0 left-0 w-100 bg-green z-index-5"></div>
        <div class="body bg-grey-5 position-absolute z-index-5 w-100 d-flex flex-column justify-content-center align-items-center">
            <div class="title font-15 font-weight-500 text-black-1 text-center d-flex justify-content-center align-items-center"><?= $category->cat_name ?></div>
            <div class="title font-12 font-weight-light text-green text-center d-flex justify-content-center align-items-center"><?= $category->count ?> Emulators</div>
        </div>
    </a>
</article>
<?php endif; ?>