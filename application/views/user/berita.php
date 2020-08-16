<header>
    <div class="slider-menu">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-center">
                <h1 class="text-white font-weight-bold">Berita
                </h1>
            </div>
        </div>
    </div>
</header>

<section class="" id="berita">
    <div class="container">
        <div class="card bg-light" style="width: 100%; margin-top: 4%; padding: 30px; ">
            <H3 style="text-transform: uppercase;"><?= $berita['judul']; ?></H3>
            <p style="font-family: monospace;"> <?= $berita['tanggal']; ?></p>
            <p></p>
            <p> <?= $berita['isi']; ?></p>
            <a href="<?= $berita['link']; ?>">Download</a>
        </div>
    </div>
</section>