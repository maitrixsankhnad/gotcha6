<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        define('UID', userID());
    }

    public function fullUserData($uid = '') {
        if (!$uid) {
            $uid = UID;
        }
        $data = $this->user_model->getUser($uid);
        return $userData['user'] = $data;
    }

    public function index() {
		$data = $this->fullUserData();
        if ($data) {
            $userData['user'] = $data;
            $userData['inci_approve'] = $this->user_model->getincident('', UID, 2);

            $userData['inci_complete'] = $this->user_model->getFeedbackIncident(UID);
            //$userData['inci_complete'] = $this->user_model->getCompleteIncident(UID);
            $userData['forum'] = $this->common_model->getAll(array("post_visibility" => 1), array("post_id", "desc"), 'zzz_posts', '', 5);
            if ($data[0]['fld_user_type'] == '0' && count($userData['inci_complete']) > 0) {
                redirect('rating', $userData); //Rating URL
            } else if ($data[0]['fld_user_type'] == '0') {
                $userData['inci_approved'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '5', 'fld_uid' => UID ),array("fld_id","desc"),'tbl_incident','',5);
                $userData['inci_completed'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '0' , 'fld_uid' => UID ),array("fld_id","desc"),'tbl_incident','',5);
                $userData['inci_pending'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '1', 'fld_uid' => UID), array("fld_id", "desc"), 'tbl_incident', '', 5);
                $userData['total_incident'] = $this->user_model->gettotalIncidentCustomer(UID);
                $userData['total_Active_incident'] = $this->user_model->gettotalActiveIncidentCustomer(UID);
                $userData['total_Complete_incident'] = $this->user_model->gettotalCompleteIncidentCustomer(UID);
           
                $this->load->view('dashboard', $userData); //Customer Dashboard
            } else if ($data[0]['fld_user_type'] == '1' || $data[0]['fld_user_type'] == '4') {
                $this->load->view('registration', $userData); //Expert Registration Page
            } else if ($data[0]['fld_user_type'] == '2') {
                $incidentList = $this->common_model->getAll(array("fld_sme_id" => UID), array("fld_incident_id", "desc"), 'tbl_incident_sme');
                $incListID = array_column($incidentList, 'fld_incident_id');
                if (count($incListID) > 0) {
                $userData['inci_approved'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '5'), array("fld_id", "desc"), 'tbl_incident', '', 5, 'fld_id', $incListID);
                $userData['inci_completed'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '0'), array("fld_id", "desc"), 'tbl_incident', '', 5, 'fld_id', $incListID);
                $userData['inci_pending'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '1'), array("fld_id", "desc"), 'tbl_incident', '', 5, 'fld_id', $incListID);
                $userData['total_incident'] = $this->user_model->gettotalIncidentUser($incListID);
                $userData['total_Active_incident'] = $this->user_model->gettotalActiveIncidentUser($incListID);
                $userData['total_Complete_incident'] = $this->user_model->gettotalCompleteIncidentUser($incListID);
                
                } else {
                $userData['inci_approved'] = $userData['inci_pending'] = $userData['inci_completed'] = $userData['total_incident'] = $userData['total_Active_incident'] = $userData['total_Complete_incident'] = array();
               
            }
                $this->load->view('dashboard', $userData); //SME Dashboard
            } else if ($data[0]['fld_user_type'] == '3') {
            
            $incidentList = $this->common_model->getAll(array("fld_rm_id" => UID), array("fld_incident_id", "desc"), 'tbl_incident_rm');
            $incListID = array_column($incidentList, 'fld_incident_id');
            if (count($incListID) > 0) {
                $userData['inci_approved'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '5'), array("fld_id", "desc"), 'tbl_incident', '', 5, 'fld_id', $incListID);
                $userData['inci_completed'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '0'), array("fld_id", "desc"), 'tbl_incident', '', 5, 'fld_id', $incListID);
                $userData['inci_pending'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '1'), array("fld_id", "desc"), 'tbl_incident', '', 5, 'fld_id', $incListID);
                $userData['total_incident'] = $this->user_model->gettotalIncidentUser($incListID);
                $userData['total_Active_incident'] = $this->user_model->gettotalActiveIncidentUser($incListID);
                $userData['total_Complete_incident'] = $this->user_model->gettotalCompleteIncidentUser($incListID);
           
            } else {
                $userData['inci_approved'] = $userData['inci_pending'] = $userData['inci_completed'] = $userData['total_incident'] =  $userData['total_Active_incident'] = $userData['total_Complete_incident'] = array();
                
            }
                $this->load->view('dashboard', $userData); //RM Dashboard
            }
        } else {
            redirect(base_url());
        }
    }

    public function profile() {
        $userData['user'] = $this->fullUserData();
        $userData['serviceTag'] = $this->user_model->getAllServicestags();
        $userData['country'] = $this->user_model->getcountry();
        //$userData['timeslots'] = $this->user_model->getTimeSlots();
        $userData['userTag'] = $this->user_model->checkUsertagsId(UID);
        $userData['inci'] = $this->user_model->getincident('', UID); // All Incident List
        $this->load->view('profile', $userData);
    }

    public function complete_registration($type = '') {
        $userData['user'] = $this->fullUserData();
        if ($type == 'sme') {
            $userData['user_type'] = 2;
            $userData['serviceTag'] = $this->user_model->getAllServicestags();
        } else if ($type == 'rm') {
            $userData['user_type'] = 3;
        } else {
            echo 'error';
            return false;
        }
        $this->load->view('final_registration', $userData);
    }

    public function self_assessment() {
        $userData['user'] = $this->fullUserData();
        if ($userData['user'][0]['fld_username']) {
            $userData['userTag'] = $this->user_model->checkUsertagsId(UID);
            $this->load->view('self_assessment', $userData);
        } else {
            $this->load->view('registration', $userData);
        }
    }

    public function new_incident($id = '') {
        $id = decode($id);
        if ($id) {
            $userData['incident'] = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id), '', 'tbl_incident');
            $userData['serviceID'] = $this->common_model->getAll(array("fld_incident_id" => $id), '', 'tbl_incident_service');
            $userData['rmSlectedID'] = $this->common_model->getAll(array("fld_incident_id" => $id), '', 'tbl_incident_rm');
            $userData['id'] = $id;
            $userType = $userData['incident'][0]['fld_service_level'];
        } else {
            $userData['id'] = false;
            $userType = '0';
        }
        $this->load->helper('common_helper');
        $userData['user'] = $this->fullUserData();
        $userData['userTag'] = $this->user_model->checkUsertagsId(UID);
        $userData['serviceTag'] = $this->user_model->getAllServicestags();
        $userData['rmList'] = $this->user_model->geUserTypeList(3, '', $userType);
        $userData['package'] = $this->common_model->getAll('', '', 'tbl_package');
        $userData['avg_rate'] = '';
        $this->load->view('new_incident', $userData);
    }

    public function manage_incident() {
        $userData['user'] = $this->fullUserData();
        $userData['userTag'] = $this->user_model->checkUsertagsId(UID);
        $userData['serviceTag'] = $this->user_model->getAllServicestags();
        $userData['incdntsdtls'] = $this->user_model->getincident();
        $this->load->view('manage_incident', $userData);
    }

    /* public function update_incident()
      {
      $userData['user'] = $this->fullUserData();
      $this->load->view('update_incident',$userData);
      } */

    public function update_incident() {
        $userData['user'] = $this->fullUserData();
        $incidentList = $this->common_model->getAll(array("fld_rm_id" => UID), array("fld_incident_id", "desc"), 'tbl_incident_rm');
        $incListID = array_column($incidentList, 'fld_incident_id');
        if (count($incListID) > 0) {
            $userData['inci'] = $this->common_model->getAll('', array("fld_id", "desc"), 'tbl_incident', 'all', '', 'fld_id', $incListID);
        } else {
            $userData['inci'] = array();
        }
        $this->load->view('update_incident', $userData);
    }

    public function plans() {
        $userData['user'] = $this->fullUserData();
        $this->load->view('plans', $userData);
    }

    public function service_request() {
        $userData['user'] = $this->fullUserData();
        $this->load->view('service_request', $userData);
    }

    public function new_service_request() {
        $userData['user'] = $this->fullUserData();
        $this->load->view('new_service_request', $userData);
    }

    /* change the user type status after social login */

    public function change_status($type = '') {
        $uid = UID;
        if ($type == 'customer') {
            $status = 0;
            $this->user_model->updateSocialUserStatus($uid, $status);
        } else if ($type == 'expert') {
            $status = 1;
            $this->user_model->updateSocialUserStatus($uid, $status);
        } else {
            echo 'error';
            return false;
        }
        redirect('dashboard');
    }

    /* Resource manager detail */

    public function rm_detail($id = '') {
        $userData['user'] = $this->fullUserData();
        $this->load->view('resource_manager_detail', $userData);
    }

    /* Incident Listing */

    public function all_incident() {
        $userData['user'] = $this->fullUserData();
        if ($userData['user'][0]['fld_user_type'] == '0') {

            $userData['inci'] = $this->common_model->getAll(array("fld_uid" => UID), array("fld_id", "desc"), 'tbl_incident');
            $this->load->view('incident_list', $userData);
        } else if ($userData['user'][0]['fld_user_type'] == '2') {

            $incidentList = $this->common_model->getAll(array("fld_sme_id" => UID), array("fld_incident_id", "desc"), 'tbl_incident_sme');
            $incListID = array_column($incidentList, 'fld_incident_id');
            if (count($incListID) > 0) {
                $userData['inci'] = $this->common_model->getAll('', array("fld_id", "desc"), 'tbl_incident', 'all', '', 'fld_id', $incListID);
            } else {
                $userData['inci'] = array();
            }
            $this->load->view('incident_list_SME', $userData);
        } else if ($userData['user'][0]['fld_user_type'] == '3') {

            $incidentList = $this->common_model->getAll(array("fld_rm_id" => UID), array("fld_incident_id", "desc"), 'tbl_incident_rm');
            $incListID = array_column($incidentList, 'fld_incident_id');
            if (count($incListID) > 0) {
                $userData['inci'] = $this->common_model->getAll('', array("fld_id", "desc"), 'tbl_incident', 'all', '', 'fld_id', $incListID);
            } else {
                $userData['inci'] = array();
            }
            $this->load->view('incident_list', $userData);
        }
    }

    /* Incident Listing for RM */

    public function incident_list_to_rm() {
        $userData['user'] = $this->fullUserData();
        $userData['inci'] = $this->user_model->incident_list_to_rm(UID);
        //print_r($userData['inci']);
        $this->load->view('incident_list_to_rm', $userData);
    }

    /* Incident Detail */

    public function rm_accept_incident($id = '') {
        $userData['user'] = $this->fullUserData();
        $userData['inci'] = $this->user_model->getincident($id);
        $userData['rm_id'] = $this->user_model->getRmId($id);

        $userData['smeList'] = $this->user_model->geUserTypeList(2);
        $this->load->view('rm_accept_incident', $userData);
    }

    /* Incident Preview */

    public function incident_preview($id = '') {
        $data = $this->fullUserData();
        if ($data) {
        $id = decode($id);
        $userData['user'] = $data;
        $userData['inci'] = $this->user_model->getincident($id);
        $userData['rm_id'] = $this->user_model->getRmInformation($id);
        // get incident message threads
        $userData['inicMessge'] = $this->common_model->getALL(array('fld_inciid' => $id , 'fld_smeid' => 0, 'fld_status'=> 0), array("fld_createdDt", "asc"), 'tbl_incident_message', 'all', '10', 'fld_uid', array($userData['rm_id'][0]['fld_id'], $userData['inci'][0]->fld_uid));
        if (count($userData['inci']) > 0 && $id) {
            $userData['rm_id'] = $this->user_model->getRmInformation($id);
            $this->load->view('incident_preview', $userData);
        } else {
            echo 'Sorry No Record Found';
        }
        }else{
           redirect(base_url());  
         }
    }

    /* Decline incident */

    public function decline_incident($id = '') {
        $userData['user'] = $this->fullUserData();
    }

    /* file download function */

    public function download($fileName = NULL) {
        $this->load->helper('download');
        if ($fileName) {
            $file = realpath("uploads/resume/") . "\\" . $fileName;
            print_r($file);
            // check file exists    
            if (file_exists($file)) {
                // get file content
                $data = file_get_contents($file);
                //force download
                force_download($fileName, $data);
            } else {
                // Redirect to base url
                redirect(base_url());
            }
        }
    }

    /* Get the incident assigned to SME */

    public function assigned_incident() {
        $userData['user'] = $this->fullUserData();
        $userData['sme'] = $this->user_model->getIncidentAssignedToSME(UID);
        $this->load->view('assigned_incident_list', $userData);
    }

    public function trackSME($iid = '' , $fld_rm_id = '', $fld_sme_id = '' ) {

        $id = decode($iid);
        $smeid = decode($fld_sme_id);
        $rmid  = decode($fld_rm_id);
        $userData['user'] = $this->fullUserData();
        $userData['inci'] = $this->user_model->getincident($id);
        $userData['sme_id'] = $this->user_model->getIncidentAssignedToSME($id);
        $userData['rm_id'] = $this->user_model->getRmInformation($id);
		$userData['smeid'] = $smeid;
		$userData['iid'] = $id;
        //print_r($userData['sme_id']);	// get incident message threads
        	
        $userData['trackSme'] = $this->user_model->getIncidentTrackToSME($id , $rmid , $smeid);
       
        if($rmid == UID)
        {
           $uid =  $smeid;
        }else{
            $uid =  $rmid; 
        }
		
		
        $userData['inicMessge'] = $this->common_model->getALL(array('fld_inciid' => $id,'fld_smeid' => $smeid, 'fld_status'=> 1), array("fld_createdDt", "asc"), 'tbl_incident_message', 'all', '10', 'fld_uid', array(UID, $uid));
	 $this->load->view('track_sme', $userData);
    }

    public function trackSMEList($id = '') {
        $id = decode($id);
        $userData['iid'] = $id;
        $userData['user'] = $this->fullUserData();
        $userData['smeDetails'] = $this->common_model->getAll(array("fld_isDeleted" => '0',"fld_incident_id" => $id),'','tbl_incident_sme','all','','fld_rm_id',array(UID));
        $this->load->view('track_smelist', $userData);
    }
    
    public function payments(){    	
        $userData['user'] = $this->fullUserData();
        if ($userData['user'][0]['fld_user_type'] == '0') {
       	    $userData['payment'] = $this->common_model->getAll(array("fld_uid" => UID),'','tbl_payments');
        }else {
            $userData['payment'] = $this->common_model->getAll(array("fld_uid" => UID),'','tbl_admin_payments');  
        }
        $this->load->view('user_payment_history',$userData);
    }
    
    public function invoice($pid){
        $pid = decode($pid);
        $userData['user'] = $this->fullUserData();
        if ($userData['user'][0]['fld_user_type'] == '0') {
           $userData['invoice'] = $this->common_model->getAll(array('fld_id'=>$pid),'','tbl_payments');
        }else{
           $userData['invoice'] = $this->common_model->getAll(array('fld_id'=>$pid),'', 'tbl_admin_payments');   
        }
        $this->load->view('user_payment_invoice',$userData);
    }

}
