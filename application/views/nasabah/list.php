<div id="page-content">
    <div>
        <div class="bg-light p-3 mb-3">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 comp-grid">
                        <h4>Nasabah</h4>
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
                    <h4>Data Nasabah</h4>
                </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <table class="table table-hover" id="list">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th><i class="fa fa-book "></i>Nama Nasabah</th>
                                    <th><i class="fa fa-bank "></i>Pekerjaan Nasabah</th>
                                    <th><i class="fa fa-home "></i>Alamat Nasabah</th>
                                    <th>Telepon</th>
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
                        <h2>Data Nasabah</h2>
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
                                                <input id="nama_nasabah" value="" type="text" placeholder="Enter Nama Nasabah" required name="nama_nasabah" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="pekerjaan_nasabah">Pekerjaan Nasabah <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="pekerjaan_nasabah" value="" type="text" placeholder="Enter Pekerjaan Nasabah" required name="pekerjaan_nasabah" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="alamat_nasabah">Alamat Nasabah <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="alamat_nasabah" value="" type="text" placeholder="Enter Alamat Nasabah" required name="alamat_nasabah" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="telepon">Telepon <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="telepon_nasabah" value="" type="text" placeholder="Enter Telepon" required name="telepon" class="form-control ">
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
<?php include APPPATH . 'views/template/script/script-nsb.php' ?>