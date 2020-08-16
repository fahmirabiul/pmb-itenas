<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Jalur Masuk
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nama Jurusan</h5>
                    <p class="card-text"><?= $jurusan['nama_jrs']; ?></p>
                    <h5 class="card-title margin-top:5;">Fakultas</h5>
                    <p class="card-text"><?= $jurusan['fakultas']; ?></p>
                    <h5 class="card-title margin-top:5;">Akreditasi</h5>
                    <p class="card-text"><?= $jurusan['akreditasi']; ?></p>
                    <h5 class="card-title margin-top:5;">Uang Kuliah</h5>
                    <p class="card-text"><?= $jurusan['uang_kuliah']; ?></p>
                    <h5 class="card-title margin-top:5;">Dpp Wajib</h5>
                    <p class="card-text"><?= $jurusan['dpp_wajib']; ?></p>
                    <h5 class="card-title margin-top:5;">Link Brosur</h5>
                    <p class="card-text"><?= $jurusan['brosur']; ?></p>
                    <a href="<?= base_url(); ?>admin/jurusan" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>