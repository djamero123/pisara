<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This is the Base Model,
 * This class serves as the base model for all the module controllers in this application
 * This model is design for common database CRUD transactions.
 */
class curriculumModel extends MY_Model
{
    protected $table = 'tbl_class_offering';
    protected $pkey = 'offerID';

    public function __construct()
    {
        parent::__construct();
    }

    public function filter_sy($schoolyear)
    {
	
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('schoolyear',$schoolyear);
		$query = $this->db->get();
        
		return $query->result();

    }


}
