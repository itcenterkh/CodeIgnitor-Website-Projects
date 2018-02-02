<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow- Methods: POST, GET, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, content-type, X-Token, x-token , x-api-key');

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller{

    public function __construct($config = 'rest')
    {

        parent::__construct($config);
        $this->load->helper(array('form', 'url'));
        $this->load->model('categories_model', 'categories');
        $this->load->model('product_model', 'product');
        $this->load->model('image_model', 'image');
        $this->load->model('post_model', 'post');

    }
    public function index_options(){ $this->response(null, REST_Controller::HTTP_OK); }
    public function test_get($id)
    {
//        $this->response("hello");
        $this->response(array(
            'data' => array(
                'product' => $this->product->showproduct($id),
                'image' => $this->image->getimagebyuserid($id)
            )
        ));

    }

    public function test2()
    {
        $post = $this->product->with('image')->get(1);
    }


    // categories model

    public function category_post()
    {
        $this->categories->insert(array(
            'name' => $this->input->post('cate_name') ,
            'name_kh' => $this->input->post('cate_name_kh')
        ));

        $this->response(array(
            'status' => true
        ));
    }

    public function category_get()
    {
        $data = $this->categories->get_all();

        if ($data != null) {
            $this->response(array(
                'status' => true,
                'data' => $data
            ));
        } else {
            $this->response(array(
                'status' => false,
                'msg' => 'error'
            ));
        }
    }


    // product
//    Insert Product
    public function product_post(){
        $data = $this->product->insert(array(
            'categories_id' => $this->input->post('cateid'),
            'pname_en'         => $this->input->post('pname_en'),
            'pname_kh'      => $this->input->post('pname_kh')
        ));

            return $this->response(array(
                'status' => true ,
                'msg'   => 'insert Successfully'
            ));
    }
    public function product_get(){
        $data = $this->product->showproduct();

        if ($data != null){
            return $this->response(array(
                'status' => true ,
                'msg'   => $data
            ));
        }
    }

    public function product_delete($id)
    {
        $this->db->where('id' , $id);
        $this->db->update('product');
    }
    // ========================================//end product //========================================
    // post
    // show all product
    public function post_get(){
        $post = $this->post->showpost();
        if ($post != null){
            return $this->response(array(
                'status' => true ,
                'data'  => $post
            ));
        }else{
            return $this->response(array(
                'status' => false ,
                'msg'   => 'not data'
            ));
        }
    }
    // detail post
    public function postdetail_get($id){


        $post = $this->post->showpostbyid($id) ;
        $image = $this->image->getimagebypostid($id);

        if ($post != null){
            return $this->response(array(
                'status' => true ,
                'post'  => $post ,
                'image' => $image

            ));
        }
    }
    // -------------------------------update post ------------------------------------------
    // update post
    public function postupdate_post($id){

        $thumbnail = null;
        $config['upload_path']          = './asset/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);


        $post = array(
            'pid'   => $this->input->post('pid'),
            'cid'   => $this->input->post('cid'),
            'phone' => $this->input->post('phone'),
            'description'   => $this->input->post('description'),
            'address'    => $this->input->post('address'),
            'price'     => $this->input->post('price'),
            'post_date' => date('y-m-d')
        );

        if ($this->upload->do_upload('thumbnail'))
        {   $thumbnail  = array('upload_data' => $this->upload->data());
            $post['img_thumbnail']=  $thumbnail['upload_data']['file_name'];
        }
        $this->post->update($id ,$post);

        $images = array() ;

        if ($this->upload->do_upload('img1')){
            $img = array('upload_data' => $this->upload->data()) ;
            $images['img1'] = $img['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('img2')){
            $img = array('upload_data' => $this->upload->data()) ;
            $images['img2'] = $img['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('img3')){
            $img = array('upload_data' => $this->upload->data()) ;
            $images['img3'] = $img['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('img4')){
            $img = array('upload_data' => $this->upload->data()) ;
            $images['img4'] = $img['upload_data']['file_name'];
        }
        if ($this->upload->do_upload('img5')){
            $img = array('upload_data' => $this->upload->data()) ;
            $images['img5'] = $img['upload_data']['file_name'];
        }
        $this->db->where('pid', $id);
        $this->db->update('image', $images);


        $product = $this->post->showpostbyid($id);
        $image = $this->image->getimagebypostid($id);
        if ($product != null) {
            $this->response(array(
                'status' => true,
                'images' => 'update Successfully',
                'data' => array(
                    'product' => $product,
                    'image' => $image
                )
            ));
        } else {
            $this->response(array(
                'status' => false ,
                'msg'   => 'update fail'
            ));
        }
    }

    // ----------------------------insert post --------------------------------
    // insert
    public function post_post(){
        $dataimg = null ;
        $config['upload_path'] = './asset/img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('thumbnail')) {
            $dataimg = array('upload_data' => $this->upload->data());

        }
        $postdata = $this->post->insert(array(
            'pid'   => $this->input->post('pid'),
            'cid'   => $this->input->post('cid'),
            'phone' => $this->input->post('phone'),
            'description'   => $this->input->post('description'),
            'img_thumbnail' => $dataimg['upload_data']['file_name'],
            'address'    => $this->input->post('address'),
            'price'     => $this->input->post('price'),
            'post_date' => date('y-m-d')
        ));
        $lastid = $this->post->getlastid();
        if ($this->upload->do_upload('img1')) {
            $img1 = array('img1' => $this->upload->data());
        }
        if ($this->upload->do_upload('img2')) {
            $img2 = array('img2' => $this->upload->data());
        }
        if ($this->upload->do_upload('img3')) {
            $img3 = array('img3' => $this->upload->data());
        }
        if ($this->upload->do_upload('img4')) {
            $img4 = array('img4' => $this->upload->data());
        }
        if ($this->upload->do_upload('img5')) {
            $img5 = array('img5' => $this->upload->data());
        }
        $this->image->insert(array(
            'pid' => $lastid,
            'img1' => $img1['img1']['file_name'],
            'img2' => $img2['img2']['file_name'],
            'img3' => $img3['img3']['file_name'],
            'img4' => $img4['img4']['file_name'],
            'img5' => $img5['img5']['file_name']

        ));

        if ($postdata != null){
            return $this->response(array(
                'status'    => true ,
                'msg'       => 'insert successfully'
            ));
        }

    }

    // ======================= update product ======================================
    // update product
    public function post_delete($id){
        $this->post->update($id , array('status' => 0));

            return $this->response(array(
                'status' => true ,
                'msg'   => 'Data has been delete'
            ));

    }

    // Delete Product



}