<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminLTE 3 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- My Style -->
    <link href="<?= base_url('assets/sba/dist/css/styles.css'); ?>" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href=<?= base_url('assets/adlt/plugins/fontawesome-free/css/all.min.css'); ?>>
    <!-- Theme style -->
    <link rel="stylesheet" href=<?= base_url('assets/adlt/dist/css/adminlte.min.css'); ?>>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar fixed-top navbar-expand-md navbar-lightblue" style="padding-bottom: 11px;">
            <div class="container">
                <a href="<?= base_url(''); ?>" class="navbar-brand">
                    <img src="<?= base_url('assets/img/logo_pmb.png'); ?>" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8; background-color: white;">
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="<?= base_url(); ?>" class="nav-link text-light">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/program_studi'); ?>" class="nav-link text-light">Program Studi</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link text-light dropdown-toggle">Jalur Pendaftaran</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?= base_url('user/jalur_pmdk'); ?>" class="dropdown-item">Penelusuran Minat dan Bakat</a></li>
                                <li><a href="<?= base_url('user/jalur_usm'); ?>" class="dropdown-item">Ujian Saringan Mandiri</a></li>
                                <li><a href="<?= base_url('user/jalur_odt'); ?>" class="dropdown-item">One Day Test</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/biaya_studi'); ?>" class="nav-link text-light">Biaya Studi</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/kontak'); ?>" class="nav-link text-light">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('user/landing_page'); ?>" class="nav-link text-light">Landing Page</a>
                        </li>

                    </ul>

                </div>
            </div>

            <ul class="navbar-nav d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link text-light dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('auth/login'); ?>">Login</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">