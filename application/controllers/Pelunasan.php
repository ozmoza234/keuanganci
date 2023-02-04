<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelunasan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('App_m');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('pelunasan/list');
        $this->load->view('template/footer');
    }

    public function show()
    {
        $result['data'] = $this->App_m->load_pln();
        echo json_encode($result);
    }

    public function save()
    {
        $id_pinjaman = $this->input->post('id_pinjaman');
        $nama_nasabah = $this->input->post('nama_nasabah');
        $jumlah_pinjaman = $this->input->post('jumlah_pinjaman');
        $nominalCicilan = $this->input->post('nominalCicilan');
        $tanggalCicilan = $this->input->post('tanggalCicilan');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'id_pinjaman' => $id_pinjaman,
            'jumlah_pinjaman' => $jumlah_pinjaman,
            'cicilan' => $nominalCicilan,
            'tanggal_pelunasan' => $tanggalCicilan,
        );

        $result = $this->App_m->add_new_pel($data);
        echo json_encode($result);
    }

    public function load_cicilan()
    {
        $id_pinjaman = $this->input->get('id_pinjaman');
        $result['data'] = $this->App_m->load_pln($id_pinjaman);
        echo json_encode($result);
    }

    public function load_total_cicilan()
    {
        $id_pinjaman = $this->input->get('id_pinjaman');
        $result['data'] = $this->App_m->load_total_c($id_pinjaman);
        echo json_encode($result);
    }

    public function delete_cicilan()
    {
        $id_pelunasan = $this->input->post('id_pelunasan');
        $this->App_m->hapus_data_cicilan($id_pelunasan);
    }
}
