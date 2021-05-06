<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?= base_url('frontend2/') ?>img/favicon.png" type="image/png">
    <title>Learnify - Belajar Dimana Saja & Kapan Saja !</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>vendors/popup/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('frontend2/') ?>css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('frontend2/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('frontend2/') ?>js/popper.js"></script>
    <script src="<?= base_url('frontend2/') ?>js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="<?= base_url('welcome') ?>"><img src="<?= base_url('frontend2/') ?>img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Hai, <?php
                                                                                                        $data['user'] = $this->db->get_where('siswa', ['email' =>
                                                                                                        $this->session->userdata('email')])->row_array();
                                                                                                        echo $data['user']['nama'];
                                                                                                        ?></a>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="<?= base_url('user') ?>">Beranda</a>
                            </li>
                            <li class=" nav-item "><a class=" nav-link text-danger" href="<?= base_url('welcome/logout') ?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->