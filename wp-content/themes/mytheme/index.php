<?= get_header(); ?>
<div class="row">
	<div class="col-12 col-lg-9">
		<section class="mb-4">
			<div class="d-flex align-items-baseline mb-2">
				<img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
				     width="12" height="20" alt="CHOICE OF EDITORS">
				<h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">CHOICE OF EDITORS</h2>
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
				     width="12" height="20" alt="POPULAR CONSOLES ROMS">
				<h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">POPULAR CONSOLES ROMS</h2>
			</div>
			<div class="row px-2">
                <?php
                $categories = get_categories([
	                'child_of'                 => CATEGORY_ROM,
	                'hide_empty'               => FALSE,
	                'hierarchical'             => 1,
	                'taxonomy'                 => 'category',
                    'number' => 12
                ]);
                ?>
				<?php if (!empty($categories)) foreach ($categories as $value): ?>
					<?php get_template_part('template/article', 'rom', [
                        'category' => $value
                    ]) ?>
				<?php endforeach; ?>
				<div class="col-12 d-flex justify-content-center mt-2">
					<a href="<?= get_category_link(CATEGORY_ROM) ?>" class="bg-main btn-main text-white px-3 py-2 rounded-1 text-decoration-none font-12 font-weight-500 text-uppercase"
					   title="POPULAR CONSOLES ROMS">See more</a>
				</div>
			</div>
		</section>
        <section class="mb-4">
            <div class="d-flex align-items-baseline mb-2">
                <img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
                     width="12" height="20" alt="POPULAR CONSOLES EMULATORS">
                <h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">POPULAR CONSOLES EMULATORS</h2>
            </div>
            <div class="row px-2">
				<?php
				$categories = get_categories([
					'child_of'                 => CATEGORY_EMULATOR,
					'hide_empty'               => FALSE,
					'hierarchical'             => 1,
					'taxonomy'                 => 'category',
					'number' => 12
				]);
				?>
				<?php if (!empty($categories)) foreach ($categories as $value): ?>
					<?php get_template_part('template/article', 'rom', [
						'category' => $value
					]) ?>
				<?php endforeach; ?>
                <div class="col-12 d-flex justify-content-center mt-2">
                    <a href="<?= get_category_link(CATEGORY_EMULATOR) ?>" class="bg-main btn-main text-white px-3 py-2 rounded-1 text-decoration-none font-12 font-weight-500 text-uppercase"
                       title="POPULAR CONSOLES EMULATORS">See more</a>
                </div>
            </div>
        </section>
		<section class="mb-4">
			<div class="d-flex align-items-baseline mb-2">
				<img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
				     width="12" height="20" alt="MOST UPDATED GAMES">
				<h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">MOST UPDATED GAMES</h2>
			</div>
			<div class="row px-2">
				<?php
                    global $post;
				    $new_post = getUpdatedPost();
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
        <section class="mb-4">
            <div class="d-flex align-items-baseline mb-2">
                <img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
                     width="12" height="20" alt="BLOG">
                <h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">BLOG</h2>
            </div>
            <div class="row px-2">
				<?php global $post; $new_post = getBlogPost(null, 6); if ($new_post->have_posts()) while ($new_post->have_posts()):
					$new_post->the_post();
					?>
					<?php get_template_part('template/article', 'blog', [
					        'class' => 'col-lg-6 px-2',
                            'date' => get_the_date('M d, Y')
                    ]) ?>
					<?php wp_reset_postdata(); endwhile; ?>
                <div class="col-12 d-flex justify-content-center mt-2">
                    <a href="<?= get_category_link(CATEGORY_BLOG) ?>" class="bg-main btn-main text-white px-3 py-2 rounded-1 text-decoration-none font-12 font-weight-500 text-uppercase"
                       title="BLOG">See more</a>
                </div>
            </div>
        </section>
		<section class="mb-4">
            <div class="d-flex align-items-baseline mb-2 ">
                <img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
                     width="12" height="20" alt="About This Site">
                <h2 class="font-18 font-lg-25 font-weight-500 text-grey-1">TechToROMs - DOWNLOAD ROMS, GAMES, EMULATORS AND MORE!</h2>
            </div>
            <div class="entry-content">
                <p>
                    Are you looking for a safe and trustworthy site to obtain game ROMs? TechToROMs provides free and secure game downloads for all emulators. This is the greatest place to get games! Take a look at our most recent ROMs, emulators, and games!
                </p>
                <h3>
                    Why download from TechToROMs?
                </h3>
                <p>
                    We provide you with a comprehensive list of games and emulators so that you may play all of your favorite titles on any device! You'll be able to play the most recent releases, like as PS4, Xbox One, and Switch games, as well as classic NES. SNES games are also available. Emulators for Android, iOS (iPhone/iPad), Mac and Linux are also available.
                </p>
                <h3>
                    Popular ROM Downloads on TechToROMs
                </h3>
                <b>PlayStation ROMs</b>
                <p>
                    PlayStation Portable (PSP) ROMs, PlayStation ROMs (PS1), PlayStation 2 (PS2) ROMs, PlayStation 3 (PS3) ROMs, PlayStation 4 (PS4) ROMS, and even Sony PlayStations/PlayStationX have been released. Latest games include Ape Academy, FIFA World Cup and Grand Theft Auto.
                </p>
                <b>NES/Nintendo ROMs</b>
                <p>
                    You may download Nintendo DS (NDS) ROMs, Super Nintendo (SNES) ROMs, Nintendo 64 (N64) ROMS, Nintendo 3DS ROMs, and Switch roms. New games including Mario Kart 8 Deluxe, Super Smash Bros. Ultimate, and Pokémon Sword and Shield are also accessible for download.
                </p>
                <b>Xbox ROMs</b>
                <p>
                    You can get Xbox One ROMs, Xbox 360 ROMs, and even Original Xbox ROMs. Find the newest games, such as Dragon Ball Z Sagas, Motorsport, and Halo: Combat Evolved.
                </p>
                <b>GameBoy ROMs</b>
                <p>
                    GameBoy Advance (GBA) ROMs, GameBoy Color (GBC) ROMs, and even GameBoy Original (GB) ROMs are all available. Pokémon Leaf Green, Super Mario Land, and Pokémon Red are among the most recent games available.
                </p>
                <b>Wii ROMs</b>
                <p>
                    Wii software cartridges, Wii U software cartridges, and Virtual Console ROMs are all available. New games, such as The Last Story, Disney Infinity, and Mario Strikers Charged are also accessible.
                </p>
                <b>Sega ROMs</b>
                <p>
                    You may find Sega Genesis ROMs, Sega Saturn ROMs, and even Sega Master System ROMs at TechToROMs. The most recent games in this category are also accessible, such as House of the Dead, Dragon Force, and Die Hard.
                </p>
                <b>Other ROMs you can also find on TechToROMs are:</b>
                <ul>
                    <li>GameCube ROMs</li>
                    <li>Emulator ROMs</li>
                    <li>Atari 2600 ROMs</li>
                    <li>Dreamcast ROMs</li>
                    <li>Neo Geo ROMs</li>
                </ul>
                <h3>
                    Download the best ROMs at TechToROMs!
                </h3>
                <p>
                    The best place to get ROMs is at TechToROMs. You can be certain to discover the most up-to-date and popular games and emulators for every system and device. With our large variety, you'll be sure to locate what you're looking for!
                </p>
            </div>
        </section>
	</div>
	<?= get_sidebar('home'); ?>
</div>
<?= get_footer(); ?>
