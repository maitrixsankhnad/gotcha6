<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		define('AID', adminID());
	}
	public function fullAdminData($aid='')
	{
		if(!$aid){
			$aid = AID;			
		}
		$data = $this->admin_model->getAdmin($aid);
		return $adminData['admin'] = $data;
  	}
	public function index()
	{
		$adminData['admin'] = $this->fullAdminData();
		$adminData['rating'] = $this->common_model->getAll(array('fld_isDeleted'=>'0'),'','tbl_rating');
		$this->load->view('review_list',$adminData);
	}
	public function edit($id='')
	{
		$adminData['admin'] = $this->fullAdminData();
		$adminData['id'] = decode($id);
		$adminData['rating'] = $this->common_model->getAll(array('fld_isDeleted'=>'0', 'fld_id' => $adminData['id']),'','tbl_rating');
		$this->load->view('review_edit',$adminData);
	}
	public function add()
	{
		$adminData['admin'] = $this->fullAdminData();
		$adminData['id'] = '';
		$adminData['usersList'] = $this->common_model->getAll(array('fld_isDeleted'=>'0', 'fld_status'=>'0'),'','tbl_user');
		$this->load->view('review_edit',$adminData);
	}
	public function preview()
	{
		$adminData['admin'] = $this->fullAdminData();
		$adminData['rating'] = $this->common_model->getAll(array('fld_isDeleted'=>'0'),'','tbl_rating');
		$this->load->view('review_edit',$adminData);
	}
}
