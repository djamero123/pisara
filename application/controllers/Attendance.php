<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Colleges extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AttendanceModel', 'model');
        
    }

     public function present(){

    	$data = $this->input->post();
    	$result = $this->model->getpresent($data);
        
    	echo json_encode($result);

    }

}
	