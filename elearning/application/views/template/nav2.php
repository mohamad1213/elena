<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets2/') ?>img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="colorlib" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>Eclipse Education</title>

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/linearicons.css" />
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/owl.carousel.css" />
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/hexagons.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('assets2/') ?>css/main.css" />

</head>

<body>
    <!-- ================ Start Header Area ================= -->
    <header class="default-header">
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('welcome') ?>">
                    <img src="<?= base_url('assets2/') ?>img/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="lnr lnr-menu"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a href="<?= base_url('welcome') ?>">Home</a></li>
                        <li><a href="<?= base_url('welcome/tentang') ?>">About</a></li>
                        <li><a href="<?= base_url('welcome/pelajaran') ?>">Courses</a></li>
                        <!-- Dropdown -->
                        <li class=" dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                Login
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" href="#">Login Mahasiswa</a>
                                <a class="dropdown-item" href="<?= base_url('welcome/guru') ?>">Login Dosen</a>
                                <a class="dropdown-item" href="<?= base_url('welcome/admin') ?>">Login Admin</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                                Blog
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?= base_url('assets2/') ?>blog-home.html">Blog Home</a>
                                <a class="dropdown-item" href="<?= base_url('assets2/') ?>blog-single.html">Blog Details</a>
                            </div>
                        </li>
                        <li><a href="<?= base_url('welcome/kontak') ?>">Contacts</a></li>

                        <li>
                            <button class="search">
                                <span class="lnr lnr-magnifier" id="search"></span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- ================ End Header Area ================= -->