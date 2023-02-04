<script>
    $(document).ready(function() {
        //tampilan list awal
        let list;

        list = $('#list').DataTable({
            autoWidth: false,
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
                        return `<a class="btn btn-sm btn-success has-tooltip" id='btn_view' title="" href='#'"><i class="fa fa-eye"></i> View</a><a class="btn btn-sm btn-info" id="btn_edit" href='#'><i class="fa fa-edit"></i> Edit</a><a class="btn btn-sm btn-danger has-tooltip" title="" id='btn_del'"><i class="fa fa-times"></i> Delete</a>`
                    }
                }
            ]
        });

        //proses tambah nasabah
        $('#btn_tambah').on('click', function() {
            $('#nama_nasabah').attr('readonly', false);
            $('#pekerjaan_nasabah').attr('readonly', false);
            $('#alamat_nasabah').attr('readonly', false);
            $('#telepon_nasabah').attr('readonly', false);

            $('#nama_nasabah').val("");
            $('#pekerjaan_nasabah').val("");
            $('#alamat_nasabah').val("");
            $('#telepon_nasabah').val("");

            $('#modal_edit_title').text('Tambah Nasabah');
            $('#modal_edit').prependTo("body").modal("show");

            //simpan nasabah baru
            $('#btn_save_tambah').on('click', function() {
                let nama_nasabah = $('#nama_nasabah').val();
                let pekerjaan_nasabah = $('#pekerjaan_nasabah').val();
                let alamat_nasabah = $('#alamat_nasabah').val();
                let telepon_nasabah = $('#telepon_nasabah').val();

                $.ajax({
                    url: '<?= base_url('Nasabah/save') ?>',
                    data: {
                        pekerjaan_nasabah: pekerjaan_nasabah,
                        nama_nasabah: nama_nasabah,
                        alamat_nasabah: alamat_nasabah,
                        telepon_nasabah: telepon_nasabah,
                    },
                    type: "POST",
                    dataType: 'JSON',
                    success: function(data) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Data Has Been Saved!',
                            icon: 'success'
                        }).then(function() {

                            $('#nominalCicilan').val("");
                            $('#tanggalCicilan').val("");

                            window.location.reload();
                        });
                    }
                });
            });
        });


        //lihat data nasabah
        $('#list tbody').on('click', '#btn_view', function() {
            $('#btn_save_tambah').hide();

            let nama_nasabah = list.row($(this).parents('tr')).data().nama_nasabah;
            let pekerjaan_nasabah = list.row($(this).parents('tr')).data().pekerjaan_nasabah;
            let alamat_nasabah = list.row($(this).parents('tr')).data().alamat_nasabah;
            let telepon_nasabah = list.row($(this).parents('tr')).data().telepon;

            $('#nama_nasabah').val(nama_nasabah);
            $('#pekerjaan_nasabah').val(pekerjaan_nasabah);
            $('#alamat_nasabah').val(alamat_nasabah);
            $('#telepon_nasabah').val(telepon_nasabah);

            $('#nama_nasabah').attr('readonly', true);
            $('#pekerjaan_nasabah').attr('readonly', true);
            $('#alamat_nasabah').attr('readonly', true);
            $('#telepon_nasabah').attr('readonly', true);

            $('#modal_edit_title').text('View Nasabah');
            $('#modal_edit').prependTo("body").modal("show");
        });


        //edit data nasabah
        $('#list tbody').on('click', '#btn_edit', function() {
            $('#btn_save_tambah').show();

            let id_nasabah = list.row($(this).parents('tr')).data().id_nasabah;
            let nama_nasabah = list.row($(this).parents('tr')).data().nama_nasabah;
            let pekerjaan_nasabah = list.row($(this).parents('tr')).data().pekerjaan_nasabah;
            let alamat_nasabah = list.row($(this).parents('tr')).data().alamat_nasabah;
            let telepon_nasabah = list.row($(this).parents('tr')).data().telepon;

            $('#nama_nasabah').val(nama_nasabah);
            $('#pekerjaan_nasabah').val(pekerjaan_nasabah);
            $('#alamat_nasabah').val(alamat_nasabah);
            $('#telepon_nasabah').val(telepon_nasabah);

            $('#nama_nasabah').attr('readonly', false);
            $('#pekerjaan_nasabah').attr('readonly', false);
            $('#alamat_nasabah').attr('readonly', false);
            $('#telepon_nasabah').attr('readonly', false);

            $('#modal_edit_title').text('Edit Nasabah');
            $('#modal_edit').prependTo("body").modal("show");

            //simpan nasabah baru
            $('#btn_save_tambah').on('click', function() {
                let nama_nasabah = $('#nama_nasabah').val();
                let pekerjaan_nasabah = $('#pekerjaan_nasabah').val();
                let alamat_nasabah = $('#alamat_nasabah').val();
                let telepon_nasabah = $('#telepon_nasabah').val();

                $.ajax({
                    url: '<?= base_url('Nasabah/update') ?>',
                    data: {
                        id_nasabah: id_nasabah,
                        pekerjaan_nasabah: pekerjaan_nasabah,
                        nama_nasabah: nama_nasabah,
                        alamat_nasabah: alamat_nasabah,
                        telepon_nasabah: telepon_nasabah,
                    },
                    type: "POST",
                    dataType: 'JSON',
                    success: function(data) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Data Has Been Saved!',
                            icon: 'success'
                        }).then(function() {

                            $('#nominalCicilan').val("");
                            $('#tanggalCicilan').val("");

                            window.location.reload();
                        });
                    }
                });
            });
        });

        //Hapus nasabah
        $('#list tbody').on('click', '#btn_del', function() {
            let id_nasabah = list.row($(this).parents('tr')).data().id_nasabah;
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
                            url: '<?= base_url('Nasabah/delete_nasabah') ?>',
                            type: 'POST',
                            data: {
                                id_nasabah: id_nasabah
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