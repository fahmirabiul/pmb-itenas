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
        <!-- BIAYA PENDAFTARAN -->
        <div class="mt-3" style="padding-top: 43px">
            <div class="card" style="width: 900px; display: block; margin: auto;">
                <div class="card-body">
                    <h1 class="card-text" id="prodi-card-header">Biaya Pendaftaran</h1>

                    <!-- TABEL BIAYA PENDAFTARAN -->
                    <table class="table table-striped" style="text-align: center;">
                        <thead style="background-color: gold;">
                            <th>Jalur</th>
                            <th>Periode</th>
                            <th>Biaya</th>
                        </thead>
                        <tbody>
                            <?php foreach ($pendaftaran as $pend) : ?>
                                <tr>
                                    <td><?= strtoupper($pend['nama_jalur']); ?></td>
                                    <td><?= $pend['periode']; ?></td>
                                    <td>Rp <?= number_format($pend['biaya'], 2, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- END OF BIAYA PENDAFTARAN -->

        <!-- BIAYA STUDI -->
        <div class="mt-3">
            <div class="card" style="width: 900px; display: block; margin: auto;">
                <div class="card-body">
                    <h1 class="card-text" id="prodi-card-header">Biaya Studi</h1>
                    <!-- TABEL BIAYA PENDAFTARAN -->
                    <table class="table table-striped" style="text-align: center;">
                        <thead style="background-color: gold;">
                            <th>No.</th>
                            <th>Program Studi</th>
                            <th>Uang Kuliah</th>
                            <th>DPP Wajib</th>
                            <th>TOTAL BIAYA</th>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($biaya as $bia) : ?>
                                <tr>
                                    <td scope="row"><?= $no++ ?></td>
                                    <td><?= ucwords($bia['nama_jrs']); ?></td>
                                    <td>Rp <?= number_format($bia['uang_kuliah'], 2, ',', '.'); ?></td>
                                    <td>Rp <?= number_format($bia['dpp_wajib'], 2, ',', '.'); ?></td>
                                    <td>Rp <?= number_format(($bia['uang_kuliah'] + $bia['dpp_wajib']), 2, ',', '.'); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- Download Brosur -->
                    <div class="mt-3">
                        <p><strong><a href="http://pmb.itenas.ac.id/wp-content/uploads/2019/12/Biaya-kuliah-mahasiswa-baru-2020.pdf" target="_blank" rel="noopener noreferrer">Download</a> Tabel Biaya Kuliah Mahasiswa Tahun Akademik 2021/2022</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF BIAYA STUDI -->
    </div>
</section>