<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Soal
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <input value="<?= $berita['id']; ?>" type="hidden" class="form-control" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input value="<?= $berita['judul']; ?>" type="text" class="form-control" name="judul" id="judul">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input value="<?= $berita['tanggal']; ?>" type="text" class="form-control" name="tanggal" id="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="highlight">Highlight</label>
                            <input value="<?= $berita['highlight']; ?>" type="text" class="form-control" name="highlight" id="highlight">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <input value="<?= $berita['isi']; ?>" type="text" class="form-control" name="isi" id="isi">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input value="<?= $berita['link']; ?>" type="text" class="form-control" name="link" id="link">
                        </div>
                        <a href="<?= base_url('admin/berita'); ?>">kembali</a>
                        <input type="submit" name="submit" class="btn btn-primary float-right" value="Edit Data"></input>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>