<?php
$class = !empty($args['class']) ? $args['class'] : 'col-lg-12';
?>
<article class="col-12 <?= $class ?> px-0 mb-3">
    <a href="<?= get_permalink() ?>" title="<?= get_the_title() ?>" class="d-flex rounded shadow overflow-hidden text-decoration-none sidebar-item">
        <img loading="lazy" class="" src="<?= get_the_post_thumbnail_url(null, 'medium') ?>"
             width="88" height="88" alt="<?= get_the_title() ?>">
        <div class="position-relative bg-grey-2 px-2 pt-3 pb-2 w-100">
            <span class="font-14 font-weight-500 text-grey-3 max-line-2"><?= get_the_title() ?></span>
            <?php if (!empty($args['date'])) : ?>
                <div class="font-12 text-grey-3">
                    <?= $args['date'] ?>
                </div>
            <?php endif; ?>
        </div>
    </a>
</article>