<?php
//session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>NOLINE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">





    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/datatable/css/responsive.dataTables.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">NOLINE</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../login/logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-6 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span><h2>NO LINE</h2>
                               
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn btn-primary btn-lg btn-block" height="100%" > BUAT KARYA</a>
                        </li><li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard_admin.php">
                                <span data-feather="file"></span>
                                <img src="../asset/img/home.png" alt="">KARYAKU
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li
                        <li class="nav-item">
                            <a class="nav-link" href="frm_laporan.php">
                                <span data-feather="shopping-cart"></span><img src="../asset/img/building.png" alt="">FORMULIR LAPORAN
                                
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li

                        <li class="nav-item">
                            <a class="nav-link" href="komentar.php">
                                <span data-feather="users"></span><img src="../asset/img/report.png" alt=""></i>
                                KOMENTAR
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li

                        <li class="nav-item">
                            <a class="nav-link" href="data_seleksi.php">
                                <span data-feather="layers"></span>
                                <img src="../asset/img/label.png" alt="" class="img">
                               PENARIKAN
                         
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li

                        <li class="nav-item">
                            <a class="nav-link" href="data_pendaftar.php">
                                <span data-feather="file-text"></span><img src="../asset/img/customers.png" alt="">
                                KONTRAK
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li

                        <li class="nav-item">
                            <a class="nav-link" href="data_jns_ekskul.php">
                                <span data-feather="file-text"></span><img src="../asset/img/box.png" alt="">
                                Q & A
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                            </a>
                        </li
                    </ul>
                     <div class="content-image" ><img src="https://cn.e.pic.mangatoon.mobi/47643362be656a7915d.jpg" alt="The supreme spirit" width="100%" height="100%" style="object-fit:cover"/>
                    </div>
                </div>
            </nav>