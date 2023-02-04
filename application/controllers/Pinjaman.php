<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pinjaman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('App_m');
    }

    public function index()
    {
        $data['nasabah'] = $this->App_m->load_daftar_nasabah();
        $this->load->view('template/header');
        $this->load->view('pinjaman/list', $data);
        $this->load->view('template/footer');
    }

    public function show()
    {
        $result['data'] = $this->App_m->load_pnj();
        echo json_encode($result);
    }

    public function save()
    {
        $nama_nasabah = $this->input->post('nama_nasabah');
        $jumlah_pinjaman = $this->input->post('jumlah_pinjaman');
        $tanggal_pinjaman = $this->input->post('tanggal_pinjaman');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'jumlah_pinjaman' => $jumlah_pinjaman,
            'tanggal_pinjaman' => $tanggal_pinjaman,
        );

        $result = $this->App_m->add_new_pin($data);
        echo json_encode($result);
    }

    public function update()
    {
        $id_pinjaman = $this->input->post('id_pinjaman');
        $nama_nasabah = $this->input->post('nama_nasabah');
        $jumlah_pinjaman = $this->input->post('jumlah_pinjaman');
        $tanggal_pinjaman = $this->input->post('tanggal_pinjaman');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'jumlah_pinjaman' => $jumlah_pinjaman,
            'tanggal_pinjaman' => $tanggal_pinjaman,
        );

        $result = $this->App_m->update_data_pinjaman($id_pinjaman, $data);
        echo json_encode($result);
    }

    public function delete_pinjaman()
    {
        $id_pinjaman = $this->input->post('id_pinjaman');
        $this->App_m->hapus_data_pinjaman($id_pinjaman);
    }
}
