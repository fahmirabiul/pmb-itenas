<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard - SB Admin</title>

    <link href="<?= base_url('assets/sba/dist/css/styles.css'); ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/css/css_admin.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/icon/css/all.min.css'); ?>" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo_itenas.png'); ?>" style="width: 50px;"> PMB Itenas</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form> -->
        <!-- Navbar-->
        <ul class="navbar-nav d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $calon['nama']; ?><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <!-- <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div> -->
                    <a class="dropdown-item" href="<?= base_url('auth/logoutCalonMahasiswa'); ?>">Log Out</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('calon_mhs/index'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Profil
                        </a>
                        <a class="nav-link" href="<?= base_url('calon_mhs/ujian_online'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                            Ujian Online
                        </a>
                        <a class="nav-link" href="<?= base_url('calon_mhs/daftar_ulang'); ?>">
                            <div class="sb-nav-link-icon"><i class="far fa-handshake"></i></div>
                            Pendaftaran Ulang
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small d-flex justify-content-center">Institut Teknologi Nasional</div>
                </div>
            </nav>
        </div>

        <!-- <a class="nav-link" href="<?= base_url('calon_mhs/index'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Profil
                        </a>
                        <a class="nav-link" href="<?= base_url('calon_mhs/ujian_online'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                            Ujian Online
                        </a>
                        <a class="nav-link" href="<?= base_url('calon_mhs/daftar_ulang'); ?>">
                            <div class="sb-nav-link-icon"><i class="far fa-handshake"></i></div>
                            Pendaftaran Ulang
                        </a> -->