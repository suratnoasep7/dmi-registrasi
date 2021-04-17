<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_Transaksi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Laporan Transaksi';
		$data['content'] = 'laporan_transaksi/index';
		$data['javascript'] = 'laporan_transaksi.js';
		$this->load->view('layout/index', $data);
	}
}
