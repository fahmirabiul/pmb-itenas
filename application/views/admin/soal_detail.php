<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Soal
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mata Pelajaran</h5>
                    <p class="card-text"><?= $soal['mapel']; ?></p>
                    <h5 class="card-title margin-top:5;">Pertanyaan</h5>
                    <p class="card-text"><?= $soal['pertanyaan']; ?></p>
                    <h5 class="card-title margin-top:5;">Pilihan A</h5>
                    <p class="card-text"><?= $soal['pil_a']; ?></p>
                    <h5 class="card-title margin-top:5;">Pilihan B</h5>
                    <p class="card-text"><?= $soal['pil_b']; ?></p>
                    <h5 class="card-title margin-top:5;">Pilihan C</h5>
                    <p class="card-text"><?= $soal['pil_c']; ?></p>
                    <h5 class="card-title margin-top:5;">Pilihan D</h5>
                    <p class="card-text"><?= $soal['pil_d']; ?></p>
                    <h5 class="card-title margin-top:5;">Jawaban</h5>
                    <p class="card-text"><?= $soal['jawaban']; ?></p>
                    <a href="<?= base_url(); ?>admin/soal" class="btn btn-primary float-right">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>