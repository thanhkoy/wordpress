<aside class="col-12 col-lg-3">
    <section>
        <div class="bg-main rounded mb-2 py-3 text-center w-100">
            <h3 class="mb-0 font-15 text-white">RECOMMENDED FOR YOU</h3>
        </div>
	    <?php global $post; $new_post = getPopularRomPost(); if ($new_post->have_posts()) while ($new_post->have_posts()):
		    $new_post->the_post();
		    ?>
		    <?php get_template_part('template/article', 'sidebar') ?>
		    <?php wp_reset_postdata(); endwhile; ?>
    </section>
</aside>