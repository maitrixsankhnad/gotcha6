<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('user_model','admin_model','common_model'));
		define('AID', adminID());
	}
	public function index($id){		
		$id = decode($id);
		$userData['admin'] = $this->admin_model->getAdmin(AID);
		$userData['siteUser'] = $this->common_model->getAll(array("fld_id" => $id, "fld_isDeleted" => "0"),'','tbl_user');
		$userData['serviceTag'] = $this->common_model->getAll(array('fld_isDeleted'=>'0'),'','tbl_service_tag');
		$this->load->view('userprofile',$userData);
	}
	public function certifications($id){
		$id = decode($id);
		$userData['admin'] = $this->admin_model->getAdmin(AID);
		$userData['userData'] = $this->common_model->getAll(array("fld_id" => $id, "fld_isDeleted" => "0"),'','tbl_user');
		$userData['userServiceTag'] = $this->common_model->getAll(array('fld_uid'=>$id),'','tbl_user_service_tag');
		$this->load->view('certifications',$userData);
	}
}
?>
