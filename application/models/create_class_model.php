<?php

defined('BASEPATH') or exit('No direct script access allowed');

class create_class_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function create($title,$gradelevel,$description,$unit){
    
        $query = "INSERT into tbl_subjects (subjectID,gradelevel,title,description,unit) VALUES('','$gradelevel','$title','$description','$unit')";
        
       $this->db->query($query);
        }

    public function getData(){
    	$this->db->select('*');
    	$this->db->from('tbl_subjects');
    	$query = $this->db->get();
    	 return $query->result();
    }
    public function check_existing($title){
    	$this->db->select('*');
    	$this->db->from('tbl_subjects');
    	$this->db->where('title',$title);
    	$query = $this->db->get();
    	return $query->result();
    }
    public function delete_subject($subjectID){

        // $query = "DELETE FROM tbl_subjects WHERE subjectID='".$subjectID."'";
        $this->db->where("subjectID",$subjectID);
        $this->db->delete("tbl_subjects");
        
    }

 

}   
