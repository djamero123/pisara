<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Usersmodel', 'model');
        $this->pkey = 'id';
    }


    public function login(){

    	$data = $this->input->post();
    	$result = $this->model->check_account($data);

    	echo json_encode($result);

    }

}
