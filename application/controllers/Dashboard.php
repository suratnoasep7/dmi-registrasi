<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Laporan_Transaksi_Model'));
	}
	
	public function index()
	{
		if($this->session->userdata('logged_in')) {
			$data['title'] = 'Dashboard';
			$data['content'] = 'dashboard/index';
			$data['total_registrasi_user'] = $this->Laporan_Transaksi_Model->total_registrasi_user();
			$data['total_paket_hemat'] = $this->Laporan_Transaksi_Model->total_registrasi_paket("hemat");
			$data['total_paket_standar'] = $this->Laporan_Transaksi_Model->total_registrasi_paket("standar");
			$data['total_paket_premium'] = $this->Laporan_Transaksi_Model->total_registrasi_paket("premium");
			$data['total_registrasi_paket'] = $this->Laporan_Transaksi_Model->total_registrasi_paket();
			$data['total_pembiayaan_paket'] = $this->Laporan_Transaksi_Model->total_pembayaran_paket();
			$this->load->view('layout/index', $data);	
		} else {
			redirect('auth');
		}
		
	}

	public function logout() 
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
