<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

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
            $data = $this->fullAdminData();
            if($data){
                    $adminData['admin'] = $data;
            $adminData['inci_rm'] = $this->common_model->getAll(array( "fld_user_type"=> '3',"fld_isDeleted" => '0','fld_status' => '0'),array("fld_id","desc"),'tbl_user','',5);
		    $adminData['inci_approve'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '5'),array("fld_id","desc"),'tbl_incident','',5);
		    $adminData['inci_complete'] = $this->common_model->getAll(array("fld_isDeleted" => '0','fld_status' => '0'),array("fld_id","desc"),'tbl_incident','',5);

            $adminData['forum'] = $this->common_model->getAll(array("post_visibility" => 1),array("post_id","desc"),'zzz_posts','',5);
            $adminData['total_incident'] = $this->common_model->gettotalIncident();
            $adminData['total_Active_incident'] = $this->common_model->gettotalActiveIncident();
            $adminData['total_Complete_incident'] = $this->common_model->gettotalCompleteIncident();
            $this->load->view('admin-dashboard',$adminData);
		}else{
			redirect(base_url().'superadmin/login');	
		}
    }
  	public function login()
	{
		$login['loginType'] = 'admin';
		$this->load->view('signin_gotcha6',$login);
  	}

  	public function users(){
  		$adminData['admin'] = $this->fullAdminData();
        $adminData['users'] = $this->common_model->getAll(array('fld_isDeleted'=>'0'),'','tbl_user');
		$adminData['lebelType'] = '4';
        $this->load->view('all_users',$adminData);
    }

 	public function customers(){
    	$adminData['admin'] = $this->fullAdminData();
        $adminData['users'] = $this->common_model->getAll(array('fld_isDeleted'=>'0', 'fld_user_type'=>'0'),'','tbl_user');
		$adminData['lebelType'] = '0';
        $this->load->view('all_users',$adminData);
    }
    public function subject_matter_experts(){
    	$adminData['admin'] = $this->fullAdminData();
        $adminData['users'] = $this->common_model->getAll(array('fld_isDeleted'=>'0', 'fld_user_type'=>'2'),'','tbl_user');
		$adminData['lebelType'] = '2';
        $this->load->view('all_users',$adminData);
    }
    public function resource_managers(){
    	$adminData['admin'] = $this->fullAdminData();
        $adminData['users'] = $this->common_model->getAll(array('fld_isDeleted'=>'0', 'fld_user_type'=>'3'),'','tbl_user');
		$adminData['lebelType'] = '3';
        $this->load->view('all_users',$adminData);
    }

    /* All Incident List */

    public function incidents(){
      $adminData['admin'] = $this->fullAdminData();
      $adminData['inci'] = $this->common_model->getAll(array("fld_isDeleted" => '0'),array("fld_id","desc"),'tbl_incident');
      $this->load->view('all_incident',$adminData);
    }

    /* Incident Preview */
    public function incident_preview($id='')
    {
        $id = decode($id);
        $adminData['admin'] = $this->fullAdminData();
        $adminData['inci'] = $this->admin_model->getincident($id);
        $adminData['rm_id'] = $this->admin_model->getRmId($id);
        $this->load->view('admin_incident_preview',$adminData);
    }
	
	public function all_self_assessment(){    	
		$adminData['admin'] = $this->fullAdminData();
		$adminData['users'] = $this->common_model->getAll(array('fld_isDeleted'=>'0', 'fld_user_type'=>'2'),'','tbl_user');
        $this->load->view('self_assessment_list',$adminData);
    }
    
    public function rmPaymentsList(){
      $adminData['admin'] = $this->fullAdminData();
      $adminData['inci'] = $this->common_model->getAll(array("fld_isDeleted" => '0', 'fld_status'=> '0'),array("fld_id","desc"),'tbl_incident');
      $this->load->view('rm_payments_list',$adminData);
    }
	public function rmPaymentInvoice(){
		$id = decode($this->input->get('iid'));
        $rid = decode($this->input->get('rid'));
		$payType = $this->input->get('payType');
		$paynow = $this->input->get('paynow');
		$usertype = $this->input->get('usertype');
		if($paynow){
			if($payType == '1'){
				header("location:".base_url()."paypal/paybyADMIN/".$this->input->get('iid')."/".$this->input->get('rid')."/".$paynow."/".$usertype."");
			}else if($payType == '2'){
				header("location:".base_url()."paypal/paybyADMIN/".$this->input->get('iid')."/".$this->input->get('rid')."/".$paynow."/".$usertype."");
			}
		}
		if($id){
			$data['iid'] = $this->input->get('iid');
			$data['rid'] = $this->input->get('rid');
			$data['user'] = $this->common_model->getAll(array("fld_isDeleted" => 0,"fld_status" => 0, "fld_id" => $rid),'','tbl_user');
			$data['product'] = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id),'','tbl_incident');
			$data['utype'] = $usertype;
			$this->load->view('rmPaymentInvoice',$data);
		}
    }
    
    public function smePaymentsList(){
      $adminData['admin'] = $this->fullAdminData();
      $adminData['inci'] = $this->common_model->getAll(array("fld_isDeleted" => '0', 'fld_status'=> '0'),array("fld_id","desc"),'tbl_incident');
    
      $this->load->view('sme_payments_list',$adminData);
    }
	public function payments(){    	
        $adminData['admin'] = $this->fullAdminData();
       	$adminData['payment'] = $this->common_model->getAll('','','tbl_payments');
        $this->load->view('payment',$adminData);
    }
    
    public function rmPaymentHistory(){    	
        $adminData['admin'] = $this->fullAdminData();
       	$adminData['payment'] = $this->common_model->getAll(array("fld_user_type" => '0'),'','tbl_admin_payments');
        $this->load->view('rm_payment_history',$adminData);
    }
    
    public function smePaymentHistory(){    	
        $adminData['admin'] = $this->fullAdminData();
       	$adminData['payment'] = $this->common_model->getAll(array("fld_user_type" => '1'),'','tbl_admin_payments');
        $this->load->view('sme_payment_history',$adminData);
    }
    
  	public function all_invoice(){    	
		$adminData['admin'] = $this->fullAdminData();
        $adminData['users'] = $this->admin_model->getcustomer(0);
        $this->load->view('all_invoice',$adminData);
    }
	
    public function invoice($pid){
        $pid = decode($pid);
        $adminData['admin'] = $this->fullAdminData();
        $adminData['invoice'] = $this->common_model->getAll(array('fld_id'=>$pid),'','tbl_payments');
        $this->load->view('payment_invoice',$adminData);
    }
    
    public function invoiceData($pid){
        $pid = decode($pid);
        $adminData['admin'] = $this->fullAdminData();
        $adminData['invoice'] = $this->common_model->getAll(array('fld_id'=>$pid),'','tbl_admin_payments');
        $this->load->view('payment_invoice_admin',$adminData);
    }
	
    public function profile(){    	
		$adminData['admin'] = $this->fullAdminData();
		$this->load->view('superadmin_profile',$adminData);
    }
	public function globals(){    	
		$adminData['admin'] = $this->fullAdminData();
		$adminData['globals'] = $this->common_model->getAll('','','tbl_default');
		$this->load->view('globals',$adminData);
    }
	public function admin_users($type='list',$id=''){    	
		$adminData['id'] = decode($id);
		$adminData['admin'] = $this->fullAdminData();
		$data = array();
		if($type == 'list'){
			$adminData['allUsers'] = $this->common_model->getAll($data,'','tbl_admin');
			$this->load->view('admin_users',$adminData);
		}else if($type == 'edit'){
			$data['fld_id'] = $adminData['id'];
			$adminData['allUsers'] = $this->common_model->getAll($data,'','tbl_admin');
			$this->load->view('add_admin',$adminData);			
		}else if($type == 'add'){
			$adminData['allUsers'] = $this->common_model->getAll($data,'','tbl_admin');
			$this->load->view('add_admin',$adminData);
		}		
    }
	public function packages_list($type='list',$id=''){
		$adminData['id'] = decode($id);
		$adminData['admin'] = $this->fullAdminData();
		$data = array();
		if($type == 'list'){
			$adminData['package'] = $this->common_model->getAll('','','tbl_package');
			$this->load->view('packages_list',$adminData);
		}else if($type == 'edit'){
			$data['fld_id'] = $adminData['id'];
			$adminData['package'] = $this->common_model->getAll($data,'','tbl_package');
			$this->load->view('add_package',$adminData);			
		}else if($type == 'add'){
			$adminData['package'] = $this->common_model->getAll($data,'','tbl_package');
			$this->load->view('add_package',$adminData);
		}		
    }
    
    public function allDetails($rmid=''){
      $rmid = decode($rmid);
      $adminData['admin'] = $this->fullAdminData();
      $adminData['rmDetails'] = $this->common_model->getAll(array("fld_isDeleted" => '0', "fld_rm_id"=>$rmid ),array("fld_id","desc"),'tbl_incident_rm');
    
      $this->load->view('all_details_list',$adminData);
    }
	
	public function contactus($type='list',$id=''){
    	$adminData['id'] = decode($id);
		$adminData['admin'] = $this->fullAdminData();
		$data = array("fld_isDeleted" => '0');
		if($type == 'list'){
			$adminData['contact'] = $this->common_model->getAll($data,'','tbl_contact');
			$this->load->view('contact_list',$adminData);
		}else if($type == 'preview'){
			$data['fld_id'] = $adminData['id'];
			$adminData['contact'] = $this->common_model->getAll($data,'','tbl_contact');
			$this->load->view('contact_preview',$adminData);
		}
    }
}

