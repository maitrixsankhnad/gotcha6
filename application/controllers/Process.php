<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->email->set_mailtype("html");
        define('UID', userID());
        define('AID', adminID());
    }

    public function index() {
        $this->load->view('index');
    }

    public function uploadImg($fileName, $path = 'uploads/', $thumbs = '', $height = 240, $width = 360, $fileType = 'img') {
        $picture = $_FILES[$fileName]['name'];
        $uploadFileName = '';
        if ($picture) {
            $config['encrypt_name'] = TRUE;
            $config['upload_path'] = $path;
            if ($fileType == 'img') {
                $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|JPEG|PNG';
            } else {
                $config['allowed_types'] = 'pdf|doc|docx|ppt|xls|xlsx|txt|PDF|DOC|DOCX|PPT|TXT|XLS|XLSX';
            }
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload($fileName)) {
                $fileData = $this->upload->data();
                $uploadFileName = $fileData['file_name'];
            }
            if ($thumbs != '') {
                $this->gallery_path = realpath(APPPATH . '../' . $path);
                $config1 = array(
                    'image_library' => 'gd2',
                    'source_image' => $fileData['full_path'],
                    'new_image' => $this->gallery_path . '/' . $thumbs,
                    'maintain_ratio' => TRUE,
                    'create_thumb' => TRUE,
                    'thumb_marker' => '',
                    'width' => $width,
                    'height' => $height
                );
                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
            }
            return $uploadFileName;
        }
    }
	
    public function register() {

        $data = array(
            'fld_fname' => $this->input->post('fname'),
            'fld_mname' => $this->input->post('mname'),
            'fld_lname' => $this->input->post('lname'),
            'fld_email' => $this->input->post('email'),
            'fld_country' => $this->input->post('country'),
            'fld_time_zone' => $this->input->post('timezone'),
            'fld_password' => md5($this->input->post('password')),
            'fld_user_type' => $this->input->post('usertype'),
            'fld_username' => $this->input->post('username'),
            'fld_token' => md5(bin2hex(openssl_random_pseudo_bytes(16))),
            'fld_created_date' => date("Y-m-d H:i:s", time()),
        );

        $isRegistered = $this->user_model->checkRegister($data['fld_email']);
        if (count($isRegistered) > 0) {
            $id = 'email-error';
        } else {
            $isRegistered = $this->common_model->getAll(array("fld_username" => $data['fld_username']), '', 'tbl_user');
            if (count($isRegistered) > 0) {
                $id = 'user-error';
            }
        }
        if (!isset($id)) {
            $data['fld_approved'] = $this->input->post('usertype') == 1 ? '1' : '0';
            $id = $this->common_model->saveData("tbl_user", $data);
            $this->sendActivationLink($id);
        }
        echo json_encode(array('id' => $id));
    }

    public function forgetPassword() {
        $type = $this->input->post('type');
        $email = $this->input->post('email');
        if ($type == 1) {
            $tbl = 'tbl_user';
        } else {
            $tbl = 'tbl_admin';
        }
        $chekInfo = $this->common_model->getAll(array("fld_email" => $email), '', $tbl);
        if (count($chekInfo) > 0) {
            $data = array(
                'fld_reset_password_interval' => date("Y-m-d H:i:s", time())
            );
            $result = $this->common_model->updateData("fld_email", $email, $data, $tbl);

            $this->load->helper('email_helper');
            $data['case'] = 'lost_password';
            $data['id'] = encode($chekInfo[0]['fld_id']);
            $data['emailEncoded'] = encode($chekInfo[0]['fld_email']);
            $data['email'] = $chekInfo[0]['fld_email'];
            $data['type'] = $type;
            $data['name'] = $chekInfo[0]['fld_fname'];
            $data['name'] = $chekInfo[0]['fld_fname'];
            $emailConfig['subject'] = 'Activation Link - ' . LOGO_NAME;
            $emailConfig['to_email'] = $chekInfo[0]['fld_email'];
            sendEmail($data, $emailConfig);
        } else {
            $result = 'error';
        }
        echo json_encode(array('id' => $result));
    }

    public function resetPassword() {
        $id = decode($this->input->post('id'));
        $email = decode($this->input->post('email'));
        $type = $this->input->post('type');
        $newPassword = $this->input->post('nPass');
        if ($type == '1') {
            $tbl = 'tbl_user';
        } else {
            $tbl = 'tbl_admin';
        }
        if ($newPassword) {
            $result = $this->common_model->getAll(array("fld_id" => $id, "fld_email" => $email), '', $tbl);
            if (count($result) > 0) {
                $data = array(
                    'fld_password' => md5($newPassword),
                    'fld_reset_password_interval' => date('Y-m-d H:i:s', (strtotime('-10 day', strtotime(date('Y-m-d H:i:s')))))
                );
                echo $process = $this->common_model->updateData("fld_id", $id, $data, $tbl);
            } else {
                echo 'Oops something went wrong';
            }
        } else {
            echo 'Please enter your password';
        }
    }

    public function sendActivationLink($id = '') {
        if ($id) {
            $this->load->helper('email_helper');
            $chekInfo = $this->common_model->getAll(array('fld_id' => $id), '', 'tbl_user');
            $data['case'] = 'registration';
            $data['token'] = $chekInfo[0]['fld_token'];
            $emailConfig['subject'] = 'Activation Link - ' . LOGO_NAME;
            $emailConfig['to_email'] = $chekInfo[0]['fld_email'];
            sendEmail($data, $emailConfig);
        }
    }

    public function onoff($status = '') {
        if (isset($_SESSION['UID'])) {
            $this->user_model->updateData("fld_id", UID, array("fld_activity" => $status), "tbl_user");
            return true;
        }
        return false;
    }

    public function login() {
        $token = $emailA = '';
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $rememberMe = $this->input->post('rememberMe');
        $result = $this->common_model->getAll(array("fld_isDeleted" => '0', "fld_email" => $email, "fld_password" => $password), '', 'tbl_user');
        if (count($result) > 0) {
            if ($result[0]['fld_token']) {
                $id = 'inactive';
                $token = $result[0]['fld_token'];
                $emailA = $result[0]['fld_id'];
            } else if ($result[0]['fld_status'] == 1) {
                $id = 'disabled';
            } else {
                $id = encode($result[0]['fld_id']);
                $this->session->set_userdata('UID', $id);
                $result = $this->onoff('0');
                if ($rememberMe) {
                    $cookie = array(
                        'name' => 'UID',
                        'value' => $id,
                        'expire' => time() + 2592000,
                    );
                    $this->input->set_cookie($cookie);
                }
            }
        } else {
            $id = 'error';
        }
        echo json_encode(array('id' => $id, 'email' => $emailA));
    }

    public function adminlogin() {
        $this->load->model('admin_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $rememberMe = $this->input->post('rememberMe');
        $isRegistered = $this->admin_model->checkRegister($email);
        if (!count($isRegistered) > 0) {
            $isRegistered[0]['fld_status'] = '';
        }
        if ($isRegistered[0]['fld_status'] == 1) {
            $id = 'activate';
        } else {
            $result = $this->admin_model->loginAdmin($email, $password);
            if (count($result) > 0) {
                $id = encode($result[0]['fld_id']);
                $this->session->set_userdata('AID', $id);
                if ($rememberMe) {
                    $cookie = array(
                        'name' => 'AID',
                        'value' => $id,
                        'expire' => time() + 2592000,
                    );
                    $this->input->set_cookie($cookie);
                }
            } else {
                $id = 'error';
            }
        }
        echo json_encode(array('id' => $id));
    }

    public function contact() {
        $data = array(
            'fld_name' => $this->input->post('name'),
            'fld_email' => $this->input->post('email'),
            'fld_phone' => $this->input->post('phone'),
            'fld_message' => $this->input->post('message'),
            'fld_uid' => UID
        );
		
        $id = $this->common_model->addContact($data);
		$activityData['uid'] = UID;
		$activityData['sid'] = $id;		
		setActivity('createContact', $activityData);
        echo json_encode(array('id' => $id));
    }

    public function update_sme() {
        $uid = UID;
        $dataval = $this->input->post();
        if ($this->input->post('fld_user_type') != '0') {
            unset($dataval['servicetags'], $dataval['expert'], $dataval['starthours'], $dataval['startminutes'], $dataval['endhours'], $dataval['endminutes']);

            $resume = $_FILES['fld_resume']['name'];
            if ($resume) {
                $config['encrypt_name'] = TRUE;
                $config['upload_path'] = 'uploads/resume/';
                $config['allowed_types'] = 'pdf|doc|docx|txt';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('fld_resume')) {
                    $fileData = $this->upload->data();
                    $dataval['fld_resume'] = $fileData['file_name'];
                }
            }

            $picture = $_FILES['fld_picture']['name'];
            if ($picture) {
                $config['encrypt_name'] = TRUE;
                $config['upload_path'] = 'uploads/profile/';
                $config['allowed_types'] = 'gif|jpg|jpeg|JPG|JPEG|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('fld_picture')) {
                    $fileData = $this->upload->data();
                    $dataval['fld_picture'] = $fileData['file_name'];
                }
                $this->gallery_path = realpath(APPPATH . '../uploads/profile/');
                $config1 = array(
                    'image_library' => 'gd2',
                    'source_image' => $fileData['full_path'],
                    'new_image' => $this->gallery_path . '/thumbs',
                    'maintain_ratio' => TRUE,
                    'create_thumb' => TRUE,
                    'thumb_marker' => '',
                    'width' => 260,
                    'height' => 260
                );
                $this->load->library('image_lib', $config1); //load library
                $this->image_lib->resize(); //generating thumb			
            }

            $userServicetags = $this->input->post('servicetags');

//            if (isset($userServicetags)) {
//                $servicestagsId = $this->user_model->checkUsertagsId($uid);
//                if (count($servicestagsId) > 0) {
//                    $this->user_model->delete_user_servicetags($uid);
//                    $this->user_model->insert_user_servicetags($uid, $userServicetags);
//                } else {
//                    $this->user_model->insert_user_servicetags($uid, $userServicetags);
//                }
//            }
            
            $userServicList = $this->common_model->getAll(array('fld_uid'=>$uid),'','tbl_user_service_tag');
			$onlyServicList = array_column($userServicList, 'fld_serviceTag_id');
			
			$newServiceD = array_diff($onlyServicList, $userServicetags);
			$newServiceS = array_diff($userServicetags, $onlyServicList);
			if(count($newServiceD)>0){
				$this->user_model->deleteCustmUserServic($uid, implode(',', $newServiceD));
			}
			if($dataval['fld_user_type'] == '2'){
				$userServicetags = $this->input->post('servicetags');
				$this->user_model->insert_user_servicetags($uid, $newServiceS);
			}
        }

        $id = $this->user_model->update_Sme_User($uid, $dataval);
        $startslots_hours = $this->input->post('starthours');
        $startslots_minutes = $this->input->post('startminutes');
        $endlots_hours = $this->input->post('endhours');
        $endslots_minutes = $this->input->post('endminutes');
        $startslots_time = array();
        $endslots_time = array();
        //echo (count($startslots_hours));

        if (count($startslots_hours) > 0) {
            for ($i = 0; $i < count($startslots_hours); $i++) {
                if ($startslots_hours[$i] != 0) {
                    $startslots_time[] = $startslots_hours[$i] . ':' . $startslots_minutes[$i];
                }
                if ($endlots_hours[$i] != 0) {
                    $endslots_time[] = $endlots_hours[$i] . ':' . $endslots_minutes[$i];
                }
            }
            $this->user_model->delete_user_slottime($uid);
            $this->user_model->insert_timeslots($uid, $startslots_time, $endslots_time);
        }
        if ($this->input->post('fld_user_type') == '3') {
            $serviceLevelType = $this->input->post('expert');
            $this->user_model->updateData("fld_id", UID, array("fld_user_type" => 3, "fld_service_level" => $serviceLevelType), "tbl_user");
        }
        echo json_encode(array('id' => $id));
    }

    public function username_exists() {
        $username = $this->input->post('username');
        $exists = $this->user_model->username_exists($username);
        echo $count = count($exists);
    }

    public function update_selfAssesment() {
        $uid = UID;
        $servicetags = $this->input->post('servicetags');
        $rating = $this->input->post('rating');
        $certification_no = $this->input->post('certification_no');
        $certification_date = $this->input->post('certification_date');
        $this->user_model->updateUserType($uid, '2');
        if (count($servicetags) > 0) {
            $this->user_model->delete_selfAssesment($uid);
            for ($i = 0; $i < count($servicetags); $i++) {
                $certificationDate = date('Y-m-d', strtotime(str_replace('/', '-', $certification_date[$i])));
                $this->user_model->insert_selfAssesment($uid, $servicetags[$i], $rating[$i], $certification_no[$i], $certificationDate);
            }
        }
        echo json_encode(array('id' => 1));
    }
	public function updateUserServiceTag() {
        $uid = decode($this->input->post('uid'));
        $servicetags = $this->input->post('servicetags');
        $rating = $this->input->post('rating');
        $certification_no = $this->input->post('certification_no');
        $certification_date = $this->input->post('certification_date');
		$tempStatus = $this->input->post('status');
		$status = explode(',', $tempStatus);
		$this->user_model->delete_selfAssesment($uid);
		if (count($servicetags) > 0) {
			$data = array();
            for ($i = 0; $i < count($servicetags); $i++) {
                $certificationDate = date('Y-m-d', strtotime(str_replace('/', '-', $certification_date[$i])));
                $data[] = array(
					'fld_uid' => $uid,
					'fld_serviceTag_id' => $servicetags[$i],
					'fld_rating' => $rating[$i],
					'fld_certification_no' => $certification_no[$i],
					'fld_certification_date' => $certificationDate,
					'fld_status' => $status[$i]
				);
            }
			$process = $this->common_model->bulkSaveData('tbl_user_service_tag', $data);
        }
        echo json_encode(array('id' => 1));
    }

    public function ratingFeedback() {
        $incidentID = decode($this->input->post('iid'));
        $process = $this->common_model->updateData("fld_id", $incidentID, array('fld_isRating' => '0'), 'tbl_incident');
        $data = array(
            'fld_uid' => UID,
			'fld_incident_id' => $incidentID,
            'fld_is_solved' => $this->input->post('solved'),
            'fld_rating' => $this->input->post('rating'),
            'fld_feedback' => $this->input->post('feedback'),
            'fld_rating_ID' => $this->input->post('rateID'),
            'fld_created_date' => date("Y-m-d H:i:s", time())
        );
        $this->common_model->saveData("tbl_rating", $data);
        echo json_encode(array('id' => 'sucess'));
    }

    public function create_incident() {
        $incidentID = decode($this->input->post('incidentID'));
        $rejectRM = $this->input->post('rejectRM');
		$iTtitle = $this->input->post('title');
		$rmid = $this->input->post('rm_id');
        $data = array(
            'fld_uid' => UID,
            'fld_inci_title' => $iTtitle,
            'fld_summary' => $this->input->post('summary'),
            'fld_email' => $this->input->post('email'),
            'fld_notifications' => $this->input->post('notifications'),
            'fld_service_level' => $this->input->post('expert'),
            'fld_plan_id' => $this->input->post('plan'),
            'fld_createdDt' => date("Y-m-d H:i:s", time())
        );

        $planDetail = $this->common_model->getAll(array("fld_id" => $data['fld_plan_id']), '', 'tbl_package');
        $data['fld_plan_name'] = $planDetail[0]['fld_title'];
        $data['fld_plan_type'] = $planDetail[0]['fld_duration'];
        $data['fld_plan_amount'] = $planDetail[0]['fld_price'];
        if ($incidentID) {
            $process = $this->common_model->updateData("fld_id", $incidentID, $data, 'tbl_incident');
            $process = $this->common_model->deleteData('tbl_incident_rm', array('fld_isDeleted' => '0', 'fld_incident_id' => $incidentID));
            $process = $this->common_model->deleteData('tbl_incident_service', array('fld_incident_id' => $incidentID));
            $incident_id = $incidentID;
            $isUpdate = 'update';
        } else {
            $incident_id = $this->common_model->saveData("tbl_incident", $data);
            $isUpdate = '';
        }
        $data = array(
            'fld_incident_id' => $incident_id,
            'fld_rm_id' => $rmid
        );
        $incident_RM_id = $this->common_model->saveData("tbl_incident_rm", $data);
        $servicetags = $this->input->post('servicetags');
        for ($i = 0; $i < count($servicetags); $i++) {
            $data = array(
                'fld_incident_id' => $incident_id,
                'fld_service_id' => $servicetags[$i]
            );
            $this->common_model->saveData("tbl_incident_service", $data);
        }
        
        $this->sendIncidentMail($rmid, $incident_id, $iTtitle, $isUpdate);
        
        $activityData['tid'] = $rmid;
        $activityData['uid'] = UID;
        $activityData['sid'] =  $incident_id;
        $activityData['incTitle'] = $iTtitle;
        $activityData['isUpdate'] = $isUpdate;
        setActivity('incidentCreate', $activityData);
        echo $incident_id;
    }
     
    public function sendIncidentMail($rmid, $incident_id, $iTtitle, $isUpdate='') {
        if ($incident_id) {            
            $rmData = userInfo($rmid);
	    $this->load->helper('email_helper');
            $data['case'] = 'new_incident';
            $data['isUpdate'] = $isUpdate;
            $data['incidentData'] = $iTtitle;
            $data['incidentid'] = $incident_id;
            $emailConfig['subject'] = $isUpdate ? 'Updated Previous Incident':'New Incident Assigned to you - ' . LOGO_NAME;
            $emailConfig['to_email'] = $rmData[0]['fld_email'];
            sendEmail($data, $emailConfig);          
        }
    }
	public function incidentAccptDeclineMail($iid, $isDeclined=''){
		if ($iid){
			$incidentInfo = get_assigned_incident_data($iid);
			if($incidentInfo[0]->fld_email){
				$toEmail = $incidentInfo[0]->fld_email;
			}else{
				$userData = userInfo($incidentInfo[0]->fld_uid);
				$toEmail = $userData[0]['fld_email'];
			}
			//$rmID = getAssignedRMID($iid);            
			$this->load->helper('email_helper');
            $data['case'] = 'incident_Accpt_Decline';
            $data['isDeclined'] = $isDeclined;
            $data['incidentData'] = $incidentInfo[0]->fld_inci_title;
            $data['incidentid'] = $iid;
            $emailConfig['subject'] = $isDeclined ? 'Incident Decliened':'Incident Accepted - ' . LOGO_NAME;
            $emailConfig['to_email'] = $toEmail;
            sendEmail($data, $emailConfig);          
        }	
	}
    
    public function logout() {
        $this->onoff('1');
        unset($_SESSION['AID']);
        unset($_SESSION['UID']);
        delete_cookie('UID');
        delete_cookie('AID');
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function assigneSME() {
        $incidentID = decode($this->input->post('incidentID'));
        $smeIDList = $this->input->post('smeID');
        $process = $this->common_model->deleteData('tbl_incident_sme', array('fld_rm_id' => UID, 'fld_isDeleted' => '0', 'fld_incident_id' => $incidentID));
        foreach ($smeIDList as $smeID) {
            $data[] = array('fld_incident_id' => $incidentID, 'fld_rm_id' => UID, 'fld_sme_id' => decode($smeID), 'fld_createdDt' => date("Y-m-d H:i:s", time()));
        }
        $process = $this->common_model->bulkSaveData('tbl_incident_sme', $data);
        echo json_encode(array('id' => $process));
    }

    /* Update the Recent Activity Status */

    public function UpdateRecentAcitivityStatus() {
        $data = $this->input->post();
        $id = $this->user_model->updateUserRecentActivityStatus($data['val']);
        //print_r($data['val']);
        echo json_encode(array('id' => 'done'));
    }

    /* RM Decline the incident */

    public function rm_decline_incident() {
        $data = $this->input->post();
        //$id = $this->user_model->delete_rm_from_incident(UID,$data['val']);
        $this->user_model->update_rm_status(UID, $data['val']);
        $userData['rmList'] = $this->user_model->getRMuser(UID);
        // print_r($userData['rmList']);
        $rating = 0;
        $count = 1;
        $varCount = 0;
        $key = '';
        $userData['avg_rate'] = '';

        if (count($userData['rmList']) > 0) {

            for ($i = 0; $i < count($userData['rmList']); $i++) {
                $rating = 0;
                $varCount = 0;
                $key = $userData['rmList'][$i]['fld_id'];
                $userData['rating'] = $this->user_model->getRating($userData['rmList'][$i]['fld_id']);

                foreach ($userData['rating'] as $row) {
                    $rating = $rating + $row['fld_rating'];
                    $varCount = $count++;
                }
                if ($rating != 0 && $varCount != 0) {
                    $userData['avg_rate'][$key] = $rating / $varCount;
                } else {
                    $userData['avg_rate'][$key] = '';
                }
            }
        }

        // this way you get the max element's key in array
        $array = $userData['avg_rate'];
        $maxs = array_keys($array, max($array));
        // insert the auto generate RM to incident
        $id = $this->user_model->insert_rmList($data['val'], $maxs[0]);

        $rm_rejected_email = $this->user_model->getUserEmail(UID);
        $rm_assigned_email = $this->user_model->getUserEmail($maxs[0]);
        $incident_detail = $this->user_model->getincident($data['val']);

        /* Insert data into recent activity  */
        $message = 'Incident-' . $incident_detail[0]->fld_inci_title . 'is rejected by' . $rm_rejected_email[0]['fld_fname'];
        $this->user_model->insert_into_recent_activity($data['val'], 'incident_decline', $incident_detail[0]->fld_uid, UID, '', '0', $message);

        /* RM decline mail to admin and Rm also */

        $this->email->from('info@maitrix4demo.in', 'Gotcha-6');
        $this->email->to('info@maitrix4demo.in', $rm_rejected_email[0]['fld_email']);
        $this->email->subject('Incident Reject!!');
        $link = 'Incident-' . $incident_detail[0]->fld_inci_title . 'is rejected by' . $rm_rejected_email[0]['fld_fname'];
        $this->email->message($link);
        $this->email->send();


        /* Mail to admin and new generated RM for incident assignment */

        $this->email->from('info@maitrix4demo.in', 'Gotcha-6');
        $this->email->to('info@maitrix4demo.in', $rm_assigned_email[0]['fld_email']);
        $this->email->subject('New RM assignment!!');
        $link = 'Incident-' . $incident_detail[0]->fld_inci_title . 'is assigned to' . $rm_rejected_email[0]['fld_fname'];
        $this->email->message($link);
        $this->email->send();

        //print_r($maxs);
        echo json_encode(array('id' => 'done'));
    }

    /* SME accept the incident */

    public function sme_accept_incident() {
        $data = $this->input->post();
        /* $data['val'] -> incident id */
        $id = $this->user_model->sme_accept_incident(UID, $data['val']);
        $this->user_model->updateIncidentStatus($data['val']);


        /* SME decline Mail to SME , RM, Admin , customer */


        $sme_accept_email = $this->user_model->getUserEmail(UID);
        $rm = $this->user_model->getIncidentAssignedToSME(UID, $data['val']);
        $rm_email = $this->user_model->getUserEmail($rm[0]['fld_rm_id']);
        $incident_detail = $this->user_model->getincident($data['val']);
        $customer_email = $this->user_model->getUserEmail($incident_detail[0]->fld_uid);
       

        /* Insert data into recent activity  */
        $message = 'Incident-' . $incident_detail[0]->fld_inci_title . 'is assigned to' . $sme_accept_email[0]['fld_fname'];
        $this->user_model->insert_into_recent_activity($data['val'], 'incident_accepted_by_sme', $incident_detail[0]->fld_uid, $rm[0]['fld_rm_id'], UID, '0', $message);
        $subject = 'Sme Accept Incident!!';
        $toArray = array($rm_email[0]['fld_email'], $sme_accept_email[0]['fld_email'], $customer_email[0]['fld_email']);
        
        //$this->load->helper('common_helper');
        send_mail($message, $toArray, 'mail_template', $subject);
       

        echo json_encode(array('id' => 'done'));
    }

    /* SME Reject the incident */

    public function sme_decline_incident() {
        $data = $this->input->post();
        $id = $this->user_model->sme_decline_incident(UID, $data['val']);

        /* SME decline Mail to SME , RM, Admin */


        $sme_rejected_email = $this->user_model->getUserEmail(UID);
        $rm = $this->user_model->getIncidentAssignedToSME(UID, $data['val']);
        $rm_email = $this->user_model->getUserEmail($rm[0]['fld_rm_id']);
        $incident_detail = $this->user_model->getincident($data['val']);


        /* Insert data into recent activity  */
        $message = 'Incident-' . $incident_detail[0]->fld_inci_title . 'is rejected by' . $sme_rejected_email[0]['fld_fname'];
        $this->user_model->insert_into_recent_activity($data['val'], 'incident_decline', $incident_detail[0]->fld_uid, $rm[0]['fld_rm_id'], UID, '0', $message);


        $this->email->from('info@maitrix4demo.in', 'Gotcha-6');
        $this->email->to($rm_email[0]['fld_email'], $sme_rejected_email[0]['fld_email']);
        $this->email->cc('info@maitrix4demo.in');
        $this->email->subject('Sme Decline Incident!!');
        $link = 'Incident-' . $incident_detail[0]->fld_inci_title . 'is rejected by' . $sme_rejected_email[0]['fld_fname'];
        $this->email->message($link);
        $this->email->send();


        echo json_encode(array('id' => 'done'));
    }

    /* Manage Certificate */

    public function manageCertificate() {
       
        $uid = decode($this->input->post('uid'));
        $servicetags = $this->input->post('servicetags');
        $rating = $this->input->post('rating');
        $certificate_num = $this->input->post('certificate_num');
        $certificatedate = $this->input->post('certificate_date');
        $certificationDate = date('Y-m-d', strtotime(str_replace('/', '-', $certificatedate)));
            $data = array(
                'fld_uid' => $uid,
                'fld_serviceTag_id' => $servicetags,
                'fld_rating' => $rating,
                'fld_certification_no' => $certificate_num,
                'fld_certification_date' => $certificationDate,
                 );
            
              $this->common_model->updateData(array('fld_serviceTag_id' => $servicetags, 'fld_uid' => $uid), '', $data, 'tbl_user_service_tag');
             echo json_encode(array('id' => 'done'));
    }

    // Get RM Information 
    function getRMInfo() {
        $rmId = $this->input->post('id');
        $rmInfo = $this->user_model->getUser($rmId); //  user information
        $slots = $this->user_model->getScheduleslot($rmId); // Get Schedule Slot information
        $responce = array('rmDetials' => $rmInfo, 'rmSlots' => $slots);
        echo json_encode($responce);
    }

    // Get RM Information 
    function getRMList() {
        $levelTypes = $this->input->post('levelType');
        $userType = $this->input->post('userType');
        $userData = $this->user_model->geUserTypeList($userType, '', $levelTypes);
        $rmUser = '';
        foreach ($userData as $userList) {
            $avrageRating = getAvgRating($userList['fld_id']);
            $activity = $userList['fld_activity'] == '0' ? 'Online' : 'Offline';
            $activityBtn = $userList['fld_activity'] == '0' ? 'success' : 'default';
            $rating = $avrageRating[0]['avrage'] ?: '0';
            $rmUser .= '<tr>
			
						  <td class="text-center">
							<div class="radio">
							  <label>
								<input type="radio" class="flat" name="rm_id"  value="' . $userList['fld_id'] . '" >
							  </label>
							</div>
						  </td>
						  
						  <td><img width="50" src="' . base_url() . 'uploads/profile/thumbs/' . $userList['fld_picture'] . '" /> ' . $userList['fld_username'] . '</td>
						  
						  <td><div class="rateyo disableMouse" data-rateyo-rating="' . $rating . '"></div><div class="text_css">' . $rating . '</td>
						  
						  <td><span class="btn btn-' . $activityBtn . ' btn-xs">' . $activity . '</span></td>						  
						  <td>
							<div class="col-md-2">
							  <button type="button" class="btn btn-primary" onClick="getUserDetails(\'' . encode($userList['fld_id']) . '\')">View Profile</button>
							</div>
						  </td>
						  
						</tr>';
        }
        echo $rmUser;
    }

    /* Total Rateing */

    function getRatingTotal($raterId) {
        $sql = "select count(*) as tot,SUM(fld_rating) as totrate from tbl_rating where fld_rating_ID = '" . $raterId . "' ";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function updateCustomer() {
        $uid = UID;
        $dataval = $this->input->post();


        /* echo $picture = $_FILES['fld_picture']['name'];
          if($picture){
          $config['encrypt_name'] = TRUE;
          $config['upload_path'] = 'uploads/profile/';
          $config['allowed_types'] = 'gif|jpg|jpeg|JPG|JPEG|png';
          $this->load->library('upload', $config);
          $this->upload->initialize($config);
          if($this->upload->do_upload('fld_picture')){
          $fileData = $this->upload->data();
          $dataval['fld_picture'] = $fileData['file_name'];
          }
          $this->gallery_path = realpath(APPPATH . '../uploads/profile/');
          $config1 = array(
          'image_library' => 'gd2',
          'source_image' => $fileData['full_path'],
          'new_image' => $this->gallery_path.'/thumbs',
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '',
          'width' => 260,
          'height' => 260
          );
          $this->load->library('image_lib', $config1); //load library
          $this->image_lib->resize(); //generating thumb
          } */

        $id = $this->user_model->update_Sme_User($uid, $dataval);

        if ($this->input->post('fld_user_type') == '3') {
            $this->user_model->updateUserType($uid, '3');
        }
        echo json_encode(array('id' => $id));
    }

    public function changeStatus($id, $param, $tblCode) {
        $id = decode($id);
        $data = array();
        switch ($tblCode) {
            case 'usersList':
                $data['fld_status'] = $param;
                $tbleName = 'tbl_user';
                break;
			case 'userServTag':
                $data['fld_status'] = $param;
                $tbleName = 'tbl_user_service_tag';
                break;
			case 'sAdmin':
                $data['fld_status'] = $param;
                $tbleName = 'tbl_admin';
                break;
			case 'package':
                $data['fld_status'] = $param;
                $tbleName = 'tbl_package';
                break;	
            case 'incidentAcptDecl':
                if (decode($param) == '4') {
                    $data['fld_isDeleted'] = $isDecliened = 1;
                    $this->common_model->updateData(array('fld_incident_id' => $id, 'fld_rm_id' => UID), '', $data, 'tbl_incident_rm');
                    $data = array();
                }else{
					$isDecliened = '';	
				}
                $data['fld_status'] = decode($param);
                $tbleName = 'tbl_incident';
		
                $incidentInfo = get_assigned_incident_data($id);
                $activityData['uid'] = UID;
                $activityData['tid'] = $incidentInfo[0]->fld_uid;
                $activityData['sid'] =  $id;
                $activityData['incTitle'] = $incidentInfo[0]->fld_inci_title;
                $activityData['isDecliened'] = $isDecliened;
                setActivity('incidentAccptDecline', $activityData);
                $this->incidentAccptDeclineMail($id,$isDecliened);
                break;

            case 'SMEincidentAcptDecl':
                if (decode($param) == '2') {
                    $data['fld_isDeleted'] = 1;
                    $data['fld_status'] = 2;
                    $this->common_model->updateData(array('fld_incident_id' => $id, 'fld_sme_id' => UID), '', $data, 'tbl_incident_sme');
                } else if (decode($param) == '0') {
                    $data['fld_status'] = 0;
                    $this->common_model->updateData(array('fld_incident_id' => $id, 'fld_sme_id' => UID), '', $data, 'tbl_incident_sme');
                    echo json_encode(array('id' => '1'));
                }
                exit;
            default:
                exit;
        }
        $process = $this->common_model->updateData("fld_id", $id, $data, $tbleName);
        echo json_encode(array('id' => $process));
    }
    public function changeApproval($id, $param, $tblCode) {
        $id = decode($id);
        $data = array(
            'fld_approved' => $param
        );
        switch ($tblCode) {
            case 'usersList':
                $tbleName = 'tbl_user';
                break;
            default:
                exit;
        }

        $process = $this->common_model->updateData("fld_id", $id, $data, $tbleName);
        echo json_encode(array('id' => $process));
    }

    public function deleteCommon($id, $tblCode) {
        $id = decode($id);
        $data = array(
            'fld_isDeleted' => 1
        );

        switch ($tblCode) {
            case 'usersList':
                $tbleName = 'tbl_user';
                break;
			case 'userServTag':
				$process = $this->common_model->deleteData('tbl_user_service_tag',array('fld_id'=>$id));
				echo json_encode(array('id' => $process));
				exit;
              
                 case 'activitymsgRemove':
            
             $process = $this->common_model->deleteData('tbl_recent_activity',array('fld_id'=>$id));
				echo json_encode(array('id' => $process));
				exit;                
            case 'package':
             $tbleName = 'tbl_package';  
             $process = $this->common_model->deleteData('tbl_package',array('fld_id'=>$id));
				echo json_encode(array('id' => $process));
				exit;
            case 'cancelIncident':
                $tbleName = 'tbl_incident';
                $data = array(
                    'fld_status' => '3'
                );
                break;
			case 'rating':
                $tbleName = 'tbl_rating';
                break;
			case 'contact':
                $tbleName = 'tbl_contact';
                break;
                
			case 'sAdmin':
                $process = $this->common_model->deleteData('tbl_admin',array('fld_id'=>$id));
				echo json_encode(array('id' => $process));
                exit;
            default:
                exit;
        }

        $process = $this->common_model->updateData("fld_id", $id, $data, $tbleName);
        echo json_encode(array('id' => $process));
    }

    public function update_userpAdmin() {
        $data = array(
            'fld_fname' => $this->input->post('fname'),
            'fld_lname' => $this->input->post('lname')
        );

        $process = $this->common_model->updateData("fld_id", adminID(), $data, 'tbl_admin');
        echo json_encode(array('id' => $process));
    }

    public function updateSuperAdminPassword() {
        $aid = adminID();
        if ($aid) {
            $oldPassword = $this->input->post('oPass');
            $newPassword = $this->input->post('nPass');
            $confirmPassword = $this->input->post('cPass');

            if ($newPassword != $confirmPassword) {
                $result = 'Your new password and confirmation password do not match, please retype';
                echo json_encode(array('result' => $result));
                return false;
            }

            $result = $this->common_model->getAll(array("fld_id" => $aid, "fld_password" => md5($oldPassword)), '', 'tbl_admin');

            if (count($result) > 0) {
                $data['fld_password'] = md5($newPassword);
                $this->common_model->updateData("fld_id", $aid, $data, "tbl_admin");
                $result = 'sucess';
            } else {
                $result = 'Your current password do not match, please retype';
            }
        } else {
            $result = 'Sorry, You are not loggedin.';
        }
        echo json_encode(array('result' => $result));
    }

    public function updatesuperadminImage($isUser='') {
        $picture = $_FILES['profile']['name'];
        if ($picture) {
            $config['encrypt_name'] = TRUE;
            $config['upload_path'] = 'uploads/profile/';
            $config['allowed_types'] = 'gif|jpg|jpeg|JPG|JPEG|png';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('profile')) {
                $fileData = $this->upload->data();
                if($isUser ==''){
					$tbl = 'tbl_admin';
					$targetID = AID;
					$data['fld_avtar'] = $fileData['file_name'];
				}else{
					$tbl = 'tbl_user';
					$targetID = UID;
					$data['fld_picture'] = $fileData['file_name'];
				}
				
            } else {
                exit;
            }
            $this->gallery_path = realpath(APPPATH . '../uploads/profile/');
            $config1 = array(
                'image_library' => 'gd2',
                'source_image' => $fileData['full_path'],
                'new_image' => $this->gallery_path . '/thumbs',
                'maintain_ratio' => TRUE,
                'create_thumb' => TRUE,
                'thumb_marker' => '',
                'width' => 260,
                'height' => 260
            );
            $this->load->library('image_lib', $config1); //load library
            $this->image_lib->resize(); //generating thumb		
			
            $process = $this->common_model->updateData("fld_id", $targetID, $data, $tbl);
        }
    }

    

    // Add incident Message
    public function inciMessage() {$iid = decode($this->input->post('id'));
		$resume = $_FILES['fld_attached']['name'];
		$status = $this->input->post('status');
		$smechatid = decode($this->input->post('smechatid'));
		$attcFler = '';
		if ($resume) {
			$config['encrypt_name'] = TRUE;
			$config['upload_path'] = 'uploads/document/';
			$config['allowed_types'] = 'pdf|doc|docx|txt';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if ($this->upload->do_upload('fld_attached')) {
				$fileData = $this->upload->data();
				$attcFler = $fileData['file_name'];
			}
		}                
		$data = array(
			'fld_inciid' => $iid,
			'fld_uid' => UID,
			'fld_message' => $this->input->post('message'),
			'fld_attached' => $attcFler,
			'fld_smeid'=> $smechatid,
			'fld_status'    => $status,
			'fld_createdDt' => date("Y-m-d H:i:s", time()),
		);
		
		
		$id = $this->common_model->saveData("tbl_incident_message", $data);
		
		$rmID = getAssignedRMID($iid);
		$inciData = $this->user_model->getincident($iid);
		
		$userData = userInfo(UID);
		
		if($userData[0]['fld_user_type'] == '0' || $userData[0]['fld_user_type'] == '2'){
			$targetID = $rmID[0]['fld_rm_id'];
		}else{
			$targetID = $inciData[0]->fld_uid;
		}
		if($smechatid && $userData[0]['fld_user_type'] == '3'){
			$targetID = $smechatid;
		}
		$activityData['tid'] = $targetID;
		$activityData['uid'] = UID;
		$activityData['sid'] =  $iid;
		$activityData['incTitle'] = $inciData[0]->fld_inci_title;
		setActivity('dropMessage', $activityData);
		echo json_encode(array('id' => $id));
	}

    public function getAllUserTABLE() {
        $pageNo = $this->input->post('id');
        $where = array('fld_isDeleted' => '0');

        $isRegistered = $this->common_model->getPartial('*', 'tbl_user', $where, array("fld_created_date", "DESC"), $limit);


        $data = array('draw' => $pageNo ?: 1, 'recordsTotal' => 57, 'recordsFiltered' => 57);
        $resultData = array();
        for ($i = 0; $i <= 10; $i++) {
            $resultData[$i] = array('first_name' => rand(10, 100) . 'Sankhnad', 'last_name' => rand(10, 100) . 'Mishra', 'position' => rand(10, 100) . 'Regional Director', 'office' => rand(10, 100) . 'San Francisco', 'start_date' => '16th Oct 08', 'salary' => '$470,600');
        }

        $data['data'] = $resultData;
        echo json_encode($data);
    }

    public function userEmailExist() {
        if (AID) {
            $uid = decode($this->input->post('uid'));
            $type = $this->input->post('type');
            $value = $this->input->post('data');
            $where = array("fld_isDeleted" => '0');
            if ($type == '1') {
                $where['fld_username'] = $value;
            } else if ($type == '2') {
                $where['fld_email'] = $value;
            }

            $result = $this->common_model->getNotInData('fld_id', 'tbl_user', $where, 'fld_id', array($uid));
            if (count($result) > 0) {
                echo $type;
            }
        }
    }

    public function updateUserProfile() {
        if (AID) {
            $uid = decode($this->input->post('uid'));
            $password = $this->input->post('password');
			$userServicetags = $this->input->post('servicetags');
            $data = array(
                'fld_fname' => $this->input->post('fname'),
                'fld_mname' => $this->input->post('mname'),
                'fld_lname' => $this->input->post('lname'),
                'fld_country' => $this->input->post('country'),
                'fld_time_zone' => $this->input->post('timezone'),
                'fld_about' => $this->input->post('about'),
                'fld_facebook' => $this->input->post('facebook'),
                'fld_linkedin' => $this->input->post('linkedin'),
                'fld_google' => $this->input->post('google'),
                'fld_paypal' => $this->input->post('paypal'),
                'fld_stripe' => $this->input->post('stripe'),
                'fld_username' => $this->input->post('username'),
                'fld_user_type' => $this->input->post('userType'),
                'fld_email' => $this->input->post('email'),
				'fld_service_level' => $this->input->post('serviceLevel')
            );
            if ($password != '') {
                $data['fld_password'] = md5($password);
            }
            $profile = $_FILES['profile']['name'];
            if (!empty($profile)) {
                $data['fld_picture'] = $this->uploadImg('profile', 'uploads/profile/', 'thumbs', 260, 260);
            }
            $resume = $_FILES['resume']['name'];
            if (!empty($resume)) {
                $data['fld_resume'] = $this->uploadImg('resume', 'uploads/resume/', '', '', '', 'doc');
            }
			
			
			$userServicList = $this->common_model->getAll(array('fld_uid'=>$uid),'','tbl_user_service_tag');
			$onlyServicList = array_column($userServicList, 'fld_serviceTag_id');
			
			$newServiceD = array_diff($onlyServicList, $userServicetags);
			$newServiceS = array_diff($userServicetags, $onlyServicList);
			if(count($newServiceD)>0){
				$this->user_model->deleteCustmUserServic($uid, implode(',', $newServiceD));
			}
			if($data['fld_user_type'] == '2'){
				$userServicetags = $this->input->post('servicetags');
				$this->user_model->insert_user_servicetags($uid, $newServiceS);
			}

            $result = $this->common_model->updateData("fld_id", $uid, $data, 'tbl_user');
        }
    }
	
    
    public function materTimeUpdt($id){
        $id = decode($id);
        $fld_status = $this->input->post('status');
      
        if($fld_status == '5'){
			$data = array('fld_status' => 0 );
			$data['fld_incident_end_time'] = date("Y-m-d H:i:s", time());
			$tbleName = 'tbl_incident';
			$process = $this->common_model->updateData("fld_id", $id, $data, $tbleName);
        }else{
			$data = array('fld_status' => 5);
			$data['fld_incident_start_time'] = date("Y-m-d H:i:s", time());
			$tbleName = 'tbl_incident';
			$process = $this->common_model->updateData("fld_id", $id, $data, $tbleName);
        }        
        echo json_encode(array('id' => $process));
    }
    
    
	public function timeStatusUpdate() {
        if($this->input->post('status')=='1'){
			$id = decode($this->input->post('fld_id'));
            $result = $this->common_model->updateData("fld_id", $id, array('fld_end_time'=> date("Y-m-d H:i:s", time())), 'tbl_track');
        }else{            
            $iid = decode($this->input->post('iid'));
			$rmId = UID;
            $smeId = decode($this->input->post('smeId'));

            $data = array(
                'fld_iid'   =>  $iid,
                'fld_rm_id' =>  $rmId,
                'fld_sme_id'   => $smeId,
                'fld_start_time' => date("Y-m-d H:i:s", time()),
            );
            $tbleName = 'tbl_track';
            $result = $this->common_model->saveData($tbleName, $data);
        }
        echo json_encode(array('fld_id' => $result));
    }
	public function updateGlobals() {
        $logo = $_FILES['profile']['name'];		
		$company = $this->input->post('company');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
		$data = array();
        if($logo) {
			$data['fld_logo'] = $this->uploadImg('profile', 'assets/images/', 'thumbs', $height = 240, $width = 360);
		}else if($company){
			$data['fld_company_name'] = $company;
		}else if($email){
			$data['fld_email'] = $email;
			$data['fld_phone'] = $this->input->post('phone');
			$data['fld_company_description'] = $this->input->post('description');
		}else if($address){
			$data = array(
                'fld_address1'   =>  $this->input->post('address1'),
                'fld_address2' =>  $this->input->post('address2'),
                'fld_city'   => $this->input->post('city'),
				'fld_country'   => $this->input->post('country'),
				'fld_zip'   => $this->input->post('zip')
            );	
		}
        $process = $this->common_model->updateData("fld_id", '1', $data, 'tbl_default');
    }
	
	public function addEditAdminProfile() {
        $profile = $_FILES['profile']['name'];	
		$password = $this->input->post('password');
		$aid = decode($this->input->post('aid'));
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$data = array(
			'fld_fname'   =>  $this->input->post('fname'),
			'fld_lname' =>  $this->input->post('lname'),
			'fld_email'   => $email,
			'fld_username'   => $username,
			'fld_role'   => $this->input->post('role')
		);
		if($aid){
			$isEmail = $this->common_model->getNotInData('fld_id', 'tbl_admin', array('fld_email'=>$email), 'fld_id', array($aid));
			$isUser = $this->common_model->getNotInData('fld_id', 'tbl_admin', array('fld_username'=>$username), 'fld_id', array($aid));
		}else{
			$isEmail = $this->common_model->getAll(array('fld_email'=>$email),'','tbl_admin');
			$isUser = $this->common_model->getAll(array('fld_username'=>$username),'','tbl_admin');
		}
		if(count($isEmail) > 0){
			echo 'email';
			return false;
		}
		if(count($isUser) > 0){
			echo 'user';
			return false;
		}
		
        if($profile) {
			$data['fld_avtar'] = $this->uploadImg('profile', 'uploads/profile/', 'thumbs', $height = 240, $width = 360);
		}
		if($password) {
			$data['fld_password'] = md5($password);
		}
		if($aid){
			$id = $this->common_model->updateData("fld_id", $aid, $data, 'tbl_admin');
		}else{
			$id = $this->common_model->saveData("tbl_admin", $data);
			if($this->input->post('confirmMail')) {
				$this->load->helper('email_helper');
				$data['case'] = 'new_admin';				
				$data['email'] = $email;
				$data['password'] = $password;
				$data['fName'] = $data['fld_fname'];
				$data['lName'] = $data['fld_lname'];
				$emailConfig['subject'] = 'Account Created - ' . LOGO_NAME;
				$emailConfig['to_email'] = $data['fld_email'];
				sendEmail($data, $emailConfig);
			}
		}  
		echo $id;      
    }
	public function addEditPackage() {
		$pid = decode($this->input->post('pid'));        
		$data = array(
			'fld_title'   =>  $this->input->post('title'),
			'fld_price' =>  $this->input->post('price'),
			'fld_plan_label'   => $this->input->post('label'),
			'fld_duration'   => $this->input->post('duration'),
			'fld_detail'   => $this->input->post('detail'),
			'fld_extra_price'   => $this->input->post('extraPrice'),
			'fld_type'   => $this->input->post('type')
		);	
		
		if($pid){
			$id = $this->common_model->updateData("fld_id", $pid, $data, 'tbl_package');
		}else{
			$data['fld_createdDt'] = date("Y-m-d H:i:s", time());
			$id = $this->common_model->saveData("tbl_package", $data);
		} 
        
    }
    
    public function incidentsmeListModel($incID) {
        $iid = decode($incID);
        $inciSME = assignedSMEData($iid);
		$adminInfo = adminInfo();
		$adminData = $actionBTN = '';
       	if($adminInfo[0]['fld_role'] == '0'){
			$actionBTN = '<th class="col-md-1">Action</th>';
		}
        $usetPreview = '<div class="modal-dialog modal-lg">
		
		  <input type="hidden" value="' . $incID . '" class="selectedIID" />
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">x</span> </button>
              <h4 class="modal-title" id="myModalLabel"> Incidents Assign SME List</h4>
            </div>
            <div class="modal-body">
              <table  id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Paypal Id</th>
                    <th>Total Work</th>
                    <th>Amount Paid </th>
                    '.$actionBTN.'
                  </tr>
                </thead>
                <tbody class="boxInputFull">';
        foreach ($inciSME as $inciSMEList) {
                $inciSMEData = userInfo($inciSMEList['fld_sme_id']);
                $totaltime = trackSMETotalTime($inciSMEList['fld_sme_id'], $inciSMEList['fld_rm_id'], $iid);
                if(($inciSMEList['fld_isPaid'] == '0')){
                        $paybutton = "<span class='btn btn-sm btn-primary'>Paid</span>"; 
                }else{
                        $paybutton = '<a class="btn btn-sm btn-primary" href="'. base_url().'paypal/smePayment?iid='.$incID.'|'.$inciSMEList['fld_sme_id'].'"><i class="fa fa-eye"></i> Payment</a>'; 
                }
                    $smePaymentData =getPaymentSMEIncident($iid,$inciSMEList['fld_sme_id']);
                     
                      if(!empty($smePaymentData[0]['fld_total'])){
                                $amount = $smePaymentData[0]['fld_total'] . '<small> '.$smePaymentData[0]['fld_currency'].'</small>';
                       }else{
                             $amount = "<span class='btn btn-sm btn-primary'>Not Paid</span>";
                } 
                $adminData .= '<tr class=""> 
                                <td>' . $inciSMEData[0]['fld_fname'] . ' ' . $inciSMEData[0]['fld_mname'] . ' ' . $inciSMEData[0]['fld_lname'] . '</td>
                                <td>' . $inciSMEData[0]['fld_paypal'] . '</td>
                                <td> '.$totaltime[0]->TotalTime .'</td>
                                <td> '.$amount.'</td>';
				if($adminInfo[0]['fld_role'] == '0'){
				$adminData .= '<td><div class="col-md-2">
                                       '.$paybutton.' 
                                      </div></td>
                              </tr>';
				}
        }
        $usetPreview .= $adminData . '</tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            </div>
          </div>
		
        </div>';
        echo $usetPreview;
    }
	
	
	public function addEditReview() {
		$rid = decode($this->input->post('rid'));        
		$data = array(
			'fld_is_solved'   =>  $this->input->post('isSolved'),
			'fld_rating' =>  $this->input->post('rating'),
			'fld_feedback'   => $this->input->post('feedback')
		);
		if($rid){
			$id = $this->common_model->updateData("fld_id", $rid, $data, 'tbl_rating');
		}else{
			$data['fld_uid'] = AID;
			$data['fld_isAdmin'] = 0;
			$data['fld_incident_id'] = $this->input->post('iid');
			$data['fld_rating_ID'] = decode($this->input->post('tid'));
			$data['fld_rating'] = $this->input->post('rating');
			$data['fld_is_solved'] = $this->input->post('isSolved');
			$data['fld_feedback'] = $this->input->post('feedback');
			$data['fld_created_date'] = date("Y-m-d H:i:s", time());
			$id = $this->common_model->saveData("tbl_rating", $data);
		}
		echo 'Sucess';       
    }
	
	public function findIncidentOnUser($id='') {
		$id = decode($id);
		$iid = $title = array();
		$userData = $this->common_model->getAll(array("fld_id" => $id, 'fld_isDeleted'=>'0'), '', 'tbl_user');
		if($userData[0]['fld_user_type'] == '0'){
			$userInci = $this->common_model->getAll(array("fld_uid" => $id, 'fld_isDeleted'=>'0'), '', 'tbl_incident');
		}else if($userData[0]['fld_user_type'] == '2'){
			$userInci = $this->common_model->getAll(array("fld_sme_id" => $id, 'fld_isDeleted'=>'0'), '', 'tbl_incident_sme');
		}else if($userData[0]['fld_user_type'] == '3'){
			$userInci = $this->common_model->getAll(array("fld_rm_id" => $id, 'fld_isDeleted'=>'0'), '', 'tbl_incident_rm');
		}
		foreach($userInci as $userInciData){
			if($userData[0]['fld_user_type'] == '0'){
				$incidentIDR = $userInciData['fld_id'];
			}else{
				$incidentIDR = $userInciData['fld_incident_id'];
			}
			$incList = $this->common_model->getAll(array("fld_id" => $incidentIDR, 'fld_isDeleted'=>'0'), '', 'tbl_incident');
			array_push($title,$incList[0]['fld_inci_title']);
			array_push($iid,$incList[0]['fld_id']);
		}
		echo json_encode(array('title' => $title, 'iid' => $iid));
    }
	public function updateReadAllNoti($isAdmin='') {
		$this->user_model->updateNotReadP(UID,$isAdmin);
    }
}
