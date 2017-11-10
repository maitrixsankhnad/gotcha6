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
    
	function paybyADMIN($iid, $rid, $amount, $userType){
		$inciID = decode($iid);
        $userID = decode($rid);		
		
        $this->session->set_userdata('paymentProcess',654654);
		$returnURL = base_url().'paypal/processPayment'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		$product = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $inciID),'','tbl_incident');
		$logo = base_url().'assets/images/logo.png';		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $product[0]['fld_plan_name']);
		$this->paypal_lib->add_field('custom', $inciID.'[~]'.$rid.'[~]'.AID.'[~]'.$userType);
		$this->paypal_lib->add_field('item_number',  str_pad($product[0]['fld_id'], 8, '0', STR_PAD_LEFT));
		$this->paypal_lib->add_field('amount', $amount);
		
		$this->paypal_lib->image($logo);		
		$this->paypal_lib->paypal_auto_form();
	}
	
	function processPayment(){
		$returnVal = $this->input->get('cm');
		$returnVal = explode('[~]',$returnVal);
		$this->session->set_userdata('paymentProcess',654654);
		$iid = $returnVal[0];
		$paidTo = decode($returnVal[1]);
		$paidBy = $returnVal[2];
		$userType = $returnVal[3];
		
		$data = array(
			'fld_auid' => $paidBy,
			'fld_uid' => $paidTo,
			'fld_user_type' => $userType,
			'fld_currency' => $this->input->get('cc'),
			'fld_incident_id' => $iid,
			'fld_payment_id' => $this->input->get('tx'),
			'fld_payment_status' => $this->input->get('st'),
			'fld_total' => $this->input->get('amt'),
			'fld_description' => 'PayPal Payment',
			'fld_createdDt' => date("Y-m-d H:i:s", time())
		);
		
		if(isset($_SESSION['paymentProcess'])){
			unset($_SESSION['paymentProcess']);
			$payID = $this->common_model->saveData("tbl_admin_payments",$data);
		}
		if($payID !=''){
			header("location:".base_url()."paypal/successPayment/".encode($payID)."");
		}else{
			echo 'Sucessfully Paid!!';	
		}
	}
	
    function successPayment($tid=''){
		$data['tid'] = $tid;
		$id = decode($tid);
	    $data['payment'] = $this->common_model->getAll(array("fld_id" => $id),'','tbl_admin_payments');
		$data['product'] = $this->common_model->getAll(array("fld_id" => $data['payment'][0]['fld_incident_id']),'','tbl_incident');
		$data['user'] = $this->common_model->getAll(array("fld_id" => $data['payment'][0]['fld_uid']),'','tbl_user');
		$this->load->view('paypal/success_admin', $data);
	 }
}