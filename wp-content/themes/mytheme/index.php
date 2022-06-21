<?= get_header(); ?>
<div class="row">
	<div class="col-12 col-lg-9">
		<section class="mb-4">
			<div class="d-flex align-items-baseline mb-2">
				<img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
				     width="12" height="20" alt="ESCOLHA DOS EDITORES">
				<h2 class="font-25 font-weight-500 text-grey-1">ESCOLHA DOS EDITORES</h2>
			</div>
			<div class="row px-2">
                <?php global $post; $new_post = getChoicePost(); if ($new_post->have_posts()) while ($new_post->have_posts()):
	                $new_post->the_post();
                ?>
	                <?php get_template_part('template/article', 'choice') ?>
                <?php wp_reset_postdata(); endwhile; ?>
			</div>
		</section>
		<section class="mb-4">
			<div class="d-flex align-items-baseline mb-2">
				<img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
				     width="12" height="20" alt="POPULARES CONSOLES ROMS">
				<h2 class="font-25 font-weight-500 text-grey-1">POPULARES CONSOLES ROMS</h2>
			</div>
			<div class="row px-2">
                <?php
                $categories = get_categories(
	                array('parent' => 5)
                );
                ?>
				<?php if (!empty($categories)) foreach ($categories as $value): ?>
					<?php get_template_part('template/article', 'rom', [
                        'category' => $value
                    ]) ?>
				<?php endforeach; ?>
				<div class="col-12 d-flex justify-content-center mt-2">
					<a href="/" class="bg-main btn-main text-white px-3 py-2 rounded-1 text-decoration-none font-12 font-weight-500 text-uppercase"
					   title="POPULARES CONSOLES ROMS">Veja mais</a>
				</div>
			</div>
		</section>
		<section class="mb-4">
			<div class="d-flex align-items-baseline mb-2">
				<img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
				     width="12" height="20" alt="JOGOS MAIS ATUALIZADOS">
				<h2 class="font-25 font-weight-500 text-grey-1">JOGOS MAIS ATUALIZADOS</h2>
			</div>
			<div class="row px-2">
				<?php
                    global $post;
				    $new_post = getNewPost();
				    if ($new_post->have_posts()) while ($new_post->have_posts()):
					    $new_post->the_post();
				?>
					<?php get_template_part('template/article', 'game', [
                        'star' => true,
                        'tag' => get_the_category()[0]->name ?? false
                    ]) ?>
                <?php wp_reset_postdata(); endwhile; ?>
			</div>
		</section>
	</div>
	<?= get_sidebar('home'); ?>
</div>
<?= get_footer(); ?>
