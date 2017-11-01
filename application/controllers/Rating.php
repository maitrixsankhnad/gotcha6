<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rating extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model(array('user_model','common_model'));
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
	public function index()
	{
		$data = $this->fullUserData();
		$userData['user'] = $data;
        $userData['inci_complete'] = $this->common_model->getPartial('*','tbl_incident',array('fld_status'=>'0', 'fld_isRating'=>'1','fld_isDeleted'=>'0','fld_uid'=>UID),$order=array("fld_id","DESC"));
		if(count($userData['inci_complete']) > 0){
        	$this->load->view('rating',$userData);
		}else{
			$pendingPayment = $this->common_model->getPartial('*','tbl_incident',array('fld_status'=>'0', 'fld_isPaid'=>'1','fld_isDeleted'=>'0','fld_uid'=>UID),$order=array("fld_id","DESC"));
			header("location:".base_url().'invoice?iid='.encode($pendingPayment[0]['fld_id']));
		}
    }	
}

