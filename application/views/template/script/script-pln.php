<script>
    $(document).ready(function() {

        //tampilin data
        let list;
        list = $('#list').DataTable({
            paging: false,
            autoWidth: false,
            searching: false,
            info: false,
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
                    data: 'nama_nasabah'
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
                        return `<button class="btn btn-sm btn-success has-tooltip" id='btn_view'><i class="fa fa-eye"></i> View</button>`
                    }
                }
            ]
        });

        //input cicilan
        $('#list tbody').on('click', '#btn_view', function() {
            $('#load_details').DataTable().destroy();
            let nama = list.row($(this).parents('tr')).data().nama_nasabah;
            let tanggal = list.row($(this).parents('tr')).data().tanggal_pinjaman;
            let jumlah = list.row($(this).parents('tr')).data().jumlah_pinjaman;
            let id_pinjaman = list.row($(this).parents('tr')).data().id_pinjaman;

            $('#jumlah').val(jumlah);
            $('#id_pinjaman').val(id_pinjaman);
            $('#nama_nasabah').val(nama);
            $('#jumlah_pinjaman').val(jumlah);

            //tampil daftar cicilan terupdate
            load_details = $('#load_details').DataTable({
                paging: false,
                autoWidth: false,
                searching: false,
                info: false,
                dom: 'Bfrtip',
                buttons: [{
                    className: 'btn btn-success',
                    extend: 'excelHtml5',
                    text: '<span class="fa fa-file-excel-o"></span>',
                    filename: 'Cicilan_' + nama + '_Pinjaman_' + tanggal,
                    customize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('c[r=A1] t', sheet).text('Daftar Cicilan');
                    },
                }],
                ajax: {
                    url: '<?= base_url('Pelunasan/load_cicilan') ?>',
                    data: {
                        id_pinjaman: id_pinjaman
                    },
                    type: 'GET',
                    dataType: 'json'
                },
                columnDefs: [{
                        targets: 0,
                        data: null,
                        className: 'text-center',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        targets: 1,
                        className: 'text-center',
                        data: 'tanggal_pelunasan'
                    },
                    {
                        targets: 2,
                        className: 'text-center',
                        data: 'cicilan'
                    },
                    {
                        targets: 3,
                        data: null,
                        className: 'text-center',
                        render: function(data, type, row) {
                            return `<a class="btn btn-sm btn-danger has-tooltip" title="" href='#' id='btn_del'"><i class="fa fa-times"></i></a>`
                        }
                    },
                ]
            });

            //untuk delete cicilan
            $('#load_details tbody').on('click', '#btn_del', function() {
                let id_pelunasan = load_details.row($(this).parents('tr')).data().id_pelunasan;
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
                                url: '<?= base_url('Pelunasan/delete_cicilan') ?>',
                                type: 'POST',
                                data: {
                                    id_pelunasan: id_pelunasan
                                },
                                success: function(data) {
                                    Swal.fire('Success!', 'Data Dihapus', 'success').then(function() {
                                        window.location.reload()
                                    })
                                }
                            })
                        }
                    })
            })

            //tampil total cicilan
            let ajaxTotalCicilan = $.ajax({
                url: '<?= base_url('Pelunasan/load_total_cicilan') ?>',
                data: {
                    id_pinjaman: id_pinjaman
                },
                type: 'GET',
                dataType: 'json'
            });

            $.when(ajaxTotalCicilan).done(function(ajaxTotalCicilanDone) {
                let total = ajaxTotalCicilanDone.data[0].total_cicilan
                $('#cicilan').val(total);
            })

            $('#modal_edit_title').text('Cicilan Nasabah ' + nama + ' Pinjaman ' + tanggal);
            $('#modal_edit').prependTo("body").modal("show");
        });

        //save cicilan
        $('#btn-details').on('click', function() {
            let id_pinjaman = $('#id_pinjaman').val();
            let nama_nasabah = $('#nama_nasabah').val();
            let jumlah_pinjaman = $('#jumlah_pinjaman').val();
            let nominalCicilan = $('#nominalCicilan').val();
            let tanggalCicilan = $('#tanggalCicilan').val();

            if (nominalCicilan == "") {
                Swal.fire(
                    'Warning!',
                    "Silahkan masukan nominal cicilan",
                    "warning"
                )
            } else if (tanggalCicilan == "") {
                Swal.fire(
                    'Warning!',
                    "Silahkan masukan tanggal cicilan",
                    "warning"
                )
            } else {
                $.ajax({
                    url: '<?= base_url('Pelunasan/save') ?>',
                    data: {
                        id_pinjaman: id_pinjaman,
                        nama_nasabah: nama_nasabah,
                        jumlah_pinjaman: jumlah_pinjaman,
                        nominalCicilan: nominalCicilan,
                        tanggalCicilan: tanggalCicilan
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
                        })
                    }
                });
            }
        });

        //tampil daftar cicilan
        let load_cicilan;
        load_cicilan = $('#load_details').DataTable({
            paging: false,
            autoWidth: false,
            searching: false,
            info: false
        });

        //jika button close di klik value dari total cicilan reset ke 0
        $('#close_modal').on('click', function() {
            $('#cicilan').val(0);
        });

    })
</script>