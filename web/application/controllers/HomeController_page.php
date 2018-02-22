<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController_page extends CI_Controller {
	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model'); /* LOADING MODEL * Welcome_model as welcome */
    }
    public function index(){

    	$this->data['view_data'] = $this->Post_model->gallery();
        $this->load->view('forntend_website/index', $this->data, FALSE);
	}

	 public function fruit(){

        $this->load->view('forntend_website/index');
	}

	// public function add(){
	//     $this->load->view('admin_cms/insert_post');
 //    }

 //    public function show(){
	//     $this->load->view('admin_cms/show_post');
 //    }
 //    public function update($id){
 //        $data['id'] = $id;
 //        $this->load->view('admin_cms/update_post' ,$data , False);

 //    }
 //    public function addProduct(){
 //        $this->load->view('admin_cms/insert_product');
 //    }
 //    public function addCategories(){
 //        $this->load->view('admin_cms/insert_categories');
 //    }
}