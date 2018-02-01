<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends MY_Model{
    protected $_table = "post";
    protected $primary_key  =  "id" ;
    protected $return_type  = "array";

    public function getlastid(){
        $query = $this->db->query("select id from post order by id desc limit 1 ");
        $lastid = $query->row('id');
        return $lastid;
    }
    public function showpost(){
        $query = $this->db->query("select p.* , pro.pname_en , pro.pname_kh ,  c.name as 'categories_name' from post p inner join product pro on p.pid = pro.id 
                                  inner join categories c on c.id = p.cid where p.status = 1 order by p.id desc limit 1000");
        return $query->result_array() ;
    }
    public function showpostbyid($id){
        $query = $this->db->query("select p.* , pro.* , c.name as 'categories_name' from post p inner join product pro on p.pid = pro.id 
                                  inner join categories c on c.id = p.cid  where p.id = $id  and p.`status` = 1 order by p.id desc limit 1000");
        return $query->result_array() ;
    }
}