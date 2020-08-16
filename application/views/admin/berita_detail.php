<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Berita
                </div>
                <div class="card-body">
                    <h5 class="card-title">Judul</h5>
                    <p class="card-text"><?= $berita['judul']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal</h5>
                    <p class="card-text"><?= $berita['tanggal']; ?></p>
                    <h5 class="card-title margin-top:5;">Highlight</h5>
                    <p class="card-text"><?= $berita['highlight']; ?></p>
                    <h5 class="card-title margin-top:5;">Isi Berita</h5>
                    <p class="card-text"><?= $berita['isi']; ?></p>
                    <h5 class="card-title margin-top:5;">Link</h5>
                    <p class="card-text"><?= $berita['link']; ?></p>
                    <a href="<?= base_url(); ?>admin/berita" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>