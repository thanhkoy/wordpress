<?php
$ver = '0.01';
?>
<!doctype html>
<html lang="vi-VN">
<head>
    <!-- Required meta tags -->
    <title><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        <?php $css = file_get_contents(get_template_directory_uri() . '/assets/css/critical.css');
        echo $css?>
    </style>

    <script defer src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js?<?= $ver ?>"></script>
    <script defer src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js?<?= $ver ?>"></script>
    <script defer src="<?= get_template_directory_uri() ?>/assets/js/custom.js?<?= $ver ?>"></script>

    <!--Wp_head-->
	<?php wp_head(); ?>
    <!--End Wp_head-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-232315007-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-232315007-1');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9953893755986823"
     crossorigin="anonymous"></script>
</head>
<body>
<header class="shadow py-lg-2 bg-main">
    <div class="container d-lg-flex justify-content-between">
        <div class="d-flex justify-content-between align-items-center h-50px">
            <a class="d-lg-none pr-2" href="javascript:void(0);"
               onclick="document.getElementById('menu-head').classList.toggle('open');">
                <i class="fa fa-bars text-white font-25"></i>
            </a>
            <a class=" w-100 d-flex justify-content-center text-decoration-none" href="/">
                <img class="" alt="roms" src="http://techtoroms.com/wp-content/uploads/2022/06/Tech-To-ROMS.png" width="186" height="50">
            </a>
        </div>
        <div>
	        <?php wp_nav_menu([
		        'theme_location' => 'main_top',
		        'menu_class' => 'list-unstyled position-relative',
		        'container_id' => 'menu-head',
		        'container_class' => 'position-fixed w-80 w-lg-100 top-0 bottom-0 left-0 position-lg-static bg-lg-transparent p-2 overflow-auto overflow-lg-none',
		        'add_li_class' => 'd-lg-inline-block p-1',
		        'add_li_parent_class' => 'dropdown position-relative',
		        'add_link_class' => 'text-white text-hover-orange text-decoration-none p-3',
		        'depth' => 2,
		        'walker' => new My_Walker_Nav_Menu(),
		        'items_wrap' => '<ul class="list-unstyled position-relative">%3$s</ul>
                                        <form role="search" action="' . home_url() . '" method="GET" class="form-search d-lg-none position-relative bg-white rounded-pill mt-5" autocomplete="off">
                                            <input type="text" name="s" class="text-truncate w-100 pl-3 pr-5 bg-transparent border-0 font-14 h-35px"
                                                   placeholder="Search for your favorite Games and Emulators..." autocomplete="off">
                                            <button class="border-0 bg-transparent position-absolute top-0 bottom-0 right-0 px-2">
                                                <i class="fa fa-search font-22" aria-hidden="true"></i>
                                            </button>
                                        </form>',
	        ]) ?>
        </div>
    </div>
    <?php if (is_front_page() && is_home()): ?>
        <div class="container text-center py-4 d-none d-lg-block">
            <h1 class="font-40 font-weight-bold text-white text-shadow">Download ROMs, Games, Emulators and More!</h1>
            <span class="font-22 text-white text-shadow">TechToROMs is the best site to download ROMs, Games, and Emulators. We have a wide selection of free and premium games and emulators for iOS, Android, PC, and Mac.</span>
            <div class="form-search mt-4 bg-white rounded h-50px w-50 mx-auto">
                <form role="search" action="<?= home_url() ?>" method="GET" class="w-100 h-100 position-relative" autocomplete="off">
                    <div class="w-100 top-0 left-0 position-absolute rounded overflow-hidden">
                        <input type="text" name="s" class="w-100 border-0 font-16 bg-transparent pl-3 pr-5 h-50px"
                               placeholder="Search for your favorite games and apps..." autocomplete="off">
                        <button class="position-absolute right-0 h-100 border-0 bg-transparent text-grey px-3">
                            <i class="fa fa-search font-22" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
</header>
<main class="container py-4">