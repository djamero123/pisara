<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This is the Base Model,
 * This class serves as the base model for all the module controllers in this application
 * This model is design for common database CRUD transactions.
 */
class MY_Model extends CI_Model
{
    protected $table = '';
    protected $pkey = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function get_where($where_obj, $limit = -1, $offset = 0)
    {
        if ($limit >= 1) {
            $query = $this->db->get_where($this->table, $where_obj, $limit, $offset);
        } else {
            $query = $this->db->get_where($this->table, $where_obj);
        }

        return $query->result();
    }

    public function get_data($keyword = false, $limit = 500, $offset = 0)
    {
        return $this->db->get($this->table, $limit, $offset)->result();
    }

    public function post_data($data)
    {
        if ($this->db->insert($this->table, $data)) {
            $response = array('code' => 201);
            $response['msg'] = 'Successfully added.';

            return $response;
        } else {
            return $this->server_error();
        }
    }

    public function update_data($data)
    {
        $this->db->where($this->pkey, $data[$this->pkey]);

        if ($this->db->update($this->table, $data)) {
            $response = array('code' => 200);
            $response['msg'] = 'Successfully updated.';

            return $response;
        } else {
            return $this->server_error();
        }
    }

    public function delete_data($pkey_value)
    {
        $this->db->where($this->pkey, $pkey_value);
        if ($this->db->delete($this->table)) {
            $response = array('code' => 200);
            $response['msg'] = 'Successfully deleted.';

            return $response;
        } else {
            return $this->server_error();
        }
    }
    public function check_user($user){

        $sql = "SELECT * FROM ". $this->table . " WHERE username='".$user."'"; 
        
        return $this->db->query($sql)->result();
    }

    public function server_error()
    {
        $response = array('code' => 503);
        $response['msg'] = 'Cannot add record to database. Please contact support or try again later';

        return $response;
    }
}
