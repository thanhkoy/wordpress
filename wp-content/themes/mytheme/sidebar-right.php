<aside class="sidebar-right pt-4 px-2 px-md-0 w-md-300 d-flex flex-column">
    <aside class="sidebar-right px-0 mb-3 w-md-300 d-flex flex-column">
        <div class="mb-3">
            <h3 class="font-18 font-weight-bold border-left-thick pl-2">
                <a href="#"
                   class="text-title">Category test</a>
            </h3>
            <?php if (have_posts()): ?>
                <?php $index = 0; ?>
                <?php while (have_posts()) : the_post(); if ($index == 1) break; ?>
                    <div>
                        <a href="<?php the_permalink(); ?>" title="<?= the_title(); ?>">
	                        <?= get_the_post_thumbnail(null, [500, 300], ['class' => 'img-fluid', 'loading' => 'lazy']) ?>
                        </a>
                        <a href="<?php the_permalink(); ?>" title="<?= the_title(); ?>"
                           class="font-18 text-black font-weight-500 my-2 d-block"><?= the_title(); ?></a>
                        <p class="line-height-24">desc of post</p>
                    </div>
                <?php $index++; endwhile; ?>
                <?php rewind_posts(); ?>
                <div>
                    <?php $index = 0; ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php if ($index == 1) continue; ?>
                        <p class="border-top-doted my-2 py-2">
                            <a href="<?php the_permalink(); ?>" class="font-14 text-black" title="<?= the_title(); ?>">
                                <img loading='lazy' class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/chevrons-right.svg" alt="icon" width="20" height="20">
                                <?= the_title(); ?>
                            </a>
                        </p>
                    <?php endwhile; ?>
                </div>
            <?php else: ?>
                <p>Dữ liệu đang cập nhật ...</p>
            <?php endif; ?>
        </div>
    </aside>
</aside>