<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Jalur Masuk
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Jalur</h5>
                    <p class="card-text"><?= $jalur_masuk['nama_jalur']; ?></p>
                    <h5 class="card-title margin-top:5;">Biaya</h5>
                    <p class="card-text"><?= $jalur_masuk['biaya']; ?></p>
                    <h5 class="card-title margin-top:5;">Periode</h5>
                    <p class="card-text"><?= $jalur_masuk['periode']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal Pendaftaran Awal</h5>
                    <p class="card-text"><?= $jalur_masuk['pendaftaran_aw']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal Pendaftaran Akhir</h5>
                    <p class="card-text"><?= $jalur_masuk['pendaftaran_aw']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal Ujian</h5>
                    <p class="card-text"><?= $jalur_masuk['ujian']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal Pengumuman</h5>
                    <p class="card-text"><?= $jalur_masuk['pengumuman']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal Daftar Ulang Awal</h5>
                    <p class="card-text"><?= $jalur_masuk['daftar_ulang_aw']; ?></p>
                    <h5 class="card-title margin-top:5;">Tanggal Daftar Ulang Akhir</h5>
                    <p class="card-text"><?= $jalur_masuk['daftar_ulang_ak']; ?></p>
                    <a href="<?= base_url(); ?>admin/jalur" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>