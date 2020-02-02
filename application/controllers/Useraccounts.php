<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Useraccounts extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Useraccountsmodel', 'model');
        $this->pkey = 'userId';
    }
}
