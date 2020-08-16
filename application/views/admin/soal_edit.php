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
                            <input value="<?= $soal['id_soal']; ?>" type="hidden" class="form-control" name="id_soal" id="id_soal">
                        </div>
                        <div class="form-group">
                            <label for="mapel">Mata Pelajaran</label>
                            <input value="<?= $soal['mapel']; ?>" type="text" class="form-control" name="mapel" id="mapel">
                        </div>
                        <div class="form-group">
                            <label for="pertanyaan">Pertanyaan</label>
                            <input value="<?= $soal['pertanyaan']; ?>" type="text" class="form-control" name="pertanyaan" id="pertanyaan">
                        </div>
                        <div class="form-group">
                            <label for="pil_a">Pilihan A</label>
                            <input value="<?= $soal['pil_a']; ?>" type="text" class="form-control" name="pil_a" id="pil_a">
                        </div>
                        <div class="form-group">
                            <label for="pil_b">Pilihan B</label>
                            <input value="<?= $soal['pil_b']; ?>" type="text" class="form-control" name="pil_b" id="pil_b">
                        </div>
                        <div class="form-group">
                            <label for="pil_c">Pilihan C</label>
                            <input value="<?= $soal['pil_c']; ?>" type="text" class="form-control" name="pil_c" id="pil_c">
                        </div>
                        <div class="form-group">
                            <label for="pil_d">Pilihan D</label>
                            <input value="<?= $soal['pil_d']; ?>" type="text" class="form-control" name="pil_d" id="pil_d">
                        </div>
                        <div class="form-group">
                            <label for="jawaban">Jawaban</label>
                            <input value="<?= $soal['jawaban']; ?>" type="text" class="form-control" name="jawaban" id="jawaban">
                        </div>
                        <a href="<?= base_url('admin/soal'); ?>">kembali</a>
                        <input type="submit" name="submit" class="btn btn-primary float-right" value="Edit Data"></input>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>