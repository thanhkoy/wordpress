<div class="mb-3 w-100">
	<a href="<?= get_permalink() ?>" title="<?= get_the_title() ?>" class="d-flex rounded shadow overflow-hidden text-decoration-none sidebar-item">
		<img loading="lazy" class="" src="<?= get_the_post_thumbnail_url(null, 'medium') ?>"
		     width="88" height="88" alt="<?= get_the_title() ?>">
		<div class="position-relative bg-grey-2 px-2 pt-3 pb-2 w-100">
			<?php if (!empty($args['tag'])): ?>
			    <div class="position-absolute top-0 right-0 bg-blue font-12 text-white px-2"><?= $args['tag'] ?></div>
			<?php endif; ?>
			<div class="font-12 text-grey-3">
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
				<i class="fa fa-star" aria-hidden="true"></i>
			</div>
			<span class="font-14 font-weight-500 text-grey-3 max-line-2"><?= get_the_title() ?></span>
		</div>
	</a>
</div>