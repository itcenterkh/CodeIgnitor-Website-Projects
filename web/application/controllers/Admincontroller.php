<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library(array('ion_auth', 'form_validation'));
        $this->load->helper(array('url', 'language'));

        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
    }

    public function index(){
		$this->load->view('admin_cms/show_post');
	}

	public function add(){
	    $this->load->view('admin_cms/insert_post');
    }

    public function show(){
	    $this->load->view('admin_cms/show_post');
    }
    public function update($id){
        $data['id'] = $id;
        $this->load->view('admin_cms/update_post' ,$data , False);

    }
    public function addProduct(){
        $this->load->view('admin_cms/insert_product');
    }
    public function addCategories(){
        $this->load->view('admin_cms/insert_categories');
    }
}