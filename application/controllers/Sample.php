<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sample extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SampleModel', 'model');
        $this->pkey = 'id';
    }

}
