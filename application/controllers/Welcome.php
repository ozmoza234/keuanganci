<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Welcome extends CI_Controller
{
	public function index()
	{
		$this->load->view('login');
	}
}
