<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tabungan extends CI_Controller
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
        $this->load->view('tabungan/list', $data);
        $this->load->view('template/footer');
    }
    public function show()
    {
        $result['data'] = $this->App_m->load_tab();
        echo json_encode($result);
    }

    public function save()
    {
        $nama_nasabah = $this->input->post('nama_nasabah');
        $tabungan_masuk = $this->input->post('tabungan_masuk');
        $tanggal_masuk = $this->input->post('tanggal_masuk');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'tabungan_masuk' => $tabungan_masuk,
            'tanggal_masuk' => $tanggal_masuk,
        );

        $result = $this->App_m->add_new_tab($data);
        echo json_encode($result);
    }

    public function update()
    {
        $id_tabungn = $this->input->post('id_tabungn');
        $nama_nasabah = $this->input->post('nama_nasabah');
        $tabungan_masuk = $this->input->post('tabungan_masuk');
        $tanggal_masuk = $this->input->post('tanggal_masuk');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'tabungan_masuk' => $tabungan_masuk,
            'tanggal_masuk' => $tanggal_masuk,
        );

        $result = $this->App_m->update_data_tabungan($id_tabungn, $data);
        echo json_encode($result);
    }

    public function delete_tabungan()
    {
        $id_tabungn = $this->input->post('id_tabungn');
        $this->App_m->hapus_data_tabungan($id_tabungn);
    }
}
