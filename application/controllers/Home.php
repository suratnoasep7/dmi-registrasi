<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Paket_Model']);
	}

	public function index()
	{
		$data['title'] = 'Registrasi';
		$data['javascript'] = 'home.js';
		$data['paket'] = $this->Paket_Model->paket()->result_array();
		$this->load->view('home/index', $data);
	}
}
