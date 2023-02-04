<script>
    $(document).ready(function() {
        //tampilan list awal
        let list;

        list = $('#list').DataTable({
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

        //proses tambah pinjaman
        $('#btn_tambah').on('click', function() {
            $('#nama_nasabah').attr('disabled', false);
            $('#jumlah_pinjaman').attr('readonly', false);
            $('#tanggal_pinjaman').attr('readonly', false);

            $('#nama_nasabah').val("");
            $('#jumlah_pinjaman').val("");
            $('#tanggal_pinjaman').val("");

            $('#modal_edit_title').text('Tambah Pinjaman');
            $('#modal_edit').prependTo("body").modal("show");

            //simpan pinjaman baru
            $('#btn_save_tambah').on('click', function() {
                let nama_nasabah = $('#nama_nasabah').val();
                let jumlah_pinjaman = $('#jumlah_pinjaman').val();
                let tanggal_pinjaman = $('#tanggal_pinjaman').val();

                $.ajax({
                    url: '<?= base_url('Pinjaman/save') ?>',
                    data: {
                        nama_nasabah: nama_nasabah,
                        jumlah_pinjaman: jumlah_pinjaman,
                        tanggal_pinjaman: tanggal_pinjaman,
                    },
                    type: "POST",
                    dataType: 'JSON',
                    success: function(data) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Data Has Been Saved!',
                            icon: 'success'
                        }).then(function() {
                            window.location.reload();
                        });
                    }
                });
            });
        });


        //lihat data pinjaman
        $('#list tbody').on('click', '#btn_view', function() {
            $('#btn_save_tambah').hide();

            let nama_nasabah = list.row($(this).parents('tr')).data().nama_nasabah;
            let jumlah_pinjaman = list.row($(this).parents('tr')).data().jumlah_pinjaman;
            let tanggal_pinjaman = list.row($(this).parents('tr')).data().tanggal_pinjaman;

            $('#nama_nasabah').val(nama_nasabah);
            $('#jumlah_pinjaman').val(jumlah_pinjaman);
            $('#tanggal_pinjaman').val(tanggal_pinjaman);

            $('#nama_nasabah').attr('disabled', true);
            $('#jumlah_pinjaman').attr('readonly', true);
            $('#tanggal_pinjaman').attr('readonly', true);

            $('#modal_edit_title').text('View Pinjaman');
            $('#modal_edit').prependTo("body").modal("show");
        });


        //edit data nasabah
        $('#list tbody').on('click', '#btn_edit', function() {
            $('#btn_save_tambah').show();

            let id_pinjaman = list.row($(this).parents('tr')).data().id_pinjaman;
            let nama_nasabah = list.row($(this).parents('tr')).data().nama_nasabah;
            let jumlah_pinjaman = list.row($(this).parents('tr')).data().jumlah_pinjaman;
            let tanggal_pinjaman = list.row($(this).parents('tr')).data().tanggal_pinjaman;

            $('#nama_nasabah').val(nama_nasabah);
            $('#jumlah_pinjaman').val(jumlah_pinjaman);
            $('#tanggal_pinjaman').val(tanggal_pinjaman);


            $('#nama_nasabah').attr('disabled', false);
            $('#jumlah_pinjaman').attr('readonly', false);
            $('#tanggal_pinjaman').attr('readonly', false);

            $('#modal_edit_title').text('Edit Pinjaman');
            $('#modal_edit').prependTo("body").modal("show");

            //simpan pinjaman updatee
            $('#btn_save_tambah').on('click', function() {
                let nama_nasabah = $('#nama_nasabah').val();
                let jumlah_pinjaman = $('#jumlah_pinjaman').val();
                let tanggal_pinjaman = $('#tanggal_pinjaman').val();

                $.ajax({
                    url: '<?= base_url('Pinjaman/update') ?>',
                    data: {
                        id_pinjaman: id_pinjaman,
                        nama_nasabah: nama_nasabah,
                        jumlah_pinjaman: jumlah_pinjaman,
                        tanggal_pinjaman: tanggal_pinjaman,
                    },
                    type: "POST",
                    dataType: 'JSON',
                    success: function(data) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Data Has Been Saved!',
                            icon: 'success'
                        }).then(function() {
                            window.location.reload();
                        });
                    }
                });
            });
        });

        //Hapus nasabah
        $('#list tbody').on('click', '#btn_del', function() {
            let id_pinjaman = list.row($(this).parents('tr')).data().id_pinjaman;
            Swal.fire({
                    icon: 'warning',
                    title: 'Warning!',
                    html: '<p>' + 'Yakin hapus?' + '<br>' + "Aksi ini tidak bisa dibatalkan" + '</p>',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Tidak',
                })
                .then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: '<?= base_url('Pinjaman/delete_pinjaman') ?>',
                            type: 'POST',
                            data: {
                                id_pinjaman: id_pinjaman
                            },
                            success: function(data) {
                                Swal.fire('Success!', 'Data Dihapus', 'success').then(function() {
                                    window.location.reload()
                                })
                            }
                        })
                    }
                })
        });
    })
</script>