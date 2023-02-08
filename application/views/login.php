<title>CV. Cipta Usaha Mandiri</title>
<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/logo/vav-removebg-preview.png">
<link href="<?= base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/blueimp-gallery.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/bootstrap-default.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/bootstrap-theme-herbie.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/custom-style.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url() ?>assets/css/dropzone.min.css" rel="stylesheet" type="text/css" />
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"> </script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <div class="my-4 p-3 bg-light">
                <div>
                    <h4><i class="fa fa-key"></i> User Login</h4>
                    <hr />
                    <form name="loginForm" action="#" class="needs-validation form page-form" method="post">
                        <div class="input-group form-group">
                            <input placeholder="Username Or Email" name="username" required="required" class="form-control" type="text" />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="form-control-feedback fa fa-user"></i></span>
                            </div>
                        </div>

                        <div class="input-group form-group">

                            <input placeholder="Password" required="required" name="password" class="form-control " type="password" />
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="form-control-feedback fa fa-key"></i></span>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a href="<?= base_url('Dashboard') ?>">
                                <button class="btn btn-primary btn-block btn-md" type="button" id="btn-login">
                                    <i class="load-indicator">
                                        <clip-loader :loading="loading" color="#fff" size="20px"></clip-loader>
                                    </i>
                                    Login <i class="fa fa-key"></i>
                                </button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"> </script>
<script src="<?= base_url() ?>assets/js/popper.js"> </script>
<script src="<?= base_url() ?>assets/js/bootstrap-4.3.1.min.js"> </script>
<script src="<?= base_url() ?>assets/js/dropzone.min.js"> </script>
<script src="<?= base_url() ?>assets/js/plugins.js"> </script>
<script src="<?= base_url() ?>assets/js/plugins-init.js"> </script>
<script src="<?= base_url() ?>assets/js/page-scripts.js"> </script>
<script src="<?= base_url() ?>assets/js/flatpickr.min.js"> </script>
<?php include APPPATH . 'views/template/script/script-lg.php' ?>