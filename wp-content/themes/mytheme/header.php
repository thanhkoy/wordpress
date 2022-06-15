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
<header class="container-fluid header bg-main">
    <div class="container">
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
    <div class="text-center">
        <h1 class="font-40 font-weight-bold text-white text-shadow">ROMS GAMES FREE DOWNLOAD</h1>
        <span class="font-22 text-white text-shadow">for Android, PC, Mac or iPhone</span>
    </div>
</header>
<main class="overflow-hidden">
    <div class="container p-0 px-md-3">
        <div class="d-block d-md-flex justify-content-between">