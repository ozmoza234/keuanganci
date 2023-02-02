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
                        <a class="animated shake record-count alert alert-success" href="<?= base_url('Nasabah') ?>">
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
                                <h4 class="value"><?= $tot_nsb[0]->tot ?><strong></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">

                        <a class="animated shake record-count alert alert-success" href="<?= base_url('Pinjaman') ?>">
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
                                <h4 class="value"><strong><?= $tot_pinj[0]->tot ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">

                        <a class="animated shake record-count alert alert-success" href="<?= base_url('Tabungan') ?>">
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
                                <h4 class="value"><strong><?= $tot_tab[0]->tot ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">

                        <a class="animated shake record-count alert alert-success" href="<?= base_url('Pelunasan') ?>">
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
                                <h4 class="value"><strong><?= $tot_lns[0]->tot ?></strong></h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-4 comp-grid">
                        <a class="animated shake record-count alert alert-success" href="<?= base_url('Pengguna') ?>">
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
                                <h4 class="value"><strong><?= $tot_usr[0]->tot ?></strong></h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>