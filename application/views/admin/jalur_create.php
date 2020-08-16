<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Jalur Masuk
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_jalur">Nama Jalur</label>
                            <input type="text" class="form-control" name="nama_jalur" id="nama_jalur">
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input type="number" class="form-control" name="biaya" id="biaya">
                        </div>
                        <div class="form-group">
                            <label for="periode">Periode</label>
                            <input type="number" class="form-control" name="periode" id="periode">
                        </div>
                        <div class="form-group">
                            <label for="pendaftaran_aw">Tanggal Pendaftaran Awal</label>
                            <input type="text" class="form-control" id="pendaftaran_aw">
                        </div>
                        <div class="form-group">
                            <label for="pendaftaran_ak">Tanggal Pendaftaran Akhir</label>
                            <input type="text" class="form-control" id="pendaftaran_ak">
                        </div>
                        <div class="form-group">
                            <label for="ujian">Tanggal Ujian</label>
                            <input type="text" class="form-control" id="ujian">
                        </div>
                        <div class="form-group">
                            <label for="pengumuman">Tanggal Pengumuman Hasil</label>
                            <input type="text" class="form-control" id="pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="daftar_ulang_aw">Tanggal Daftar Ulang Awal</label>
                            <input type="text" class="form-control" id="daftar_ulang_aw">
                        </div>
                        <div class="form-group">
                            <label for="daftar_ulang_ak">Tanggal Daftar Ulang Akhir</label>
                            <input type="text" class="form-control" id="daftar_ulang_ak">
                        </div>
                        <a href="<?= base_url('admin/jalur'); ?>">kembali</a>
                        <button type="submit" name="create" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>