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
        $this->load->view('template/header');
        $this->load->view('pinjaman/list');
        $this->load->view('template/footer');
    }

    public function show()
    {
        $result['data'] = $this->App_m->load_pnj();
        echo json_encode($result);
    }
}
