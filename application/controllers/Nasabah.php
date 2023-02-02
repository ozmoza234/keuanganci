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
}