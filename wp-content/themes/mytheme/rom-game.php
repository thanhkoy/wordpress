<?= get_header(); ?>
<?php if (!empty($args['category_id'])): ?>
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
                    <li class="breadcrumb-item text-main" aria-current="page"><?= single_cat_title() ?></li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between flex-column flex-lg-row mb-3">
                <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase"><?= single_cat_title() ?></h1>
                <div class="form-group">
                    <label class="font-12 text-main">ORDENAR POR</label>
                    <select class="form-control font-14 text-grey-1 p-1">
                        <option selected>Atualizados recentemente</option>
                        <option>Novos lançamentos</option>
                        <option>Populares</option>
                    </select>
                </div>
            </div>
			<div class="row px-2 mb-3">
				<?php
                $params = [
	                'category' => $args['category_id'],
                    'numberposts' => 12
                ];
				global $post;
				$posts = get_posts($params);
				setup_postdata($post);
                if (!empty($posts)) foreach ($posts as $post)
	                get_template_part('template/article', 'game', ['class' => 'col-lg-2']);
				wp_reset_postdata();
                ?>
                <div class="pagination d-flex justify-content-center w-100">
                    <ul class="list-unstyled d-flex">
                        <li class="mx-1 active">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">1</a>
                        </li>
                        <li class="mx-1">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">2</a>
                        </li>
                        <li class="mx-1">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">3</a>
                        </li>
                        <li class="mx-1">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">4</a>
                        </li>
                        <li class="mx-1 active">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
			</div>
            <div class="description">
                <h2 class="font-18 font-lg-25 font-weight-500">DESCRIÇÃO</h2>
                <div class="content text-grey-4">
	                <?= category_description() ?>
                </div>
            </div>
		</section>
	</div>
</div>
<?php endif; ?>
<?= get_footer(); ?>
