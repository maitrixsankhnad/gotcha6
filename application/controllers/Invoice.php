<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		define('UID', userID());
	}
	public function fullUserData($uid='')
	{
		if(!$uid){
			$uid = UID;			
		}
		$data = $this->user_model->getUser($uid);
		return $userData['user'] = $data;
  	}
	public function index($id='')
	{
		
		$data = $this->fullUserData();
        $userData['user'] = $data;
		$userData['id'] = $this->input->get('iid');
		$iid = decode($this->input->get('iid'));
		$userData['incident'] = $this->common_model->getPartial('*','tbl_incident',array('fld_status'=>'0', 'fld_id'=>$iid ,'fld_isDeleted'=>'0','fld_uid'=>UID),$order=array("fld_id","DESC"));
		
		$this->load->view('invoice',$userData);
    }	
}

