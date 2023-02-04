<div id="page-content">
    <div>
        <div class="bg-light p-3 mb-3">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 comp-grid">
                        <h4>Pinjaman</h4>
                    </div>
                    <div class="col-sm-3 ">
                        <button class="btn btn btn-primary my-1" id="btn_tambah">
                            <i class="fa fa-plus"></i>
                            Tambah Data
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="page-header">
                    <h4>Data Pinjaman</h4>
                </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <table class="table table-hover" id="list">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th><i class="fa fa-book "></i>Nama Nasabah</th>
                                    <th><i class="fa fa-bank "></i>Jumlah Pinjaman</th>
                                    <th><i class="fa fa-home "></i>Tanggal Pinjaman</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="modal_edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="modal-header" class="modal-header">
                <h2 class="modal-title" id="modal_edit_title"></h2>
            </div>
            <div class="modal-body">
                <div class="row" style="margin-top:10px;">
                    <div class="col-lg-12 text-center">
                        <h2>Data Pinjaman</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12 comp-grid">
                        <div class="bg-light p-3 animated fadeIn page-content">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nama_nasabah">Nama Nasabah <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <select required="" id="nama_nasabah" name="nama_nasabah" placeholder="Select a value ..." class="custom-select">
                                                    <option value="">Select a value ...</option>
                                                    <?php foreach ($nasabah as $nama) { ?>
                                                        <option value="<?= $nama->nama_nasabah ?>"><?= $nama->nama_nasabah ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="jumlah_pinjaman">Jumlah Pinjaman <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="jumlah_pinjaman" value="" type="text" placeholder="Enter Jumlah Pinjaman" required="" name="jumlah_pinjaman" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tanggal_pinjaman">Tanggal Pinjaman <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="tanggal_pinjaman" value="" type="date" name="tanggal_pinjaman" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <div class="form-ajax-status"></div>
                                <button class="btn btn-primary" type="button" id="btn_save_tambah">
                                    Submit
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="close_modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Tambah Data -->
<?php include APPPATH . 'views/template/script/script-pnj.php' ?>