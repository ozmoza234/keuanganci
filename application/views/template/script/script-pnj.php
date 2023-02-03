<script>
    $(document).ready(function() {
        $('#list').DataTable({
            autoWidth: false,
            ajax: {
                url: '<?= base_url('Pinjaman/show') ?>',
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
                    data: 'nama_nasabah',
                    render: function(data, type, row) {
                        return `<a size="sm" class="btn btn-sm btn-primary page-modal" href="#"><i class="fa fa-eye"></i>${data}</a>`
                    }
                },
                {
                    targets: 2,
                    data: 'jumlah_pinjaman'
                },
                {
                    targets: 3,
                    data: 'tanggal_pinjaman'
                },
                {
                    targets: 4,
                    data: null,
                    render: function(data, type, row) {
                        return `<a class="btn btn-sm btn-success has-tooltip" id='btn_view' title="" href='#'"><i class="fa fa-eye"></i> View</a><a class="btn btn-sm btn-info" id="btn_edit" href='#'><i class="fa fa-edit"></i> Edit</a><a class="btn btn-sm btn-danger has-tooltip" title="" href='#' id='btn_del'"><i class="fa fa-times"></i> Delete</a>`
                    }
                }
            ]
        });
    })
</script>