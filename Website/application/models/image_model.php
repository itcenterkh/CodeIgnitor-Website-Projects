<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends MY_Model{
    protected $_table = "image";
    protected $primary_key = "id";
    protected $return_type = "array";

    public function getimagebyuserid($id){
        $query = $this->db->query("select * from image where pid = $id");
        return $query->result_array() ;
    }

    public function getimagebypostid($pid){
        $query = $this->db->query("select * from image where pid = $pid");
        return $query->result_array();
    }
//    public function deleteImage($id){
//        $query = $this->db->query("delete from image where pid = $id");
//    }


}