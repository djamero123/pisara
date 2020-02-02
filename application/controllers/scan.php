<?php

defined('BASEPATH') or exit('No direct script access allowed');

class scan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
     	$this->load->database();
		$this->load->model('scanModel');  
    }
    public function index(){
        $student_id = $this->input->post('student_id');
        $date = date("F j, Y, g:i a");
        $response= $this->scanModel->checkqr($student_id,$date);
      // 	echo json_encode($response);
        //return $this->json_format($response);
    }
   
}
?>