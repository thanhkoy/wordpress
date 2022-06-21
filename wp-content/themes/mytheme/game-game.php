<?= get_header(); ?>
<div class="row">
	<div class="col-12">
		<section class="mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white p-0">
                    <li class="breadcrumb-item">
                        <a href="/" class="text-main text-hover-orange text-decoration-none">Casa</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="/" class="text-main text-hover-orange text-decoration-none">ROMS</a>
                    </li>
                    <li class="breadcrumb-item text-main" aria-current="page">Nintendo 3DS (3DS)</li>
                </ol>
            </nav>
            <div class="d-flex justify-content-between">
                <h1 class="font-18 font-lg-25 font-weight-500 mb-3 text-grey-1">ROMS</h1>
                <div class="form-group">
                    <label class="font-12 text-main">ORDENAR POR</label>
                    <select class="form-control font-14 text-grey-1 p-1">
                        <option selected>Atualizados recentemente</option>
                        <option>Novos lançamentos</option>
                        <option>Populares</option>
                    </select>
                </div>
            </div>
			<div class="row px-2 mb-3">
				<?php for ($i=0; $i < 12; $i++): ?>
					<?php get_template_part('template/article', 'game', [
                        'class' => 'col-lg-2',
                        'tag' => 'Sega Genesis (Mega drive)'
                    ]) ?>
				<?php endfor; ?>
                <div class="pagination d-flex justify-content-center w-100">
                    <ul class="list-unstyled d-flex">
                        <li class="mx-1 active">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">1</a>
                        </li>
                        <li class="mx-1">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">2</a>
                        </li>
                        <li class="mx-1">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">3</a>
                        </li>
                        <li class="mx-1">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">4</a>
                        </li>
                        <li class="mx-1 active">
                            <a class="d-flex justify-content-center align-items-center bg-main text-decoration-none rounded-circle text-white border-0" href="/">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
			</div>
            <div class="description">
                <h2 class="font-18 font-lg-25 font-weight-500">DESCRIÇÃO</h2>
                <div class="content text-grey-4">
                    Você teme que o seu console antigo está começando a dar problema? Se sim, os emuladores podem ajudar a tirar esse peso das suas costas. Porém, um emulador sozinho não serve de nada se você não tiver as ROMs para acompanhá-lo. É aí que entra o HappyROMs. Aqui, você pode encontrar todas as ROMs que você precisa para aproveitar seus jogos. Nós oferecemos ROMs de diversos sistemas, como GameCube ROMs, NDS ROMs, 3DS ROMs, GBA ROMs, PlayStation ROMs, SNES ROMs, Wii ROMs, PSP ROMs, entre várias outras! Essas ROMs são arquivos que contêm os dados dos jogos como se fossem um antigo jogo de cartucho. Elas podem ser abertas num emulador, que irá simular o hardware do sistema antigo. Isso dá a você a liberdade de jogar os seus jogos clássicos num dispositivo mais moderno. Cada console tem seus próprios jogos que eram associados ao sistema. Por exemplo, há jogos de PlayStation 3 (PS3) como Grand Theft Auto V, Uncharted 2 e Call of Duty: Modern Warfare 2. Se você quer jogar esses jogos num Emulador de PlayStation 3, você deve primeiro baixar as ROMs dos jogos de sua escolha. Além disso, o HappyROMs possui ROMs de jogos de diversos dispositivos. Por exemplo, você pode baixar Android ROMs, PC ROMs, iOS ROMs e Mac ROMs. Certifique-se de estar baixando a ROM certa para o dispositivo que você quer emular.
                </div>
            </div>
		</section>
	</div>
</div>
<?= get_footer(); ?>
