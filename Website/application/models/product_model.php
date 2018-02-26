<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model{
    protected $_table = "product";
    protected $primary_key  =  "id" ;
    protected $return_type  = "array";


    public $has_many = array('image' => array('image' => 'pid'));

    public function showproduct(){
        $query = $this->db->query("select p.* from product p where p.status =1  order by id DESC");
        return $query->result_array() ;
    }
    public function getproductbyid($id){
        $query  = $this->db->query("select * from product p where p.categories_id = $id and p.status = 1 ");
        return $query->result_array() ;
    }
}