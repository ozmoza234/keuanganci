<div id="page-content">
    <div>
        <div class="bg-light p-3 mb-3">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 comp-grid">
                        <h4>Pelunasan</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="page-header">
                    <h4>Data Cicilan</h4>
                </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <table class="table table-hover" id="list">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th><i class="fa fa-book "></i>Nama Nasabah</th>
                                    <th><i class="fa fa-bank "></i>Jumlah Pinjaman</th>
                                    <th><i class="fa fa-bank "></i>Tanggal Pinjaman</th>
                                    <th>Action</th>
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

<!-- Modal Edit -->
<div class="modal fade" id="modal_edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="modal-header" class="modal-header">
                <h2 class="modal-title" id="modal_edit_title"></h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3">
                        <label for="jumlah">Jumlah Pinjaman: </label>
                        <input class="form-control" type="text" name="jumlah" id="jumlah" readonly>
                    </div>
                    <div class="col-lg-3"><label for="cicilan">Total Cicilan: </label>
                        <input class="form-control" type="text" name="cicilan" id="cicilan" readonly>
                    </div>
                    <input type="hidden" id="id_pinjaman">
                    <input type="hidden" id="nama_nasabah">
                    <input type="hidden" id="jumlah_pinjaman">
                </div>
                <div class="row" style="margin-top:10px;">
                    <div class="col-lg-12 text-center">
                        <h2>Masukan Cicilan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="overflow:auto;">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Nominal Cicilan (Rp.)</th>
                                    <th class="text-center">Tanggal Cicilan (Rp.)</th>
                                    <th class="text-center">Save</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" placeholder="e.g. 100.000" id="nominalCicilan">
                                    </td>
                                    <td>
                                        <input type="date" id="tanggalCicilan" class="form-control">
                                    </td>
                                    <td class="text-center">
                                        <button type="button" id="btn-details" class="btn btn-primary">
                                            <i class="fa fa-floppy-o "></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="margin-top:10px;">
                    <div class="col-lg-12 text-center">
                        <h2>Daftar Cicilan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="overflow:auto;">
                        <table class="table" id="load_details">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Tanggal Cicilan</th>
                                    <th class="text-center">Nominal Cicilan</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="close_modal" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Edit -->
<?php include APPPATH . 'views/template/script/script-pln.php' ?>