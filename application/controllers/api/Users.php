<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';


class Users extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Users_Model']);
    }

    public function index_get() 
    {
        $headers = $this->input->request_headers();


        if(!array_key_exists('Authorization', $headers)) {
            return $this->messageUnAthorized();
        }

        if(empty($headers['Authorization'])) {
            return $this->messageUnAthorized();
        }

        $decodedToken = AUTHORIZATION::checkToken($headers['Authorization'])->num_rows();

        if($decodedToken == 0) {
            return $this->messageError();
        }

        $dataUsers = $this->Users_Model->get()->result_array();
        $response = array('status' => true, 'data' => $dataUsers);
        return $this->set_response($response, REST_Controller::HTTP_OK);
    }


    private function messageUnAthorized() 
    {
        $data = array();
        $data['message'] = 'Data Tidak Ditemukan';
        $data['data'] = [];
        $data['status'] = false;
        $this->set_response($data, REST_Controller::HTTP_UNAUTHORIZED);
    }

    private function messageError() 
    {
        $data = array();
        $data['message'] = 'ISI Data Dengan Baik Dan Benar';
        $data['data'] = [];
        $data['status'] = false;
        $this->set_response($data, REST_Controller::HTTP_BAD_REQUEST);
    }

    private function messageSuccess() 
    {
        $data = array();
        $data['message'] = 'SUCCESS';
        $data['status'] = true;
        $this->set_response($data, REST_Controller::HTTP_OK);
    }

    private function messageDataUsers($users) 
    {
        $data = array();
        $data['message'] = 'SUCCESS';
        $data['data'] = $users;
        $data['status'] = true;
        $this->set_response($data, REST_Controller::HTTP_OK);
    }

}
