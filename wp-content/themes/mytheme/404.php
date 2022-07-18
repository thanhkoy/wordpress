<?= get_header(); ?>
<div class="row">
	<div class="col-12">
		<section class="mb-4">
			<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
			<h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1 text-uppercase text-center">404</h1>
			<div class="d-flex flex-column">
				<a href="<?= home_url() ?>" title="Home page" class="mb-2 text-main text-hover-orange text-decoration-none">Home page</a>
				<img src="<?= get_template_directory_uri() ?>/assets/images/404.gif" alt="404">
			</div>
		</section>
	</div>
</div>
<?= get_footer(); ?>