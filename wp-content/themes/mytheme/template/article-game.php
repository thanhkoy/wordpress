<?php
$class = !empty($args['class']) ? $args['class'] : 'col-lg-3';
?>
<article class="col-6 <?= $class ?> px-2 mb-3">
    <a href="<?= get_permalink() ?>" class="card-game d-inline-block position-relative w-100 border rounded-2 overflow-hidden text-decoration-none" title="<?= get_the_title() ?>">
        <div class="position-relative">
            <img loading="lazy" class="w-100" src="<?= get_the_post_thumbnail_url() ?>"
                 alt="<?= get_the_title() ?>">
            <div class="blur-card z-index-5 d-none position-absolute top-0 left-0 w-100 h-100 bg-main">
                <img class="m-auto" src="<?= get_template_directory_uri() ?>/assets/images/view.svg" width="32" height="46">
            </div>
        </div>
        <div class="body bg-main w-100 px-2 pt-3 pb-2 text-white d-flex flex-column justify-content-around">
            <?php if (!empty($args['star'])): ?>
                <div class="font-12">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
            <?php endif; ?>
            <div class="game-name font-weight-500 font-14 max-line-2"><?= get_the_title() ?></div>
	        <?php if (get_field('os')) : ?>
            <div class="text-center font-14">
                <svg width="14" height="13" viewBox="0 0 11 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.5 7.24185H1V1.23901H10V7.24185H5.5Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.5 9.24365H8" stroke="white" stroke-linecap="round"></path>
                    <path d="M5.5 9.29517V7.24194" stroke="white" stroke-linecap="round"></path>
                    <path d="M5.5 9.24365H3" stroke="white" stroke-linecap="round"></path>
                </svg>
                <?= get_field('os') ?>
            </div>
            <?php endif; ?>
	        <?php if (!empty($args['tag'])): ?>
                <div class="tag-btn bg-blue px-2 font-12 position-absolute text-truncate z-index-5 w-80 right-0 text-center"><?= $args['tag'] ?></div>
	        <?php endif; ?>
        </div>
    </a>
</article>