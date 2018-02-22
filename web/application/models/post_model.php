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
        $query = $this->db->query("select p.* , pro.pname_en , pro.pname_kh ,  c.name as 'cate_name_en' , c.name_kh as 'cate_name_kh' from post p inner join product pro on p.pid = pro.id 
                                  inner join categories c on c.id = p.cid where p.status = 1 order by p.id desc limit 1000");
        return $query->result_array() ;
    }
    public function showpostbyid($id){
        $query = $this->db->query("select p.*, pro.id as productid , pro.pname_en , pro.pname_kh , c.name as 'cname_kh' , c.name_kh from post p inner join product pro on p.pid = pro.id 
                                  inner join categories c on c.id = p.cid  where p.id = $id  and p.`status` = 1 order by p.id desc limit 1000");
        return $query->result_array() ;
    }
    public function image(){
        $query = $this->db->query('select p.id,p.img_thumbnail,p.price,pro.pname_kh  from post p inner join product pro on p.pid = pro.id ');
        return $query->result_array();
    }
    public function imggallery(){
        $query = $this->db->query('select img2 from image limit 40');
        return $query->result_array();
    }
    
    public function show_detail($id){
       $query = $this->db->query("select p.id, p.img_thumbnail, p.price,p.description, pro.pname_kh from post p inner join product pro on p.pid = pro.id where p.id = '$id'");
        return $query->result_array();
    }
    public function show_detailother(){
       $query = $this->db->query("select p.id,p.img_thumbnail,p.price,pro.pname_kh  from post p inner join product pro on p.pid = pro.id");
        return $query->result_array();
    }
    public function vegetables(){
        $query = $this->db->query('select p.id,p.img_thumbnail,p.price,pro.pname_kh  from post p inner join product pro on p.pid = pro.id ');
        return $query->result_array();
    }
    public function fruit(){
       $query = $this->db->query('select p.id,p.img_thumbnail,p.price,pro.pname_kh  from post p inner join product pro on p.pid = pro.id ');
        return $query->result_array();
    }
    public function cereal(){
       $query = $this->db->query('select p.id,p.img_thumbnail,p.price,pro.pname_kh  from post p inner join product pro on p.pid = pro.id ');
        return $query->result_array();
    }

    // public function sliderimage(){
    //     $query = $this->db->query('select sliderimg from image limit 2');
    //     return $query->result_array();
    // }

    
}