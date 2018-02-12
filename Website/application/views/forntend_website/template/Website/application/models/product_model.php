<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model{
    protected $_table = "product";
    protected $primary_key  =  "id" ;
    protected $return_type  = "array";


    public $has_many = array('image' => array('image' => 'pid'));

    public function showproduct(){
        $query = $this->db->query("select p.* , c.name as 'categories_name' from product p inner join categories c on p.categories_id = c.id ");
        return $query->result_array() ;
    }

}