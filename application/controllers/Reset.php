<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends CI_Controller {

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
	public function password($type, $id, $email)
	{
		if($type == '1'){
			$tbl = 'tbl_user';
		}else{
			$tbl = 'tbl_admin';
		}
		$Did = decode($id);
		$Demail = decode($email);
		
		$chekInfo = $this->common_model->getAll(array("fld_email" => $Demail, "fld_id" => $Did),'',$tbl);
		
		if(count($chekInfo) > 0){
			$resetTime = strtotime($chekInfo[0]['fld_reset_password_interval']);
			$currentTime = time();			
			$mins = ($currentTime - $resetTime) / 60;
			if($mins > 1440){
				$this->load->view('link_expired');
			}else{
				$data['type'] = $type;
				$data['id'] = $id;
				$data['email'] = $email;
				$this->load->view('reset_password',$data);
			}
		}else{
			echo $msg = "Something Went Wrong. please try again";
		}		
		
	}
}
