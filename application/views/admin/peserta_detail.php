<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Peserta Ujian
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Peserta</h5>
                    <p class="card-text"><?= $peserta['nama']; ?></p>
                    <h5 class="card-title">Jalur Masuk</h5>
                    <p class="card-text"><?= $peserta['nama_jalur']; ?></p>
                    <h5 class="card-title">Jurusan</h5>
                    <p class="card-text"><?= $peserta['nama_jrs']; ?></p>
                    <h5 class="card-title">Nilai</h5>
                    <p class="card-text"><?= $peserta['nilai']; ?></p>
                    <h5 class="card-title">Status Kelulusan</h5>
                    <p class="card-text"><?= $peserta['status']; ?></p>
                    <a href="<?= base_url(); ?>admin/peserta" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>