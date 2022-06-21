<?= get_header(); ?>
<?php
$parent = get_the_category();
if (!empty($parent[0]->parent)) $parent[] = get_category($parent[0]->parent);
?>
    <div class="row">
        <div class="col-12">
            <section class="mb-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-white p-0">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-main text-hover-orange text-decoration-none">Casa</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/" class="text-main text-hover-orange text-decoration-none">ROMS</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= get_category_link($parent[0]) ?>" class="text-main text-hover-orange text-decoration-none"><?= $parent[0]->name ?? '' ?></a>
                        </li>
                        <li class="breadcrumb-item text-main" aria-current="page"><?= get_the_title() ?></li>
                    </ol>
                </nav>
                <div class="row mb-3">
                    <div class="col-12 col-lg-8 d-flex flex-column flex-lg-row">
                        <img loading="lazy" src="<?= get_the_post_thumbnail_url() ?>"
                             alt="<?= get_the_title() ?>" width="250" height="250">
                        <div class="text-grey-1 font-14 pl-3">
                            <h1 class="font-22 font-lg-28 text-black-1 font-weight-500"><?= get_the_title() ?></h1>
                            <div class="d-flex">
                                <div>
                                    <p class="mb-2">Atualizados</p>
                                    <p class="mb-2">País</p>
                                    <p class="mb-2">Tamanho</p>
                                    <p class="mb-2">Downloads</p>
                                    <p class="mb-2">avaliação</p>
                                    <a href="/" class="font-12 text-grey-1 text-decoration-none text-hover-orange">
                                        <i class="fa fa-exclamation-circle font-14" aria-hidden="true"></i>Relatório
                                    </a>
                                </div>
                                <div class="ml-2">
                                    <p class="font-weight-500 mb-2">May 26, 2022</p>
                                    <p class="font-weight-500 mb-2">US</p>
                                    <p class="font-weight-500 mb-2">573 MB</p>
                                    <p class="font-weight-500 mb-2">46</p>
                                    <div class="font-14 text-grey-3">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-2">
                                <?php if (!empty($parent)) foreach ($parent as $value): ?>
                                    <a class="bg-main btn-main text-white p-2 font-12 rounded-pill text-decoration-none px-3 py-2 mx-1"
                                       href="<?= get_category_link($value) ?>" title="<?= $value->name ?>"><?= $value->name ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-end justify-content-center pl-lg-5">
                        <a class="bg-main btn-main btn-main-hover-orange text-white p-3 font-18 rounded-pill text-decoration-none d-block p-lg-4 text-center my-2 w-100" href="/" title="Baixar agora">
                            <i class="fa fa-cloud-download mr-2 font-22" aria-hidden="true"></i>Baixar agora
                        </a>
                        <a class="px-3 py-2 font-14 text-center rounded-pill bg-blue btn-opacity d-block text-decoration-none my-2 w-100" href="/" title="Nintendo 3DS (3DS)">
                            <span class="text-yellow">Atenção! </span>
                            <span class="text-white">Para jogar esta Roms precisa baixar </span>
                            <span class="text-yellow"><?= $parent[0]->name ?></span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-9 mb-3 description">
                        <h2 class="text-black-1 font-20 font-weight-500">Descrição Fotos</h2>
                        <div id="demo" class="carousel slide my-3" data-ride="carousel" data-interval="0">
                            <div class="carousel-inner w-80 mx-auto">
                                <div class="carousel-item active">
                                    <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/demo_img/pokemon-ultra-violet-rom-4.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/demo_img/pokemon-ultra-violet-rom-4.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/demo_img/pokemon-ultra-violet-rom-4.jpg" alt="">
                                </div>
                            </div>
                            <ul class="pagination list-unstyled">
                                <li class="carousel-control-prev">
                                    <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0"
                                       href="#demo" data-slide="prev">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="carousel-control-next">
                                    <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0"
                                       href="#demo" data-slide="next">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class="carousel-indicators position-static">
                                <li data-target="#demo" data-slide-to="0" class="bg-main border-0 active"></li>
                                <li data-target="#demo" data-slide-to="1" class="bg-main border-0"></li>
                                <li data-target="#demo" data-slide-to="2" class="bg-main border-0"></li>
                            </ul>
                        </div>
                        <div class="content mb-3">
                            <?= get_the_content() ?>
                        </div>
                        <div class="mb-3">
                            <div class="bg-main px-3 py-2 d-inline-block text-white font-weight-bold mr-2">Tópico</div>
                            <a class="bg-white btn-main btn-main-reverse px-3 py-2 d-inline-block text-main font-weight-bold mr-2 text-decoration-none" href="/" title="Batman">Batman</a>
                        </div>
                        <section class="mb-4">
                            <div class="d-flex align-items-baseline mb-2">
                                <img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
                                     width="12" height="20" alt="VER MAIS JOGOS INTERESSANTES">
                                <h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">VER MAIS JOGOS INTERESSANTES</h2>
                            </div>
                            <div class="row px-2">
								<?php
								$params = [
									'category' => $parent[0]->cat_ID,
									'numberposts' => 12
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