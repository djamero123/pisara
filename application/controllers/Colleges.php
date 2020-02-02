<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Colleges extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('CollegesModel', 'model');
        $this->pkey = 'ID';
    }
}
