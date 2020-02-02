<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class create_class extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
     	$this->load->database();
     	$this->load->helper('url');
		$this->load->model('create_class_model'); 
		$this->load->library('session');
		//$this->load->view('class');
		 

    }
    // public function index(){
    // 	$this->load->view('class');
    // }
	public function index()
	{		
		 
		$data['posts'] = $this->create_class_model->getData();
	 	
		$this->session->set_flashdata('msg1', "AAAA");
		$stopper = "true";
			$title = $this->input->post('title');
			$gradelevel = $this->input->post('gradelevel');
			$description = $this->input->post('description');
			$unit = $this->input->post('unit');
			$data['existing'] = $this->create_class_model->check_existing($title);
		 if(!empty($data['existing'])){
		 	// $data['msg1']= "Subject already existed!";
		 	$this->session->set_flashdata('msg1', 'subject existing !');
		 	$stopper= "false";
		 }
	 	 if(empty($title)){
	 	 	$this->session->set_flashdata('msg1', 'please fill the blank !');	 	 
	 	 	$stopper= "false";
	 	
	 	 }
	 	 if(empty($description)){
	 	 	$this->session->set_flashdata('msg2', 'please fill the blank !'); 	 	 
	 	 	$stopper= "false";
	 	 	 
	 	 }
	 	 if($stopper=="true")
	 	 {
	 	 	$this->create_class_model->create($title,$gradelevel,$description,$unit);
	 	 	$this->session->set_flashdata('success', 'Successfully created !');

	 	 	redirect('http://localhost/pisara/create_class','refresh');
	 	 }
	 	 	 $data['msg1']= $this->session->flashdata('msg1');
	 	 	 $data['msg2']= $this->session->flashdata('msg2');
	 	 	 $data['flashmsg']=$this->session->flashdata('success'); 
	 	 	 $this->load->view('class.php',$data);

	}
	public function delete(){

		$subjectID= $this->input->post('subjectID');
		$data['confirm']=$this->create_class_model->delete_subject($subjectID);
		$this->session->set_flashdata('success', 'Successfully deleted!');
		$data['confirmmsg']=$this->session->flashdata('success');

		// if($response==true){
		// 	$this->load->view('class.php',$data);
		// }
		redirect('http://localhost/pisara/create_class','refresh');
	}

	public function update(){
		$this->load->view('update.php');
	}
	
       	
   
}
?>
