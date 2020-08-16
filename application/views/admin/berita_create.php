<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Berita
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="highlight">Highlight</label>
                            <input type="text" class="form-control" name="highlight" id="highlight">
                        </div>
                        <div class="form-group">
                            <label for="isi">Isi Berita</label>
                            <input type="text" class="form-control" name="isi" id="isi">
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" name="link" id="link">
                        </div>
                        <a href="<?= base_url('admin/berita'); ?>">kembali</a>
                        <button type="submit" name="create" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>