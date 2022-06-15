<?php
$ver = '0.01';
?>
<!doctype html>
<html lang="vi-VN">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon.png"/>
    <link rel="apple-touch-icon" href="<?= get_template_directory_uri() ?>/assets/images/favicon.png"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        <?php $css = file_get_contents(get_template_directory_uri() . '/assets/css/critical.css');
        echo $css?>
    </style>

    <script defer src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js?<?= $ver ?>"></script>
    <script defer src="<?= get_template_directory_uri() ?>/assets/js/bootstrap.min.js?<?= $ver ?>"></script>
    <script defer src="<?= get_template_directory_uri() ?>/assets/js/custom.js?<?= $ver ?>"></script>
</head>
<body>
<header class="container-fluid header bg-main pb-4">
    <div class="container mb-4">
        <nav class="navbar navbar-expand-md">
            <!-- Brand -->
            <a href="/">
                <img src="<?= get_template_directory_uri() ?>/assets/images/logo_header.png" width="186" height="50" alt="Logo">
            </a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link font-16 p-3 text-white text-hover-orange" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-16 p-3 text-white text-hover-orange" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-16 p-3 text-white text-hover-orange" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container text-center">
        <h1 class="font-40 font-weight-bold text-white text-shadow">ROMS GAMES FREE DOWNLOAD</h1>
        <span class="font-22 text-white text-shadow">for Android, PC, Mac or iPhone</span>
        <div class="form-search mt-4 bg-white rounded h-50px w-50 mx-auto">
            <form action="" class="w-100 h-100 position-relative" autocomplete="off">
                <div class="w-100 top-0 left-0 position-absolute rounded overflow-hidden">
                    <input type="text" name="s" class="w-100 border-0 font-16 bg-transparent pl-3 pr-5 h-50px"
                           placeholder="Busque seus jogos e aplicativos favoritos..." autocomplete="off">
                    <button class="position-absolute right-0 h-100 border-0 bg-transparent text-grey px-3">
                        <svg width="18" height="18" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="" d="M20 20L15.514 15.506L20 20ZM18 9.5C18 11.7543 17.1045 13.9163 15.5104 15.5104C13.9163 17.1045 11.7543 18 9.5 18C7.24566 18 5.08365 17.1045 3.48959 15.5104C1.89553 13.9163 1 11.7543 1 9.5C1 7.24566 1.89553 5.08365 3.48959 3.48959C5.08365 1.89553 7.24566 1 9.5 1C11.7543 1 13.9163 1.89553 15.5104 3.48959C17.1045 5.08365 18 7.24566 18 9.5V9.5Z" stroke="#808080" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</header>
<main class="container py-3">
    <div class="row">
        <div class="col-12 col-lg-9">
            <section>
                <div class="d-flex align-items-baseline mb-2">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/title_dot.svg" class="mr-1"
                         width="12" height="20">
                    <h2 class="font-25 font-weight-500 text-grey-1">ESCOLHA DOS EDITORES</h2>
                </div>
                <div class="row px-2">
                    <?php for ($i=0; $i < 6; $i++): ?>
                        <article class="col-12 col-lg-4 px-1 mb-2">
                            <a href="/" class="card-rom card-choice d-inline-block position-relative w-100 border">
                                <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/demo_img/pokemon-ultra-violet-rom-4.jpg"
                                     alt="Pokemon Ultra Violet">
                                <div class="blur-card"></div>
                                <div class="body bg-main">
                                    <div class="title font-15 text-white text-center">Pokemon Ultra Violet</div>
                                </div>
                            </a>
                        </article>
                    <?php endfor; ?>
                </div>
            </section>
        </div>
        <aside class="col-12 col-lg-3">
            <section>
                <div class="bg-main rounded mb-2 py-3 text-center w-100">
                    <h3 class="mb-0 font-15 text-white">POPULARES GAME ROMS</h3>
                </div>
                <?php for ($i=0; $i < 12; $i++): ?>
                    <div class="mb-2 w-100">
                        <a href="/" title="Pokemon Ultra Violet" class="d-flex rounded overflow-hidden text-decoration-none">
                            <img class="" src="<?= get_template_directory_uri() ?>/assets/demo_img/pokemon-ultra-violet-rom-4.jpg"
                                 width="88" height="88" alt="Pokemon Ultra Violet">
                            <div class="position-relative bg-grey-2 px-2 pt-3 pb-2 w-100">
                                <div class="position-absolute top-0 right-0 bg-green font-12 text-white px-2">Neo Geo</div>
                                <div>
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/star_black.svg" width="13" height="13">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/star_black.svg" width="13" height="13">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/star_black.svg" width="13" height="13">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/star_black.svg" width="13" height="13">
                                    <img src="<?= get_template_directory_uri() ?>/assets/images/star_black.svg" width="13" height="13">
                                </div>
                                <span class="font-14 font-weight-500 text-grey-3">Pokemon Ultra Violet</span>
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </section>
        </aside>
    </div>
<?/*= get_sidebar('right'); */?>
</main>
<footer></footer>
<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/non-critical.css?<?= $ver ?>" media="print"
      onload="this.media='all'">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>
