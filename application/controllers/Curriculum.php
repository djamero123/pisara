<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Curriculum extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('curriculumModel', 'model');
        $this->pkey = 'offerID';
    }


    public function view(){

    	$this->load->view('curriculumview.php');

    }

    public function get_filter_sy(){

        $schoolyear = $this->input->get('schoolyear');
        $result = $this->model->filter_sy($schoolyear);

        echo json_encode($result);

    }
}
