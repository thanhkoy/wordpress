<?= get_header(); ?>
<div class="row">
    <div class="col-12">
        <section class="mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white p-0">
                    <li class="breadcrumb-item">
                        <a href="/" class="text-main text-hover-orange text-decoration-none">Casa</a>
                    </li>
                    <li class="breadcrumb-item text-main" aria-current="page">GAMES</li>
                </ol>
            </nav>
            <h1 class="font-18 font-lg-28 font-weight-500 mb-3 text-grey-1 text-center">GAMES</h1>
            <div class="row px-2 mb-3">
				<?php for ($i=0; $i < 60; $i++): ?>
					<div class="col-6 col-lg-2 px-2 mb-3">
                        <a class="bg-main btn-main text-white p-2 h-50px d-flex justify-content-center align-items-center rounded-1 text-decoration-none" href="/" title="#Pokemon">#Pokemon</a>
                    </div>
				<?php endfor; ?>
            </div>
        </section>
    </div>
</div>
<?= get_footer(); ?>