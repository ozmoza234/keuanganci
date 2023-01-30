<!DOCTYPE html>
<html>

<head>
    <title></title>
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
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"> </script>
</head>

<body>
    <div id="page-wrapper">
        <!-- Show progress bar when ajax upload-->
        <div class="progress ajax-progress-bar">
            <div class="progress-bar"></div>
        </div>
        <div id="topbar" class="navbar navbar-expand-md fixed-top navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="#" />
                </a>

                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                </button>
                <button type="button" id="sidebarCollapse" class="btn btn-white">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">

                                <img class="img-fluid" style="height:30px;" src="#" />

                                <span class="avatar-icon"><i class="fa fa-user"></i></span>

                                <span>Hi !</span>
                            </a>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Account</a>
                                <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a>
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
                <li class="menu-profile text-center nav-item">
                    <a class="avatar" href="#">

                        <img class="img-fluid" src="#" />

                        <span class="avatar-icon"><i class="fa fa-user"></i></span>

                    </a>
                    <h5 class="user-name">Hi

                    </h5>
                    <div class="dropdown menu-dropdown">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Account</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-sign-out"></i> Logout</a>
                        </ul>
                    </div>
                </li>
            </ul>

        </nav>
        <div class="overlay"></div>


        <div id="main-content">
            <!-- Page Main Content Start -->
            <div id="page-content">
                <div>
                    <div class="bg-light p-3 mb-3">
                        <div class="container">
                            <div class="row ">
                                <div class="col-md-12 comp-grid">
                                    <h4>Sistem Keuangan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="container">
                            <div class="page-header">
                                <h4>Data Keuangan</h4>
                            </div>
                            <div class="row ">
                                <div class="col-md-3 col-sm-4 comp-grid">

                                    <a class="animated shake record-count alert alert-success" href="#">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa fa-user "></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Nasabah</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value">10<strong></strong></h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-4 comp-grid">

                                    <a class="animated shake record-count alert alert-success" href="#">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa fa-money "></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Pinjaman</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong>14</strong></h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-4 comp-grid">

                                    <a class="animated shake record-count alert alert-success" href="#">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa fa-book "></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Tabungan</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong>5</strong></h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-4 comp-grid">

                                    <a class="animated shake record-count alert alert-success" href="#">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa fa-money "></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Pelunasan</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong>6</strong></h4>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-4 comp-grid">
                                    <a class="animated shake record-count alert alert-success" href="#">
                                        <div class="row">
                                            <div class="col-2">
                                                <i class="fa fa-users "></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="flex-column justify-content align-center">
                                                    <div class="title">Pengguna</div>
                                                    <small class=""></small>
                                                </div>
                                            </div>
                                            <h4 class="value"><strong>7</strong></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Page Main Content [End] -->
            <!-- Page Footer Start -->
            <footer class="footer border-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="copyright">All Rights Reserved | &copy; - <?php echo date('Y') ?></div>
                        </div>
                        <div class="col">
                            <div class="footer-links text-right">
                                <a href="#">About us</a> |
                                <a href="#">Help and FAQ</a> |
                                <a href="#">Contact us</a> |
                                <a href="#">Privacy Policy</a> |
                                <a href="#">Terms and Conditions</a>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>
            <!-- Page Footer Ends -->
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"> </script>
    <script src="<?= base_url() ?>assets/js/popper.js"> </script>
    <script src="<?= base_url() ?>assets/js/bootstrap-4.3.1.min.js"> </script>
    <script src="<?= base_url() ?>assets/js/dropzone.min.js"> </script>
    <script src="<?= base_url() ?>assets/js/plugins.js"> </script>
    <script src="<?= base_url() ?>assets/js/plugins-init.js"> </script>
    <script src="<?= base_url() ?>assets/js/page-scripts.js"> </script>

</body>

</html>