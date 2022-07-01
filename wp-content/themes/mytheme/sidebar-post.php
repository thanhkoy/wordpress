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
        <div class="col-12 d-flex justify-content-center mt-2">
            <a href="/" class="bg-main btn-main text-white px-3 py-2 rounded-1 text-decoration-none font-12 font-weight-500 text-uppercase"
               title="RECOMMENDED FOR YOU">See more</a>
        </div>
    </section>
</aside>