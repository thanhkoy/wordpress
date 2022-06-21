<article class="col-12 col-lg-4 px-2 mb-3">
    <a href="<?= get_permalink() ?>" class="card-choice d-inline-block position-relative w-100 border rounded-2 overflow-hidden" title="<?= get_the_title() ?>">
        <img loading="lazy" class="w-100" src="<?= get_the_post_thumbnail_url(null, 'medium') ?>"
             alt="<?= get_the_title() ?>">
        <div class="blur-card position-absolute top-0 left-0 w-100 bg-main z-index-5"></div>
        <div class="body bg-main h-35px position-absolute z-index-5 w-100 font-weight-bold d-flex justify-content-center align-items-center">
            <div class="font-15 text-white text-nowrap text-truncate px-2"><?= get_the_title() ?></div>
        </div>
    </a>
</article>