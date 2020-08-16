<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">


            <div class="card mt-3" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">[<?= $calon['kode_jrs']; ?>] - Soal <?= ucwords($calon['nama_jrs']); ?></h5>
                    <p class="card-text">Keterangan :
                        <br> Soal : <?= $count_soal; ?> Butir
                        <br>Waktu : <?php $waktu_ujian = $count_soal * 3;
                                    echo $waktu_ujian; ?> Menit
                        <!-- Display the countdown timer in an element -->
                        <p id="demo" style="text-align: right">sisa waktu ujian : </p>
                    </p>

                    <!-- Soal -->
                    <form action="<?= base_url('calon_mhs/cek_jawaban'); ?>" method="POST">
                        <input type="hidden" name="id_pendaftaran" value="<?= $calon['id_pendaftaran']; ?>">
                        <table class="table table-striped" id="form_soal">
                            <thead>
                                <tr style="text-align: center;">
                                    <th class="table-dark" scope="col">No.</th>
                                    <th class="table-dark" scope="col">Soal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($soal as $so) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <?= $so['pertanyaan']; ?>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pil<?= $no; ?>" id="pil_a<?= $no; ?>" value="a">
                                                <label for="pil_a<?= $no; ?>" class="form-check-label">
                                                    A. <?= $so['pil_a']; ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pil<?= $no; ?>" id="pil_b<?= $no; ?>" value="b">
                                                <label for="pil_b<?= $no; ?>" class="form-check-label">
                                                    B. <?= $so['pil_b']; ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pil<?= $no; ?>" id="pil_c<?= $no; ?>" value="c">
                                                <label for="pil_c<?= $no; ?>" class="form-check-label">
                                                    C. <?= $so['pil_c']; ?>
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pil<?= $no; ?>" id="pil_d<?= $no; ?>" value="d">
                                                <label for="pil_d<?= $no; ?>" class="form-check-label">
                                                    D. <?= $so['pil_d']; ?>
                                                </label>
                                            </div>
                                            <h5 id="nilai"></h5>
                                            <!-- <label for="jawaban">jawaban benar :</label>
                                            <input type="text" name="jawaban" value="<?= $so['jawaban']; ?>"> -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success float-right ml-3">
                    </form>

                </div>
            </div>


        </div>
    </main>

    <script type="text/javascript">
        var waktu = <?= $waktu_ujian; ?> * 60;
        setInterval(function() {
            var menit = Math.floor(waktu / 60);
            var detik = waktu % 60;
            waktu--;
            if (waktu <= 0) {
                // window.location = 'https://www.facebook.com/';
                document.getElementById("demo").innerHTML = "waktu habis";
                document.getElementById("form_soal").style.display = "none";
            } else {
                document.getElementById("demo").innerHTML = "Sisa Waktu Ujian : " + menit + " menit " + detik + " detik";
            }
        }, 1000);
    </script>