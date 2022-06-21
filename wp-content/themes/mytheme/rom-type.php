<?= get_header(); ?>
<?php if (!empty($args['list_item'])): ?>
<div class="row">
	<div class="col-12">
		<section class="mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white p-0">
                    <li class="breadcrumb-item">
                        <a href="/" class="text-main text-hover-orange text-decoration-none">Casa</a>
                    </li>
                    <li class="breadcrumb-item text-main" aria-current="page"><?= single_cat_title() ?></li>
                </ol>
            </nav>
            <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase"><?= single_cat_title() ?></h1>
			<div class="row px-2 mb-3">
				<?php foreach($args['list_item'] as $value): ?>
					<?php get_template_part('template/article', 'rom', [
                        'class' => 'col-lg-2',
                        'category' => $value
                    ]) ?>
				<?php endforeach; ?>
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
