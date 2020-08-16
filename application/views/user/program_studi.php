    <header>
        <div class="slider-menu">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-center">
                    <h1 class="text-white font-weight-bold">Program Studi (S1)
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <section class="" id="program-studi">
        <div class="container">
            <div class="mt-3 pt-3">
                <div class="card" style="width: 85%; display: block; margin: auto; border:0;">
                    <p>Kampus Itenas menyelenggarakan Program Penerimaan Mahasiswa Baru melalui Seleksi Penerimaan Mahasiswa Baru (SPMB) Itenas tahun 2020/2021 untuk Program Studi :</p>

                    <!-- TABEL PROGRAM STUDI -->
                    <table class="table table-striped" style="text-align: center;">
                        <thead>
                            <tr style="background-color: gold;">
                                <th scope="col">Fakultas</th>
                                <th scope="col">Program Studi</th>
                                <th scope="col">Akreditasi</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jurusan as $jur) : ?>
                                <tr>
                                    <td scope="row"><?= ucwords($jur['fakultas']); ?></td>
                                    <td><?= ucwords($jur['nama_jrs']); ?></td>
                                    <td><?= strtoupper($jur['akreditasi']); ?></td>
                                    <td><a href="<?= $jur['brosur']; ?>" target="_blank">brosur</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>