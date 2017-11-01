<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Process extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$this->load->model('common_model');
		$this->load->library('email');
        $this->email->set_mailtype("html");
	}
	
	public function index()
	{

		$this->load->view('index');
	}
	
	public function register()
	{
		
		$data = array(
			'fld_fname' => $this->input->post('fname'),
			'fld_mname' => $this->input->post('mname'),
			'fld_lname' => $this->input->post('lname'),
			'fld_email' => $this->input->post('email'),
			'fld_country' => $this->input->post('country'),
			'fld_time_zone' => $this->input->post('timezone'),
			'fld_password' => md5($this->input->post('password')),
			'fld_user_type' => $this->input->post('usertype'),
			'fld_token' => md5(bin2hex(openssl_random_pseudo_bytes(16))),
			'fld_created_date' =>  date("Y-m-d G.i:s", time()),
		);
        $isRegistered = $this->user_model->checkRegister($data['fld_email']);
		if(count($isRegistered) > 0){
			$id = 'error';
		}else{
			$id = $this->user_model->registerUser($data);		
			$this->email->from('info@maitrix4demo.in', 'Gotcha-6');
			$this->email->to($data['fld_email']);
			$this->email->subject('Complete Gotcha-6 Registration!!');
			$link = 'Click on this link - <a href="'.base_url().'process/activate/'.$id.'/'.$data['fld_token'].' ">Activate Now</a>';
			$this->email->message($link);
			$this->email->send();
		}
		echo json_encode(array('id'=>$id));
	}
	public function activate() {
		$id = $this->uri->segment(3);
		$token = $this->uri->segment(4);
		$result = $this->user_model->registraionActivteStatus($id, $token);
		if(count($result) > 0){
			$msg = '<div style="color:green; font-size: 2em; margin-top: 10%; text-align: center;">You are sucessfully activated</div>';
			$result = $this->user_model->updateUserStatus($id);
		}else{
			$msg = '<div style="color:red; font-size: 2em; margin-top: 10%; text-align: center;">Link Expired</div>';	
		}
		echo $msg;
    }
	
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$isRegistered = $this->user_model->checkRegister($email);
		if(!count($isRegistered) > 0){
			$isRegistered[0]['fld_status'] = '';
		}
		
		if($isRegistered[0]['fld_status'] == 1){
			$id = 'activate';
		}else{
			$result = $this->user_model->loginUser($email, $password);
			if(count($result) > 0){
				foreach($result as $item) {
					$id = $item['fld_id'];
					$this->session->set_userdata('UID',$id);
				}
			}else{
				$id='error';
			}
		}		
		echo json_encode(array('id'=>$id));
	}
	public function contact()
	{
		$data = array(
			'fld_name' => $this->input->post('name'),
			'fld_email' => $this->input->post('email'),
			'fld_phone' => $this->input->post('phone'),
			'fld_message' => $this->input->post('message'),
			'fld_uid' => $this->session->userdata('UID')
		);
        
		$id = $this->common_model->addContact($data);
		echo json_encode(array('id'=>$id));
	}
	
	public function update_sme()
	{
		$uid = $this->session->userdata('UID');
		$dataval = $this->input->post();
		unset($dataval['servicetags'], $dataval['starthours'], $dataval['startminutes'], $dataval['endhours'], $dataval['endminutes']);
		
		$resume = $_FILES['fld_resume']['name'];
		if($resume){	
			$config['encrypt_name'] = TRUE;	
			$config['upload_path'] = 'uploads/resume/';
			$config['allowed_types'] = 'pdf|doc|docx|txt';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('fld_resume')){
				$fileData = $this->upload->data();	
				$dataval['fld_resume'] = $fileData['file_name'];	
			}
		}
		$picture = $_FILES['fld_picture']['name'];
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
				'width' => 200,
				'height' => 200			   
			);
			$this->load->library('image_lib', $config1); //load library
			$this->image_lib->resize(); //generating thumb			
		}
		
		$userServicetags = $this->input->post('servicetags'); 
		if(isset($userServicetags)){
			$servicestagsId = $this->user_model->checkUsertagsId($uid);
			if(count($servicestagsId) > 0){
				$this->user_model->delete_user_servicetags($uid);
				$this->user_model->insert_user_servicetags($uid,$userServicetags);				
			}else{
				$this->user_model->insert_user_servicetags($uid,$userServicetags);
			}
		}
		$id = $this->user_model->update_Sme_User($uid,$dataval);
		$startslots_hours= $this->input->post('starthours');
		$startslots_minutes= $this->input->post('startminutes');
		$endlots_hours= $this->input->post('endhours');
		$endslots_minutes= $this->input->post('endminutes');
		if(count($startslots_hours) > 0){
		
		for($i=0;$i<count($startslots_hours); $i++){
			$startslots_time[] = $startslots_hours[$i].':'.$startslots_minutes[$i];
			$endslots_time[] = $endlots_hours[$i].':'.$endslots_minutes[$i];
		}
			$this->user_model->delete_user_slottime($uid);
			$this->user_model->insert_timeslots($uid,$startslots_time,$endslots_time);	
		}		
		echo json_encode(array('id'=>$id));
	}
	
	public function username_exists()
	{
		$username = $this->input->post('username');
		$exists = $this->user_model->username_exists($username);
		echo $count = count($exists);
	}
	
	public function update_selfAssesment()
	{
		$uid = $this->session->userdata('UID');
		$servicetags		= $this->input->post('servicetags');
		$rating				= $this->input->post('rating');		
		$certification_no	= $this->input->post('certification_no');
		$certification_date = $this->input->post('certification_date');
		
		if(count($servicetags) > 0){
			//$this->user_model->delete_selfAssesment($uid);
			for($i=0;$i<count($servicetags); $i++){
				$certification_date = $certification_date[$i] != '' ? date('Y-m-d',strtotime(str_replace('/','-',$_REQUEST['fld_payment_date']))):'0000-00-00';
				
				$this->user_model->insert_selfAssesment($uid,$servicetags[$i], $rating[$i], $certification_no[$i], $certification_date);
			}
		}
		echo json_encode(array('id'=>1));
	}
	
	public function logout() {
        unset($_SESSION['UID']);
        $this->session->sess_destroy();
        redirect(base_url());
    }
	
}
