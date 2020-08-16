<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Peserta
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <input type="hidden" name="id_peserta" value="<?= $peserta['id_peserta']; ?>">
                        <input type="hidden" name="id_pendaftaran" value="<?= $peserta['id_pendaftaran']; ?>">
                        <div class="form-group">
                            <label for="nama_peserta">Nama Peserta</label>
                            <input value="<?= $peserta['nama']; ?>" type="text" class="form-control" name="nama_peserta" id="nama_peserta" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nilai">Nilai</label>
                            <input value="<?= $peserta['nilai']; ?>" type="text" class="form-control" name="nilai" id="nilai" readonly>
                        </div>
                        <div class="form-group">
                            <label for="status">Status Kelulusan</label>
                            <select class="custom-select" id="status" name="status">
                                <option value="tidak lulus">Tidak Lulus</option>
                                <option value="lulus">Lulus</option>
                            </select>
                        </div>
                        <a href="<?= base_url('admin/peserta'); ?>">kembali</a>
                        <input type="submit" name="submit" class="btn btn-primary float-right" value="Edit Data"></input>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>