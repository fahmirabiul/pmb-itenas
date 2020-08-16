<header>
    <div class="slider-menu">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-center">
                <h1 class="text-white font-weight-bold">Penelusuran Minat dan Bakat
                </h1>
            </div>
        </div>
    </div>
</header>

<section class="" id="jalur-pmdk">
    <div class="container">
        <div class="mt-3 pt-3">
            <div class="mt-3">
                <h4>Jadwal Kegiatan</h4>
            </div>
            <!-- Tabel Periode Pendaftaran -->
            <table class="table table-striped mt-3" style="text-align: center;">
                <thead style="background-color: gold;">
                    <tr>
                        <th scope="col">Periode</th>
                        <th scope="col">Tanggal Pendaftaran</th>
                        <th scope="col">Pengumuman</th>
                        <th scope="col">Daftar Ulang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($jalur as $jl) : ?>
                        <tr>

                            <!-- FORMAT DATE -->
                            <?php
                            $daf_aw = strtotime($jl['pendaftaran_aw']);
                            $daft_aw = date('d M Y', $daf_aw);

                            $daf_ak = strtotime($jl['pendaftaran_ak']);
                            $daft_ak = date('d M Y', $daf_ak);

                            $png = strtotime($jl['pengumuman']);
                            $peng = date('d M Y', $png);

                            $daftul_aw = strtotime($jl['daftar_ulang_aw']);
                            $daftarul_aw = date('d M Y', $daftul_aw);

                            $daftul_ak = strtotime($jl['daftar_ulang_ak']);
                            $daftarul_ak = date('d M Y', $daftul_ak);
                            ?>
                            <!-- END OF FORMAT DATE -->

                            <th scope="row"><?= $jl['periode']; ?></th>
                            <td><?= $daft_aw; ?> - <?= $daft_ak; ?></td>
                            <td><?= $peng ?></td>
                            <td><?= $daftarul_aw ?> - <?= $daftarul_ak ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div class="card" style="width: 900px;">
                <div class="card-body">
                    <ul>
                        <li>Persyaratan Umum</li>
                        <li>Persyaratan Jalur Akademik</li>
                        <li>Persyaratan Jalur non Akademik</li>
                        <li>Tatacara Pendaftaran</li>
                        <li style="list-style-type: none;" class="mt-3">
                            <a href="http://pmb.unpas.ac.id/wp-content/uploads/2019/01/Tata-Cara-Pendaftaran-Online-1.pdf">
                                <h5>Download</h5>
                            </a>
                        </li>
                    </ul>
                    <div class="mt-3">
                        <?php $kode = 0;
                        foreach ($jalur as $jl) :
                            $now = date('Y-m-d');
                            if ($now >= $jl['pendaftaran_aw']) {
                                $kode = $jl['id_jalur'];
                                break;
                            } else {
                                $kode = 0;
                            }
                        endforeach;

                        ?>
                        <a href="<?= base_url('user/form_pendaftaran?kode_jalur=' . $kode); ?>">
                            <button style=" float: right;" type="button" class="btn btn-success brn-lg">Daftar Sekarang</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>