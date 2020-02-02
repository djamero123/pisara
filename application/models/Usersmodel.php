<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This is the Base Model,
 * This class serves as the base model for all the module controllers in this application
 * This model is design for common database CRUD transactions.
 */
class Usersmodel extends MY_Model
{
    protected $table = 'tbl_user';
    protected $pkey = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function check_account($data)
    {
		$condition = "username ='" . $data['username'] . "' AND password ='" . $data['password'] . "'";

		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
        
		return $query->result();

    }


}
