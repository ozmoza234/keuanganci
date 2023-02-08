<!DOCTYPE html>
<html>

<head>
    <title>CV. Cipta Usaha Mandiri</title>
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/logo/vav-removebg-preview.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/logo/logo_saja_GI.png">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="#" />
    <link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/blueimp-gallery.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/bootstrap-default.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/bootstrap-theme-herbie.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/custom-style.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/dropzone.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src="<?= base_url() ?>assets/js/jquery.min.js"> </script>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/datatables.min.js"></script>

    <script src="<?= base_url() ?>assets/js/popper.js"> </script>
    <script src="<?= base_url() ?>assets/js/bootstrap-4.3.1.min.js"> </script>
    <script src="<?= base_url() ?>assets/js/dropzone.min.js"> </script>
    <script src="<?= base_url() ?>assets/js/plugins.js"> </script>
    <script src="<?= base_url() ?>assets/js/plugins-init.js"> </script>
    <script src="<?= base_url() ?>assets/js/page-scripts.js"> </script>

    <script src="<?php echo base_url() ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/vfs_fonts.js"></script>

    <script src="<?= base_url() ?>assets/js/sweetalert2.all.min.js"></script>

</head>

<body>
    <div id="page-wrapper">
        <!-- Show progress bar when ajax upload-->
        <div class="progress ajax-progress-bar">
            <div class="progress-bar"></div>
        </div>
        <div id="topbar" class="navbar navbar-expand-md fixed-top navbar-light bg-white">
            <div class="container-fluid">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                </button>
                <button type="button" id="sidebarCollapse" class="btn btn-white">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                <!-- <img class="img-fluid" style="height:30px;" src="#" /> -->
                                <span class="avatar-icon"><i class="fa fa-user"></i></span>
                                <span>Hi !</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Account</a>
                                <a class="dropdown-item" href="<?= base_url() ?>"><i class="fa fa-sign-out"></i> Logout</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <nav id="sidebar" class="navbar-light bg-white">
            <button id="btn-dismiss-sidebar" class="btn btn-sm btn-light">
                <i class="fa fa-times-circle"></i>
            </button>
            <ul class="nav navbar-nav w-100 flex-column align-self-start">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Dashboard') ?>">
                        <i class="fa fa-home "></i> <span class="menu-label">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?= base_url('Nasabah') ?>">
                        <i class="fa fa-male"></i> <span class="menu-label">Nasabah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Pelunasan') ?>">
                        <i class="fa fa-money"></i> <span class="menu-label">Pelunasan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Pinjaman') ?>">
                        <i class="fa fa-money"></i> <span class="menu-label">Pinjaman</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Tabungan') ?>">
                        <i class="fa fa-book"></i> <span class="menu-label">Tabungan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('Pengguna') ?>">
                        <i class="fa fa-male "></i> <span class="menu-label">Pengguna</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="overlay"></div>
        <div id="main-content">
            <!-- Page Main Content Start -->