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

    <style>
        <?php $css = file_get_contents(get_template_directory_uri() . '/assets/css/critical.css');
        echo $css?>
    </style>
</head>
<body>
<div id="fb-root"></div>
<header>
    <div class="container p-0 px-md-3 pb-5 pb-md-4 pb-lg-5">
        <div class="bg-main-light pl-3 d-none d-md-flex justify-content-between align-items-center"
             style="height: 110px;">
            <a href="/"><img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="logo" width="250" height="98"></a>
        </div>
    </div>
</header>
<div class="container mt-n5 mt-md-n4 mt-lg-n5 nav-menu position-sticky px-0 px-md-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-main rounded-md-top p-2 m-0 p-md-0 nav-menu position-sticky">
        <a class="navbar-brand navbar-toggler border-0 m-0 p-0" href="<?= site_url(''); ?>"><img
                    src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="logo" width="76" height="30"></a>
        <button class="navbar-toggler border-0 m-0 p-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item d-md-none">
                    <form method="get" action="/tim-kiem" class="d-flex my-2 flex-nowrap">
                        <input name="keyword" class="form-control py-2 px-3 w-100 font-13 text-white border-0 bg-none"
                               type="search" placeholder="Từ khóa tìm kiếm" aria-label="Search">
                        <button class="btn my-2 my-sm-0 p-0" type="submit"><img
                                    src="<?= get_template_directory_uri() ?>/assets/images/icon-search.svg" alt="search icon" width="18"
                                    height="18"></button>
                    </form>
                </li>
                <li class="nav-item active d-none d-md-block">
                    <a class="nav-link border-right-0 text-white font-14 font-weight-500" href="/">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/home.svg" alt="home page" height="19" width="19">
                    </a>
                </li>
                <?php if (!empty(get_categories())) foreach (get_categories() as $value) :?>
                    <li class='nav-item'>
                        <a class='nav-link border-right-0 text-white font-14 font-weight-500 text-uppercase px-lg-2'
                        href="<?= get_category_link($value); ?>" title="<?= get_cat_name($value->cat_ID) ?>"><?= get_cat_name($value->cat_ID) ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
    <div class='d-flex d-md-none align-items-center font-14 bar-mobi bg-black3 line-height-30 text-nowrap overflow-auto pl-1 justify-content-center'>
        <a class='text-white mr-2' title='test' href='#'>test</a>
        <a class='text-white mr-2' title='test' href='#'>test</a>
        <a class='text-white mr-2' title='test' href='#'>test</a>
    </div>
</div>
<main class="overflow-hidden">
    <div class="container p-0 px-md-3 d-none d-md-block">
        <div class="trending-topic d-flex justify-content-between align-items-center font-13 px-2 bg-black3">
            <div class='d-flex font-weight-thin flex-wrap'>
                <span class='mr-2 text-main'>TRENDING TOPIC:</span>
                <a class='text-white' title='test' href='#'>test</a>
                <a class='text-white' title='test' href='#'>test</a>
                <a class='text-white' title='test' href='#'>test</a>
            </div>
            <div class="mr-2">
                <form method="get" action="/tim-kiem" class="form-inline my-2 my-lg-0 d-flex flex-nowrap">
                    <input name="keyword" class="form-control mr-sm-2 font-13 text-white border-0 bg-none" type="search"
                           placeholder="Từ khóa tìm kiếm" aria-label="Search">
                    <button class="btn my-2 my-sm-0 p-0" type="submit"><img
                                src="<?= get_template_directory_uri() ?>/assets/images/icon-search.svg" alt="search icon" width="18" height="18">
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="container p-0 px-md-3">
        <div class="d-block d-md-flex justify-content-between">