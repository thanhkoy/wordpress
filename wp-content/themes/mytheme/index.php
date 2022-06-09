<?= get_header(); ?>
<div class="main-content mt-2 mt-md-4 mr-md-4 p-2 p-md-0">
    <h1 class="d-none">Title</h1>
    <?php if (have_posts()): ?>
    <div class="mb-3">
        <?php $index = 0; ?>
            <?php while (have_posts()) : the_post(); ?>
            <?php if ($index == 1) break ?>
                <div class="row mb-3">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <a href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
	                        <?= get_the_post_thumbnail(null, [500, 300], ['class' => 'img-fluid', 'loading' => 'lazy']) ?>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <h2 class="line-height-30 font-24">
                            <a class="font-weight-500 text-dark" title="<?= the_title(); ?>"
                               href="<?php the_permalink(); ?>"><?= the_title(); ?></a>
                        </h2>
                        <p class="line-height-24 m-0 d-none d-md-block">desc of post</p>
                    </div>
                </div>
            <?php $index++; endwhile; ?>
        <?php rewind_posts(); ?>
        <div class="row">
            <?php $index = 0; ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php /*if ($index == 1) {
                    continue;
                } elseif ($index == 5) {
                    break;
                } */?>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-5 col-md-12 pr-0 pr-md-3">
                            <a class="d-block mb-2"
                               href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
	                            <?= get_the_post_thumbnail(null, [500, 300], ['class' => 'img-fluid', 'loading' => 'lazy']) ?>
                            </a>
                        </div>
                        <div class="col-7 col-md-12">
                            <h3 class="mb-0 font-16 line-height-24">
                                <a href="<?php the_permalink(); ?>" title="<?= the_title(); ?>"
                                   class="text-dark max-line-3"><?= the_title(); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php $index++; endwhile; ?>
            <?php /*if (!empty($top_post_homepage[4])) : */?><!--
                <div class="col-md-4 d-block d-lg-none">
                    <div class="row">
                        <div class="col-5 col-md-12 pr-0 pr-md-3">
                            <a class="d-block mb-2"
                               href="<?/*= get_post_url($top_post_homepage[4]->slug, $top_post_homepage[4]->id); */?>"><?/*= init_thumbnail($top_post_homepage[4]->image, 500, 300, 'img-fluid', $top_post_homepage[4]->title); */?></a>
                        </div>
                        <div class="col-7 col-md-12">
                            <h3 class="mb-0 font-16 line-height-24">
                                <a href="<?/*= get_post_url($top_post_homepage[4]->slug, $top_post_homepage[4]->id); */?>"
                                   class="text-dark max-line-3"><?/*= $top_post_homepage[4]->title; */?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            --><?php /*endif; */?>
        </div>
    </div>
    <?php endif; ?>
    <!--<div class="row">
        <?php /*init_top_cate_homepage(); */?>
    </div>-->
</div>
<?= get_footer(); ?>
