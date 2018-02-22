<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model'); /* LOADING MODEL * Welcome_model as welcome */
    }
    public function index(){
        $this->data['view_data'] = $this->Post_model->image();
        $this->load->view('forntend_website/index', $this->data, FALSE);
    }
    public function contactus(){
		$this->load->view('forntend_website/contactus');
    }
    public function aboutus(){
		$this->load->view('forntend_website/aboutus');
    }
    public function fruit(){
		$this->load->view('forntend_website/fruit');
    }
    public function vegetable(){
		$this->data['view_data'] = $this->Post_model->vegetables();
        $this->load->view('forntend_website/vegetable', $this->data, FALSE);
    }
    public function cereal(){
		$this->load->view('forntend_website/cereal');
    }
    public function gallery(){
        $this->data['view_data'] = $this->Post_model->imggallery();
        $this->load->view('forntend_website/gallery', $this->data, FALSE);
    }
    public function detail($id){
        $this->data['view_data'] = $this->Post_model->show_detail($id);
        $this->load->view('forntend_website/detail', $this->data, FALSE);
    }
    public function detail_other(){
        $this->other['view_other'] = $this->Post_model->show_detailother();
        $this->load->view('forntend_website/detail_other', $this->other, FALSE);
    }

    // public function slider(){
    //     $this->data['view_slider'] = $this->Post_model->sliderimage();
    //     $this->load->view('forntend_website/vegetable', $this->data, FALSE);
    // }
}

