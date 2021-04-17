<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Register extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['User_Model','Transaksi_Paket_Model']);
	}

	public function index_post()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('tempat','Tempat','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
		$this->form_validation->set_rules('paket','Paket','required');

		if($this->form_validation->run() == false) {
			$this->messageError();
		}

		if($this->insertDataRegistrasi()) {
			$this->messageSuccess();
		} else {
			$this->messageError();
		}
	}

	private function insertDataRegistrasi() {
		$data = array(
			'nama' => $this->input->post('nama'),
			'tempat' => $this->input->post('tempat'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		);
		$this->User_Model->save($data);
		$id_registrasi_user = $this->db->insert_id();
		$data = array(
			'id_registrasi_user' => $id_registrasi_user,
			'id_paket' => $this->input->post('paket')
		);
		$response = $this->Transaksi_Paket_Model->save($data);
		return $response;
	}

	private function messageError()
	{
		$data = array();
		$data['message'] = 'ISI Data Dengan Baik Dan Benar';
		$data['status'] = false;
		$this->set_response($data, REST_Controller::HTTP_BAD_REQUEST);
	}

	private function messageDataNotFound()
	{
		$data = array();
		$data['message'] = 'Data Tidak Ditemukan';
		$data['status'] = false;
		$this->set_response($data, REST_Controller::HTTP_BAD_REQUEST);
	}

	private function messagePasswordError()
	{
		$data = array();
		$data['message'] = 'Password Anda Salah';
		$data['status'] = false;
		$this->set_response($data, REST_Controller::HTTP_BAD_REQUEST);
	}
	private function messageSuccess()
	{
		$data = array();
		$data['message'] = 'Registrasi Berhasil';
		$data['status'] = true;
		$this->set_response($data, REST_Controller::HTTP_OK);
	}
}
