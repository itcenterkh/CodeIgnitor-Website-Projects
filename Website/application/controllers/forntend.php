<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
	public function test(){
		$this->load->view('forntend_website/templete/index.php');
	}
}