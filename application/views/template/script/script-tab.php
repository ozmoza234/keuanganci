<script>
    $(document).ready(function() {
        // tampilan list awal
        let list;

        list = $('#list').DataTable({
            autoWidth: false,
            ajax: {
                url: '<?= base_url('Tabungan/show') ?>',
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
                    data: 'tabungan_masuk'
                },
                {
                    targets: 3,
                    data: 'tanggal_masuk'
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

        //proses tambah tabungan
        $('#btn_tambah').on('click', function() {
            $('#btn_save_tambah').show();
            $('#nama_nasabah').attr('disabled', false);
            $('#tabungan_masuk').attr('readonly', false);
            $('#tanggal_masuk').attr('readonly', false);

            $('#nama_nasabah').val("");
            $('#tabungan_masuk').val("");
            $('#tanggal_masuk').val("");

            $('#modal_edit_title').text('Tambah Tabungan');
            $('#modal_edit').prependTo("body").modal("show");

            //simpan tabungan baru
            $('#btn_save_tambah').on('click', function() {
                let nama_nasabah = $('#nama_nasabah').val();
                let tabungan_masuk = $('#tabungan_masuk').val();
                let tanggal_masuk = $('#tanggal_masuk').val();

                $.ajax({
                    url: '<?= base_url('Tabungan/save') ?>',
                    data: {
                        nama_nasabah: nama_nasabah,
                        tabungan_masuk: tabungan_masuk,
                        tanggal_masuk: tanggal_masuk,
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


        //lihat data tabungan
        $('#list tbody').on('click', '#btn_view', function() {
            $('#btn_save_tambah').hide();

            let nama_nasabah = list.row($(this).parents('tr')).data().nama_nasabah;
            let tabungan_masuk = list.row($(this).parents('tr')).data().tabungan_masuk;
            let tanggal_masuk = list.row($(this).parents('tr')).data().tanggal_masuk;

            $('#nama_nasabah').val(nama_nasabah);
            $('#tabungan_masuk').val(tabungan_masuk);
            $('#tanggal_masuk').val(tanggal_masuk);

            $('#nama_nasabah').attr('disabled', true);
            $('#tabungan_masuk').attr('readonly', true);
            $('#tanggal_masuk').attr('readonly', true);

            $('#modal_edit_title').text('View Tabungan');
            $('#modal_edit').prependTo("body").modal("show");
        });


        //edit data nasabah
        $('#list tbody').on('click', '#btn_edit', function() {
            $('#btn_save_tambah').show();

            let id_tabungn = list.row($(this).parents('tr')).data().id_tabungn;
            let nama_nasabah = list.row($(this).parents('tr')).data().nama_nasabah;
            let tabungan_masuk = list.row($(this).parents('tr')).data().tabungan_masuk;
            let tanggal_masuk = list.row($(this).parents('tr')).data().tanggal_masuk;

            $('#nama_nasabah').val(nama_nasabah);
            $('#tabungan_masuk').val(tabungan_masuk);
            $('#tanggal_masuk').val(tanggal_masuk);


            $('#nama_nasabah').attr('disabled', false);
            $('#tabungan_masuk').attr('readonly', false);
            $('#tanggal_masuk').attr('readonly', false);

            $('#modal_edit_title').text('Edit Tabungan');
            $('#modal_edit').prependTo("body").modal("show");

            //simpan tabungan updatee
            $('#btn_save_tambah').on('click', function() {
                let nama_nasabah = $('#nama_nasabah').val();
                let tabungan_masuk = $('#tabungan_masuk').val();
                let tanggal_masuk = $('#tanggal_masuk').val();

                $.ajax({
                    url: '<?= base_url('Tabungan/update') ?>',
                    data: {
                        id_tabungn: id_tabungn,
                        nama_nasabah: nama_nasabah,
                        tabungan_masuk: tabungan_masuk,
                        tanggal_masuk: tanggal_masuk,
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
            let id_tabungn = list.row($(this).parents('tr')).data().id_tabungn;
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
                            url: '<?= base_url('Tabungan/delete_tabungan') ?>',
                            type: 'POST',
                            data: {
                                id_tabungn: id_tabungn
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