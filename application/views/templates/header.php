<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Home - PMB Itenas</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url('assets/img/logo_pmb.png'); ?>" alt="pmbitenas" style="width: 200px;"></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>">Home</a></li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link js-scroll-trigger dropdown-toggle">Informasi</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= base_url('user/program_studi'); ?>" class="dropdown-item">Program Studi</a></li>
                            <li><a href="<?= base_url('user/biaya_studi'); ?>" class="dropdown-item">Biaya Studi</a></li>
                            <li><a href="#" class="dropdown-item">Petunjuk Pendaftaran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link js-scroll-trigger dropdown-toggle">Jalur Pendaftaran</a>
                        <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                            <li><a href="<?= base_url('user/jalur_pmdk'); ?>" class="dropdown-item">Penelusuran Minat dan Bakat</a></li>
                            <li><a href="<?= base_url('user/jalur_usm'); ?>" class="dropdown-item">Ujian Saringan Mandiri</a></li>
                            <li><a href="<?= base_url('user/jalur_odt'); ?>" class="dropdown-item">One Day Test</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://api.whatsapp.com/send?phone=628892724253" target="_blank">Daftar Via Whatsapp</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>#berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw" aria-hidden="true" style="color: black;"></i></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Login</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>