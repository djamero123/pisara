<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
* 
*/
class scanModel extends CI_Model
{
    
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function checkqr($student_id,$date){
        $query="SELECT * FROM tbl_student WHERE student_id='".$student_id."'";
        $response =$this->db->query($query)->result_array();
        $query2 = "INSERT into tbl_attendance (student_id,date) VALUES('$student_id','$date')";
        $this->db->query($query2);
        echo json_encode($response);
    
    
    }
}
?>