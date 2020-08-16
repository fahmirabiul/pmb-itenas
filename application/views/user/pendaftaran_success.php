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

<section class="" id="program-studi">
    <div class="container">

        <div class="card mt-4" style="padding-top: 43px">
            <div class="card-body">
                <div class="" style="text-align: center">
                    <h1>PENDAFTARAN BERHASIL!</h1>
                    <p style="font-size: small;">Untuk masuk ke akun anda, gunakan email sebagai username dan nomor ijazah sebagai password.</p>
                    <p>Lakukan pembayaran pendaftaran ke nomor va :
                        <?php
                        $no_va = $this->uri->segment(3);
                        echo $no_va;
                        ?>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>