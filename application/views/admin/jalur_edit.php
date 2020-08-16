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
                            <input value="<?= $jalur['id_jalur']; ?>" type="hidden" class="form-control" name="id_jalur" id="id_jalur">
                        </div>
                        <div class="form-group">
                            <label for="nama_jalur">Nama Jalur</label>
                            <input value="<?= $jalur['nama_jalur']; ?>" type="text" class="form-control" name="nama_jalur" id="nama_jalur">
                        </div>
                        <div class="form-group">
                            <label for="biaya">Biaya</label>
                            <input value="<?= $jalur['biaya']; ?>" type="text" class="form-control" name="biaya" id="biaya">
                        </div>
                        <div class="form-group">
                            <label for="periode">Periode</label>
                            <input value="<?= $jalur['periode']; ?>" type="text" class="form-control" name="periode" id="periode">
                        </div>
                        <div class="form-group">
                            <label for="pendaftaran_aw">Pendaftaran Awal</label>
                            <input value="<?= $jalur['pendaftaran_aw']; ?>" type="date" class="form-control" name="pendaftaran_aw" id="pendaftaran_aw">
                        </div>
                        <div class="form-group">
                            <label for="pendaftaran_ak">Pendaftaran Akhir</label>
                            <input value="<?= $jalur['pendaftaran_ak']; ?>" type="date" class="form-control" name="pendaftaran_ak" id="pendaftaran_ak">
                        </div>
                        <div class="form-group">
                            <label for="ujian">Ujian</label>
                            <input value="<?= $jalur['ujian']; ?>" type="date" class="form-control" name="ujian" id="ujian">
                        </div>
                        <div class="form-group">
                            <label for="pengumuman">Pengumuman</label>
                            <input value="<?= $jalur['pengumuman']; ?>" type="date" class="form-control" name="pengumuman" id="pengumuman">
                        </div>
                        <div class="form-group">
                            <label for="daftar_ulang_aw">Daftar Ulang Awal</label>
                            <input value="<?= $jalur['daftar_ulang_aw']; ?>" type="date" class="form-control" name="daftar_ulang_aw" id="daftar_ulang_aw">
                        </div>
                        <div class="form-group">
                            <label for="daftar_ulang_ak">Daftar Ulang Akhir</label>
                            <input value="<?= $jalur['daftar_ulang_ak']; ?>" type="date" class="form-control" name="daftar_ulang_ak" id="daftar_ulang_ak">
                        </div>
                        <a href="<?= base_url('admin/jalur'); ?>">kembali</a>
                        <input type="submit" name="submit" class="btn btn-primary float-right" value="Edit Data"></input>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>