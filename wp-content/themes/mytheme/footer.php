<?= get_sidebar('right'); ?>
</div>
</div>
</main>
<footer class="container text-grey font-13 w-100 overflow-hidden p-0 px-md-3">
    <div class="ft-content py-3 pt-md-5 pb-md-3 bg-black">
        <div class="container p-0 px-md-3">
            <div class="row">
                <div class="col-12 col-md-4">
                    <a class="mb-3 d-block text-center text-md-left" href="<?= site_url(); ?>"><img
                                src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="logo" width="210" height="82"></a>
                    <p class="m-0 px-2 px-md-0 about" style="line-height: 20px;">site about</p>
                </div>
                <div class='col-md-2 mt-2 d-none d-md-block'>
                    <h6 class='text-main mb-3'>Chuyên mục mới</h6>
                    <p class='mb-1'>
                        <a class='text-grey' title='test' href='#'>test</a>
                    </p>
                    <p class='mb-1'>
                        <a class='text-grey' title='test' href='#'>test</a>
                    </p>
                    <p class='mb-1'>
                        <a class='text-grey' title='test' href='#'>test</a>
                    </p>
                </div>
                <div class='col-md-3 mt-2 d-none d-md-block'>
                    <h6 class='text-main mb-3'>Chuyên mục nổi bật</h6>
                    <p class='mb-1'>
                        <a class='text-grey' title='test' href='#'>test</a>
                    </p>
                    <p class='mb-1'>
                        <a class='text-grey' title='test' href='#'>test</a>
                    </p>
                    <p class='mb-1'>
                        <a class='text-grey' title='test' href='#'>test</a>
                    </p>
                </div>
                <div class="col-12 col-md-3 mt-2 d-md-block px-4 p-md-0">
                    <h6 class="text-main mb-3">Liên hệ</h6>
                    <div>
                        <p class="mb-2">Email: thanhkoi1411@gmail.com</p>
                        <p class="mb-2">Tel: +84335539210</p>
                    </div>
                    <div class="mb-3">
                        <a target="_blank" href="/rss" class="mr-2">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icon/rss-icon.jpg" alt="rss icon" height="19"
                                 width="19" class="rounded">
                        </a>
                        <a target="_blank" rel="nofollow" href="https://www.facebook.com/thanh.huy.71404" class="mr-2">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/icon-facebook.svg" alt="facebook icon" height="19"
                                 width="9">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-bottom py-3 bg-black2">
        <div class="container d-block d-md-flex justify-content-between p-0 px-md-3">
            <div class="d-none d-md-block">
            </div>
            <div class="text-grey1 text-center text-md-left">© Copyright ThanhBlog 2021. All rights reserved.</div>
        </div>
    </div>
</footer>

<!--back to top-->
<div class="back-top d-block position-fixed text-center btn d-none">
    <p class="text-red1 font-weight-bold mb-0 font-16">TOP</p>
    <p>
        <img src="<?= get_template_directory_uri() ?>/assets/images/icon/back-to-top.png" alt="Backtotop" width="39" height="56">
    </p>
</div>

<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/non-critical.css?<?= $ver ?>" media="print"
      onload="this.media='all'">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script defer src="<?= get_template_directory_uri() ?>/assets/js/main.min.js?<?= $ver ?>"></script>
</body>
</html>