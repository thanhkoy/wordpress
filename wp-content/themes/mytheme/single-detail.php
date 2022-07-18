<?= get_header(); ?>
<?php
$parent = get_the_category();
$type = 'game';
$category_rom = '';
$category_emulator = '';
?>
    <div class="row">
        <div class="col-12">
            <section class="mb-4">
	            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <div class="row mb-3">
                    <div class="col-12 col-lg-8 d-flex flex-column flex-lg-row">
                        <div class="text-center mb-3">
                            <img loading="lazy" src="<?= get_the_post_thumbnail_url() ?>"
                                 alt="<?= get_the_title() ?>" width="250" height="250">
                        </div>
                        <div class="text-grey-1 font-14 pl-0 pl-lg-3">
                            <h1 class="font-22 font-lg-28 text-black-1 font-weight-500"><?= get_the_title() ?></h1>
                            <div class="d-flex">
                                <div>
                                    <p class="mb-2">Updated</p>
                                    <p class="mb-2">Country</p>
                                    <p class="mb-2">Size</p>
                                    <p class="mb-2">Downloads</p>
                                    <p class="mb-2">Evaluation</p>
                                    <?php if (get_field('os')) : $type = 'emulator' ?>
                                        <p class="mb-2">OS</p>
                                    <?php endif; ?>
                                    <a href="/" class="font-12 text-grey-1 text-decoration-none text-hover-orange">
                                        <i class="fa fa-exclamation-circle font-14" aria-hidden="true"></i>Report
                                    </a>
                                </div>
                                <div class="ml-2">
                                    <p class="font-weight-500 mb-2"><?php the_field('updated') ?? ''; ?></p>
                                    <p class="font-weight-500 mb-2"><?php the_field('nation') ?? ''; ?></p>
                                    <p class="font-weight-500 mb-2"><?php the_field('size') ?? ''; ?></p>
                                    <p class="font-weight-500 mb-2"><?php the_field('download_count') ?? ''; ?></p>
                                    <div class="font-14 text-grey-3 mb-2">
                                        <?= kk_star_ratings(); ?>
                                    </div>
	                                <?php if (get_field('os')) : ?>
                                        <p class="font-weight-500 mb-2"><?= get_field('os') ?></p>
	                                <?php endif; ?>
                                </div>
                            </div>
                            <div class="d-flex mt-2 flex-wrap">
                                <?php
                                if (!empty($parent)) foreach ($parent as $value):
                                    if ($value->term_id == CATEGORY_ROM || $value->term_id == CATEGORY_EMULATOR) continue;
	                                if (strpos($value->name, 'Emulators'))
	                                    $category_emulator = $value;
	                                else
	                                    $category_rom = $value;
                                ?>
                                    <a class="bg-main btn-main text-white p-2 font-12 rounded-pill text-decoration-none px-3 py-2 mx-0 mx-lg-1 mb-2"
                                       href="<?= get_category_link($value) ?>" title="<?= $value->name ?>"><?= $value->name ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-end justify-content-center pl-lg-5">
                        <?php if(get_field('link_download')): ?>
                            <a class="bg-main btn-main btn-main-hover-orange text-white p-3 font-18 rounded-pill text-decoration-none d-block p-lg-4 text-center my-2 w-100 download"
                               href="<?php the_field('link_download'); ?>" title="<?= get_field('text_download') ?? 'Download now' ?>">
                                <i class="fa fa-cloud-download mr-2 font-22" aria-hidden="true"></i><?= get_field('text_download') ?? 'Download now' ?>
                            </a>
                        <?php endif; ?>
                        <?php if ($type == 'game'): ?>
                            <a class="px-3 py-2 font-14 text-center rounded-pill bg-blue btn-opacity d-block text-decoration-none my-2 w-100"
                               href="<?= get_category_link($category_emulator) ?>" title="<?= $category_emulator->name ?>">
                                <span class="text-yellow">Attention! </span>
                                <span class="text-white">To play this Roms you need to download </span>
                                <span class="text-yellow"><?= $category_emulator->name ?></span>
                            </a>
                        <?php else: ?>
                            <a class="px-3 py-2 font-14 text-center rounded-pill bg-blue btn-opacity d-block text-decoration-none my-2 w-100"
                               href="<?= get_category_link($category_rom) ?>" title="<?= $category_rom->name ?>">
                                <span class="text-white">Download Now </span>
                                <span class="text-yellow"><?= $category_rom->name ?> </span>
                                <span class="text-white">Games</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 mb-3 description">
                        <?php if(get_field('image_1')): ?>
                            <h2 class="text-black-1 font-20 font-weight-500">Description Photos</h2>
                            <div id="demo" class="carousel slide my-3 navigation" data-ride="carousel" data-interval="0">
                            <div class="carousel-inner w-75 mx-auto">
                                <?php
                                for ($i = 1; $i <= 4; $i++):
                                if(get_field('image_' . $i)):
                                ?>
                                    <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>">
                                        <img loading="lazy" class="w-100" src="<?php the_field('image_' . $i) ?>"
                                             alt="<?= get_the_title() . '_' . $i ?>" width="619" height="413">
                                    </div>
                                <?php endif; endfor; ?>
                            </div>
                            <div class="nav-links">
                                <ul>
                                    <li class="carousel-control-prev">
                                        <a
                                           href="#demo" data-slide="prev">
                                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="carousel-control-next">
                                        <a
                                           href="#demo" data-slide="next">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="carousel-indicators position-static">
                                <?php for ($j = 0; $j < $i - 2; $j++): ?>
                                    <li data-target="#demo" data-slide-to="<?= $j ?>" class="bg-main border-0 <?= $j == 0 ? 'active' : '' ?>"></li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <div class="content mb-3 cat_des_small position-relative overflow-hidden">
                            <?php the_content(); ?>
                            <p class="read-more position-absolute w-100 text-center m-0 px-0 py-4 bottom-0 left-0">
                                <a href="#" class="bg-main text-white px-3 py-2 rounded-1 text-decoration-none font-12 font-weight-500 text-uppercase">Show more</a>
                            </p>
                        </div>
                        <?php if (!empty(get_the_tags())): ?>
                            <div class="mb-3">
                                <div class="bg-main px-3 py-2 d-inline-block text-white font-weight-bold mr-2">Topical</div>
                                <?php foreach (get_the_tags() as $value): ?>
                                    <a class="bg-white btn-main btn-main-reverse px-3 py-2 d-inline-block text-main font-weight-bold mr-2 text-decoration-none"
                                       href="<?= get_tag_link($value) ?>" title="<?= $value->name ?>"><?= $value->name ?></a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <section class="mb-4">
                            <div class="d-flex align-items-baseline mb-2">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
                                     width="12" height="20" alt="SEE MORE INTERESTING GAMES">
                                <h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">SEE MORE INTERESTING GAMES</h2>
                            </div>
                            <div class="row px-2">
								<?php
								$params = [
									'numberposts' => 12,
                                    'exclude' => get_the_ID(),
									'category__and' => [$category_rom->term_id],
									'category__not_in' => [CATEGORY_EMULATOR, CATEGORY_BLOG]
								];
								global $post;
								$posts = get_posts($params);
								setup_postdata($post);
								if (!empty($posts)) foreach ($posts as $post)
									get_template_part('template/article', 'game', [
										'star' => true,
										'tag' => $parent[0]->name ?? false
									]);
								wp_reset_postdata();
								?>
                            </div>
                        </section>
                    </div>
					<?= get_sidebar('post'); ?>
                </div>
            </section>
        </div>
    </div>
<?= get_footer(); ?>