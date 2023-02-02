<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('App_m');
    }
    public function index()
    {
        $data['tot_nsb'] = $this->App_m->c_nsb();
        $data['tot_pinj'] = $this->App_m->c_pinj();
        $data['tot_tab'] = $this->App_m->c_tab();
        $data['tot_lns'] = $this->App_m->c_lns();
        $data['tot_usr'] = $this->App_m->c_usr();
        $this->load->view('template/header');
        $this->load->view('dashboard/home', $data);
        $this->load->view('template/footer');
    }
}
