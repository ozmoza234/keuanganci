<script>
    $(document).ready(function() {
        $('#list').DataTable({
            ajax: {
                url: '<?= base_url('Nasabah/show') ?>',
                dataType: 'json'
            },
            columnDefs: [{
                    targets: 0,
                    data: null,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    targets: 1,
                    data: 'nama_nasabah'
                },
                {
                    targets: 2,
                    data: 'pekerjaan_nasabah'
                },
                {
                    targets: 3,
                    data: 'alamat_nasabah'
                },
                {
                    targets: 4,
                    data: 'telepon'
                },
                {
                    targets: 5,
                    data: null,
                    render: function(data, type, row) {
                        return `<a class="btn btn-sm btn-success has-tooltip" id='btn_view' title="" href='#'"><i class="fa fa-eye"></i> View</a><a class="btn btn-sm btn-info" id="btn_edit" href='#'><i class="fa fa-edit"></i> Edit</a><a class="btn btn-sm btn-danger has-tooltip" title="" href='#' id='btn_del'"><i class="fa fa-times"></i> Delete</a>`
                    }
                }
            ]
        });
    })
</script>