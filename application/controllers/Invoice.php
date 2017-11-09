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
		
		$datetime1 = strtotime($userData['incident'][0]['fld_incident_start_time']);
		$datetime2 = strtotime($userData['incident'][0]['fld_incident_end_time']);
		$interval  = abs($datetime2 - $datetime1);
		$minutes   = round($interval / 60);
		$Hrls = round($minutes / 60);	
		$userData['timeSpan'] = $Hrls > 0 ? $Hrls : 1;	
        $this->load->view('invoice',$userData);
    }	
}

