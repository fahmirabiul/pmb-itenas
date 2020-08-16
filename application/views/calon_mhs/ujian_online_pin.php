<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="card" style="width: 80%; height: 300px; margin: auto;">
                <?php if ($jalur['nama_jalur'] == 'pmdk') { ?>
                    <!-- note ujian hanya untuk usm -->
                    <h3 style="margin: 100px 100px; text-align: center; font-weight: 600;">Halaman ujian online hanya tersedia untuk jalur pendaftaran Ujian Saringan Mandiri.</h3>
                <?php } elseif ($calon['status_bayar'] != 'lunas') { ?>
                    <!-- note lakukan pembayaran -->
                    <h3 style="margin: 100px 100px; text-align: center; font-weight: 600; color: red;">Anda belum melakukan pembayaran. Harap segera lakukan pembayaran.</h3>
                <?php } elseif ($jalur['ujian'] != date("Y-m-d")) { ?>
                    <!-- note ujian belum dimulai -->
                    <h3 style="margin: 100px 100px; text-align: center; font-weight: 600;">Anda telah melakukan pembayaran. Harap cek kembali jadwal ujian.</h3>
                <?php } else { ?>
                    <!-- input pin -->
                    <form action="" method="POST">
                        <p style="text-align: center; padding-top: 50px;">Masukkan Pin :</p>
                        <div class="input-group input-group-sm mb-3" style="padding: 0 250px;">
                            <input type="text" class="form-control" name="pin_ujian">
                            <input type="submit" class="btn btn-primary btn-sm" value="submit">
                        </div>
                    </form>

                    <p style="line-height: 1px; text-align: center; color: red; font-style: italic;">Note: pin ujian diberikan pada saat pelaksanaan ujian akan dimulai</p>
                <?php } ?>
            </div>
        </div>
    </main>