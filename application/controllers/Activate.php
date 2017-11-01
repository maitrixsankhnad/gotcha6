<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activate extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('common_model');
		$this->load->helper('common_helper');	
	}
	public function index()
	{
		echo 'error';
	}
	public function user($token)
	{
		$data = array(
			'fld_status' => '0',
			'fld_token' => ''
		);
		
		$result = $this->common_model->updateData("fld_token",$token,$data,"tbl_user");
		if($result){
			$this->load->view('msg_activated');
		}else{
			$this->load->view('link_expired');
		}
	}
}
