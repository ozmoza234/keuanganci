<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('App_m');
    }
    public function index()
    {
        $this->load->view('template/header');
        // $this->load->view('dashboard/home');
        $this->load->view('template/footer');
    }
}
