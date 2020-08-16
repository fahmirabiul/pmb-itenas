<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home - PMB Itenas</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo_itenas.png') ?>" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/css/css_landing_page.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/slider.css'); ?>" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo_pmb.png'); ?>" alt="pmbitenas" style="width: 200px;"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#header">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#pendaftaran">Jalur Pendaftaran</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#informasi">Informasi</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw" style="color: orangered;"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" id="header">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-lowercase text-white font-weight-bold">Selamat Datang Calon Mahasiswa Itenas
                        <?php
                        $month = date('m');
                        if ($month > 9) {
                            echo (date('Y') + 1) . "/" . (date('Y') + 2);
                        } else {
                            echo date('Y') . "/" . (date('Y') + 1);
                        }
                        ?>
                    </h1>
                    <hr class="divider my-4" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light">Lakukan Pendaftaran
                    </p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#pendaftaran">MULAI MENDAFTAR</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Berita-->
    <section class="page-section bg-dark text-white" id="berita">
        <div class="container">
            <p style="font-family: Arial, Helvetica, sans-serif;font-size: x-large; font-weight: 700; justify-content: center; text-align: center;">Berita Terbaru</p>
            <div id="slider">
                <input type="radio" name="slider" id="slide1">
                <input type="radio" name="slider" id="slide2">
                <input type="radio" name="slider" id="slide3">
                <div id="slides">
                    <div id="overflow">
                        <div class="inner">
                            <?php
                            $i = 1;
                            foreach ($berita as $brt) : ?>
                                <div class="slide slide_<?= $i; ?>">
                                    <div class="slide-content">
                                        <h2 style="color: #4b4b4b; font-weight: 700; text-transform: uppercase;"><?= $brt['judul']; ?></h2>
                                        <p class="mt-4"><?= $brt['highlight']; ?></p>
                                        <a href="<?= base_url('user/berita?idberita='); ?><?= $brt['id']; ?>" class="" style="display: block; margin-top: 50px; font-size: small;">DETAIL BERITA &#8594</a>
                                    </div>
                                </div>
                            <?php $i++;
                            endforeach; ?>
                        </div>
                    </div>
                </div>
                <div id="controls">
                    <label for="slide1"></label>
                    <label for="slide2"></label>
                    <label for="slide3"></label>
                </div>
                <div id="bullets">
                    <label for="slide1"></label>
                    <label for="slide2"></label>
                    <label for="slide3"></label>
                </div>
            </div>
    </section>

    <!-- pendaftaran -->
    <section class="page-section bg-primary" id="pendaftaran">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Jalur Pendaftaran</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5 card">
                        <figure>
                            <div><img src="<?= base_url('assets/img/jalur_pmdk.jpg'); ?>" style="width: 300px;"></div>
                            <figcaption>
                                <h3 class="mt-2">Jalur PMdk</h3>
                                <span>Jalur penerimaan melalui penelusuran minat dan bakat mahasiswa
                                    <div><a class="mt-2 btn btn-light btn-md js-scroll-trigger" href="<?= base_url('user/jalur_pmdk'); ?>">selengkapnya</a></div>
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5 card">
                        <figure>
                            <div><img src="<?= base_url('assets/img/jalur_usm.jpg'); ?>" style="width: 300px;"></div>
                            <figcaption>
                                <h3 class="mt-2">Jalur USM</h3>
                                <span>Jalur penerimaan melalui test penyaringan kompetensi mahasiswa
                                    <div><a class="mt-2 btn btn-light btn-md js-scroll-trigger" href="<?= base_url('user/jalur_usm'); ?>">selengkapnya</a></div>
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5 card">
                        <figure>
                            <div><img src="<?= base_url('assets/img/jalur_odt.jpg'); ?>" style="width: 300px;"></div>
                            <figcaption>
                                <h3 class="mt-2">Jalur ODT</h3>
                                <span>Jalur penerimaan melalui test cepat selama satu hari
                                    <div><a class="mt-2 btn btn-light btn-md js-scroll-trigger" href="<?= base_url('user/jalur_odt'); ?>">selengkapnya</a></div>
                                </span>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Informasi-->
    <section class="page-section" id="informasi">
        <div class="container">
            <p style="font-family: Arial, Helvetica, sans-serif;font-size: x-large; font-weight: 700;">Informasi</p>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center hover-zoom">
                    <a href="<?= base_url('user/program_studi'); ?>" style="text-decoration: none;">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-th-list text-primary mb-4"></i>
                            <p class="text-muted mb-0" style="font-weight: 700;">Program Studi</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 text-center hover-zoom">
                    <a href="<?= base_url('user/biaya_studi'); ?>" style="text-decoration: none;">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-wallet text-primary mb-4"></i>
                            <p class="text-muted mb-0" style="font-weight: 700;">Biaya Studi</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 text-center hover-zoom">
                    <a href="<?= base_url('user/ptk_pendaftaran'); ?>" style="text-decoration: none;">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-tasks text-primary mb-4"></i>
                            <p class="text-muted mb-0" style="font-weight: 700;">Petunjuk Pendaftaran</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 text-center hover-zoom">
                    <a href="https://api.whatsapp.com/send?phone=628892724253" target="_blank" style="text-decoration: none;">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-phone text-primary mb-4"></i>
                            <p class="text-muted mb-0" style="font-weight: 700;">Daftar Via Whatsapp</p>
                        </div>
                    </a>
                </div>
            </div>
    </section>

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
    <!-- Footer-->
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
</body>

</html>