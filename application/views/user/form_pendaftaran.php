<header>
    <div class="slider-menu">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-center">
                <h1 class="text-white font-weight-bold">Pendaftaran
                </h1>
            </div>
        </div>
    </div>
</header>

<!-- API Kota dan Provinsi -->
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "key: 374b9cd25bfd5974d8b6b1da21d4f453"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $provinsi = json_decode($response, true);
}
?>
<!-- end of API Kota dan Provinsi -->

<div class="card" style="padding-top: 43px">
    <div class="container">
        <div class="card-body">
            <form action="" method="post">

                <div class="form-group">
                    <input type="hidden" name="kode_jalur" value="<?= $_GET['kode_jalur']; ?>">
                    <center>
                        <h5>Pendaftaran <?= $jalur['nama_jalur']; ?> Periode <?= $jalur['periode']; ?></h5>
                    </center>
                </div>
                <h6 class="card-subtitle mb-2 text-muted">Data Pribadi</h6>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nama Lengkap</label>
                    <div class="col-md-6">
                        <input name="nama" type="text" class="form-control" id="" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-md-6">
                        <select class="form-control" name="provinsi" id="provinsi">
                            <option value="">Pilih Provinsi</option>
                            <?php
                            if ($provinsi['rajaongkir']['status']['code'] == '200') {
                                foreach ($provinsi['rajaongkir']['results'] as $pv) {
                                    echo "<option value='$pv[province_id]' myTag='$pv[province]'>$pv[province]</option>";
                                }
                            }
                            ?>
                            <input type="hidden" name="nm_provinsi" id="nm_provinsi" value="">
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label"></label>
                    <div class="col-md-6">
                        <select class="form-control" name="kota" id="kota">
                            <option>Pilih Kota</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-6">
                        <input name="tgl_lahir" type="date" class="form-control" id="" placeholder="Tanggal Lahir" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input type="radio" name="jns_kelamin" value="laki-laki" required>laki-laki
                            <input type="radio" name="jns_kelamin" value="perempuan" class="ml-3">perempuan
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Alamat Rumah</label>
                    <div class="col-md-6">
                        <input name="alamat" type="text" class="form-control" id="" placeholder="Alamat Rumah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nomor Handphone</label>
                    <div class="col-md-6">
                        <input name="nohp" type="number" class="form-control" id="" placeholder="Nomor Handphone" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-md-6">
                        <select class="form-control" name="agama" id="agama" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="islam">islam</option>
                            <option value="protestan">protestan</option>
                            <option value="katolik">katolik</option>
                            <option value="hindu">hindu</option>
                            <option value="budha">budha</option>
                            <option value="khonghucu">khonghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-md-6">
                        <input name="email" type="text" class="form-control" id="" placeholder="Email" required>
                    </div>
                </div>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">Data Orang Tua</h6>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                    <div class="col-md-6">
                        <input name="nama_ortu" type="text" class="form-control" id="" placeholder="(ayah/ibu)" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                    <div class="col-md-6">
                        <input name="alamat_ortu" type="text" class="form-control" id="" placeholder="Alamat Orang Tua" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Nomor Handphone Orang Tua</label>
                    <div class="col-md-6">
                        <input name="nohp_ortu" type="number" class="form-control" id="" placeholder="Nomor Handphone Orang Tua" required>
                    </div>
                </div>

                <hr>
                <h6 class="card-subtitle mb-2 text-muted">Data Lainnya</h6>
                <div class="form-group row">
                    <label for="no_ijazah" class="col-sm-3 col-form-label">Nomor Ijazah</label>
                    <div class="col-md-6">
                        <input name="no_ijazah" type="number" class="form-control" id="no_ijazah" placeholder="Nomor Ijazah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="asal_sekolah" class="col-sm-3 col-form-label">Asal Sekolah</label>
                    <div class="col-md-6">
                        <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" placeholder="Asal Sekolah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jurusan" class="col-sm-3 col-form-label">Program Studi</label>
                    <div class="col-md-6">
                        <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach ($jurusan as $jur) : ?>
                                <option value="<?= $jur['kode_jrs']; ?>"><?= ucwords($jur['nama_jrs']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <input type="submit" name="daftar" value="Daftar" class="btn btn-success float-right ml-3 mb-3">
            </form>
        </div>
    </div>
</div>

<!-- Kontak-->
<section class="page-section" id="kontak">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 ml-auto mr-auto mb-lg-0">
                <div class="text-widget">
                    <img src="<?= base_url('assets/img/logo_pmb.png'); ?>" alt="pmb-itenas-logo" class="contact-logo">
                    <p>Institut Teknologi Nasional<br>Jl.PHH Mustopa No.23<br>Bandung 40124, Indonesia<br>Phone : +62-22-7272215<br>Fax:+62-22-7202892<br>e-Mail: humas@itenas.ac.id<br>promosi@itenas.ac.id</p>
                </div>
            </div>
            <div class="col-lg-3 ml-auto mr-auto mb-lg-0 text-center">
                <div class="text-widget">
                    <h3>Follow us</h3>
                    <a href="https://www.facebook.com/itenas.official/" class="btn-floating btn-lg btn-fb" type="button" role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/itenas.official/" class="btn-floating btn-lg btn-ins" type="button" role="button" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCXNl5jOSO9os1nOr40oizXg" class="btn-floating btn-lg btn-yt" type="button" role="button" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-6 ml-auto mr-auto mb-lg-0">
                <div class="text-widget">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.754485191932!2d107.6361928!3d-6.8979448!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ed5cea73b538ee0!2sInstitut%20Teknologi%20Nasional!5e0!3m2!1sid!2sid!4v1581956655775!5m2!1sid!2sid" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer -->
<footer class="bg-light py-5">
    <div class="container">
        <div class="small text-center text-muted">Copyright © 2020 - Karim n friends</div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- Core theme JS-->
<script src="<?= base_url('assets/js/landing_page.js'); ?>"></script>

<!-- Vanilla Js -->
<script>
    document.getElementById('provinsi').addEventListener('change', function() {
        var myTag = $('option:selected', this).attr('myTag');
        document.getElementById('nm_provinsi').value = myTag;

        fetch("<?= base_url('user/kota/') ?>" + this.value, {
                method: 'GET',
            })
            .then((response) => response.text())
            .then((data) => {
                console.log(data)
                document.getElementById('kota').innerHTML = data
            })
    })
</script>
</body>

</html>