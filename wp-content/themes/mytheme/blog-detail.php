<?= get_header(); ?>
    <div class="row">
        <div class="col-12">
            <section class="mb-4">
	            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <div class="row">
                    <div class="col-12 col-lg-9 mb-3 description">
                        <h1 class="font-22 font-lg-28 text-black-1 font-weight-500"><?= get_the_title() ?></h1>
                        <div class="content mb-3">
                            <?php the_content(); ?>
                        </div>
                    </div>
					<?= get_sidebar('blog', [
					        'exclude' => get_the_ID()
                    ]); ?>
                </div>
            </section>
        </div>
    </div>
<?= get_footer(); ?>