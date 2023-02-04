<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nasabah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('App_m');
    }
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('nasabah/list');
        $this->load->view('template/footer');
    }

    public function show()
    {
        $result['data'] = $this->App_m->load_nsb();
        echo json_encode($result);
    }

    public function save()
    {
        $pekerjaan_nasabah = $this->input->post('pekerjaan_nasabah');
        $nama_nasabah = $this->input->post('nama_nasabah');
        $alamat_nasabah = $this->input->post('alamat_nasabah');
        $telepon_nasabah = $this->input->post('telepon_nasabah');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'pekerjaan_nasabah' => $pekerjaan_nasabah,
            'alamat_nasabah' => $alamat_nasabah,
            'telepon' => $telepon_nasabah,
        );

        $result = $this->App_m->add_new_nsb($data);
        echo json_encode($result);
    }

    public function update()
    {
        $id_nasabah = $this->input->post('id_nasabah');
        $pekerjaan_nasabah = $this->input->post('pekerjaan_nasabah');
        $nama_nasabah = $this->input->post('nama_nasabah');
        $alamat_nasabah = $this->input->post('alamat_nasabah');
        $telepon_nasabah = $this->input->post('telepon_nasabah');

        $data = array(
            'nama_nasabah' => $nama_nasabah,
            'pekerjaan_nasabah' => $pekerjaan_nasabah,
            'alamat_nasabah' => $alamat_nasabah,
            'telepon' => $telepon_nasabah,
        );

        $result = $this->App_m->update_data_nasabah($id_nasabah, $data);
        echo json_encode($result);
    }

    public function delete_nasabah()
    {
        $id_nasabah = $this->input->post('id_nasabah');
        $this->App_m->hapus_data_nasabah($id_nasabah);
    }
}
