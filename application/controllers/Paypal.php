<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends CI_Controller 
{
	 function  __construct() {
		parent::__construct();
		$this->load->library('paypal_lib');
		define('UID', userID());
		define('AID', adminID());
	}
	
	function index(){
		$id = decode($this->input->get('iid'));
		if($id){
			$data['iid'] = $this->input->get('iid');
			$data['user'] = $this->common_model->getAll(array("fld_isDeleted" => 0,"fld_status" => 0, "fld_id" => UID),'','tbl_user');
			$data['product'] = $this->common_model->getAll(array("fld_isDeleted" => 0,"fld_isPaid" => 1, "fld_id" => $id),'','tbl_incident');
			if(count($data['product'])>0){
				$this->load->view('paypal/index', $data);
			}else{
				echo 'Congratulations!! You have already paid your due amount. Go back and login';	
			}
		}
	}
	
    function rmPayment(){
		$id = decode($this->input->get('iid'));
               
        if($id){
			$data['iid'] = $this->input->get('iid');
			$data['product'] = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id),'','tbl_incident');
			$this->load->view('paypal/rm_payment', $data);
		}
	}
        
        
	function pay($iid){
		$id = decode($iid);
        $this->session->set_userdata('paymentProcess',654654);
		$returnURL = base_url().'paypal/process'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		$product = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id),'','tbl_incident');
		$userID = UID;
		$getBlance = getBalanceDueAmt($id, TRUE, TRUE);
		$getBlance = (explode('~',$getBlance));
		$logo = base_url().'assets/images/logo.png';		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product[0]['fld_plan_name']);
		$this->paypal_lib->add_field('custom', $iid);
		$this->paypal_lib->add_field('item_number',  str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT));
		$this->paypal_lib->add_field('amount', str_replace( ',', '', $getBlance[1]));
		$this->paypal_lib->image($logo);		
		$this->paypal_lib->paypal_auto_form();
	}
	
	 function process(){
		$iid = decode($this->input->get('cm'));
		$data = array(
			'fld_uid' => UID,
			'fld_incident_id' => $iid,
			'fld_payment_id' => $this->input->get('tx'),
			'fld_payment_status' => $this->input->get('st'),
			'fld_total' => $this->input->get('amt'),
			'fld_currency' => $this->input->get('cc'),
			'fld_description' => 'PayPal Payment',
			'fld_createdDt' => date("Y-m-d H:i:s", time())
		);
		if(isset($_SESSION['paymentProcess'])){
			unset($_SESSION['paymentProcess']);
			$payID = $this->common_model->saveData("tbl_payments",$data);
			$this->common_model->updateData("fld_id",$iid,array('fld_isPaid'=>'0'),'tbl_incident');
		}
		if($payID !=''){
			header("location:".base_url()."paypal/success/".encode($payID)."");
		}else{
			echo 'Sucessfully Paid!!';	
		}
	 }
	 
	 function success($tid=''){
		$data['tid'] = $tid;
		$id = decode($tid);
	    $data['payment'] = $this->common_model->getAll(array("fld_id" => $id),'','tbl_payments');
		$this->load->view('paypal/success', $data);
	 }
	 
	 function cancel(){
                $this->load->view('paypal/cancel');
	 }
	 
	 function ipn(){
		//paypal return transaction details array
		$paypalInfo	= $this->input->post();

		$data['user_id'] = $paypalInfo['custom'];
		$data['product_id']	= $paypalInfo["item_number"];
		$data['txn_id']	= $paypalInfo["txn_id"];
		$data['payment_gross'] = $paypalInfo["payment_gross"];
		$data['currency_code'] = $paypalInfo["mc_currency"];
		$data['payer_email'] = $paypalInfo["payer_email"];
		$data['payment_status']	= $paypalInfo["payment_status"];

		$paypalURL = $this->paypal_lib->paypal_url;		
		$result	= $this->paypal_lib->curlPost($paypalURL,$paypalInfo);
		
		//check whether the payment is verified
		if(preg_match("/VERIFIED/i",$result)){
		    //insert the transaction data into the database
			$this->user_model->insertTransaction($data);
		}
    }
    
    function payAdmin($iid){
		$id = decode($iid);
		$amount = $this->input->post('amount');
		$this->session->set_userdata('paymentProcess',654654);
		$returnURL = base_url().'paypal/processAdmin'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		$product = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id),'','tbl_incident');
		$rmincidentData    = getAssignedRMID($product[0]['fld_id']);
                $rmid   =   $rmincidentData[0]['fld_rm_id'];
                $auserID = AID; 
		$logo = base_url().'assets/images/logo.png';		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product[0]['fld_inci_title']);
		$this->paypal_lib->add_field('custom',  $id.'|'.$rmid );
                $this->paypal_lib->add_field('item_number',  str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT));
		$this->paypal_lib->add_field('amount', str_replace( ',', '', $amount));
		$this->paypal_lib->image($logo);		
		$this->paypal_lib->paypal_auto_form();
	}
        
     function processAdmin(){
            //  $iid = decode($this->input->get('cm'));
               $allIds = explode('|', $this->input->get('cm'));
               $iid = $allIds[0]; 
               $rmid = $allIds[1]; 
                if ($rmid){
                    $fld_user_type = 0;
                }else{
                    $fld_user_type =1;
                }
		$data = array(
			'fld_auid' => AID,
                        'fld_uid' => $rmid,
                        'fld_user_type'=>$fld_user_type, 
			'fld_incident_id' => $iid,
			'fld_payment_id' => $this->input->get('tx'),
			'fld_payment_status' => $this->input->get('st'),
			'fld_total' => $this->input->get('amt'),
			'fld_currency' => $this->input->get('cc'),
			'fld_description' => 'PayPal Payment',
			'fld_createdDt' => date("Y-m-d H:i:s", time())
		);
                if(isset($_SESSION['paymentProcess'])){
			unset($_SESSION['paymentProcess']);
			$payID = $this->common_model->saveData("tbl_admin_payments",$data);
			//$this->common_model->updateData("fld_id",$iid,array('fld_isPaid'=>'0'),'tbl_incident_rm');
		        $this ->common_model->updateRmpaid($iid, $rmid);
                        
                }
		header("location:".base_url()."paypal/successPayment/".encode($payID)."");		
	 }   
         
         function successPayment($tid=''){
		$data['tid'] = $tid;
		$id = decode($tid);
	        $data['payment'] = $this->common_model->getAll(array("fld_id" => $id),'','tbl_admin_payments');
		$this->load->view('paypal/success_admin', $data);
	 }
         
        function smePayment(){
		//$id = decode($this->input->get('iid'));
                 $allIds = explode('|', $this->input->get('iid'));
                 $id = decode($allIds[0]); 
                 $smeid = $allIds[1];
                if($id){
			$data['iid'] = $this->input->get('iid');
                        $data['smeid'] = $smeid;
			$data['product'] = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id),'','tbl_incident');
			$this->load->view('paypal/sme_payment', $data);
		}
	}
        
       function paySMEAdmin($iid, $smeid){
		$id = decode($iid);
		$smeid = decode($smeid);
		$amount = $this->input->post('amount');
		$this->session->set_userdata('paymentProcess',654654);
		$returnURL = base_url().'paypal/processSMEAdmin'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		$product = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $id),'','tbl_incident');
		$auserID = AID; 
		$logo = base_url().'assets/images/logo.png';		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product[0]['fld_inci_title']);
		$this->paypal_lib->add_field('custom',  $id.'|'.$smeid );
                $this->paypal_lib->add_field('item_number',  str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT));
		$this->paypal_lib->add_field('amount', str_replace( ',', '', $amount));
		$this->paypal_lib->image($logo);		
		$this->paypal_lib->paypal_auto_form();
	}
        
        function processSMEAdmin(){
            //  $iid = decode($this->input->get('cm'));
               $allIds = explode('|', $this->input->get('cm'));
               $iid = $allIds[0]; 
               $smeid = $allIds[1]; 
                if ($smeid){
                    $fld_user_type = 1;
                }else{
                    $fld_user_type =0;
                }
		$data = array(
			'fld_auid' => AID,
                        'fld_uid' => $smeid,
                        'fld_user_type'=>$fld_user_type, 
			'fld_incident_id' => $iid,
			'fld_payment_id' => $this->input->get('tx'),
			'fld_payment_status' => $this->input->get('st'),
			'fld_total' => $this->input->get('amt'),
			'fld_currency' => $this->input->get('cc'),
			'fld_description' => 'PayPal Payment',
			'fld_createdDt' => date("Y-m-d H:i:s", time())
		);
                if(isset($_SESSION['paymentProcess'])){
			unset($_SESSION['paymentProcess']);
			$payID = $this->common_model->saveData("tbl_admin_payments",$data);
			//$this->common_model->updateData("fld_id",$iid,array('fld_isPaid'=>'0'),'tbl_incident');
		        $this ->common_model->updateSMEPaid($iid, $smeid);
                        
                }
		header("location:".base_url()."paypal/successPayment/".encode($payID)."");		
	}  
}