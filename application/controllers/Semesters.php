<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Semesters extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SemestersModel', 'model');
        $this->pkey = 'semId';
    }
}
