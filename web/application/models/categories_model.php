<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends MY_Model{
    protected $_table = "categories";
    protected $primary_key  =  "id" ;
    protected $return_type  = "array";

    public function getcate(){
        $query = $this->db->query("select * from categories  ORDER by id ASC LImit 1");
        return $query->result_array() ;
    }

    public function get_all(){
        $query = $this->db->query("select * from categories where status = 1 order by id DESC");
        return $query->result_array() ;
    }
}