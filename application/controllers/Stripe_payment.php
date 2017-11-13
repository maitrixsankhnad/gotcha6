<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');
/**
 * Created by Sankhnad Mishra.
 * User: admin
 * Date: 04th Sep 2017
 * Time: 1:00 PM
 */
class Stripe_payment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('user_model','common_model'));
        define('UID', userID());
		define('AID', adminID());
    }

    public function index()
    {
		$id = decode($this->input->get('iid'));
		if($id){
			$data['iid'] = $this->input->get('iid');
			$data['user'] = $this->common_model->getAll(array("fld_isDeleted" => 0,"fld_status" => 0, "fld_id" => UID),'','tbl_user');
			$data['product'] = $this->common_model->getAll(array("fld_isDeleted" => 0,"fld_isPaid" => 1, "fld_id" => $id),'','tbl_incident');
			$data['usertype'] = 0;
			if(count($data['product'])>0){
				$this->load->view('strip', $data);
			}else{
				echo 'Congratulations!! You have already paid your due amount. Go back and login';	
			}
		}
		
    }


    public function process()
    {  
		try {
			Stripe::setApiKey('sk_test_joA604sBfMeBKuif483lUNyB');
			$incidentID = decode($this->input->post('iid'));
			$userIDP = decode($this->input->post('uid'));
			$usertype = $this->input->post('usertype');
			$incidentInfo = $this->common_model->getAll(array("fld_id" => $incidentID, "fld_isDeleted" => '0' ),'','tbl_incident');		
			if(AID){
				$amtPaymnt = $this->input->post('amt');
			}else{
				$getBlance = getBalanceDueAmt($incidentID, TRUE, TRUE);
				$getBlance = (explode('~',$getBlance));	
				$amtPaymnt = $getBlance[1];	
			}
			
			$charge = Stripe_Charge::create(array(
				"amount" => str_replace( ',', '', $amtPaymnt),
				"currency" => "USD",
				"card" => $this->input->post('access_token'),
				"description" => "Stripe Payment"
			));
			// this line will be reached if no error was thrown above
			$data = array(
				'fld_uid' => UID,
				'fld_currency' => strtoupper($charge->currency),
				'fld_incident_id' => $incidentID,
				'fld_payment_id' => $charge->id,
				'fld_payment_status' => 'Completed',
				'fld_total' => $charge->amount,					
				'fld_description' => $charge->description,
				'fld_createdDt' => date('Y-m-d H:i:s')
			);
			if(AID){
				$data['fld_auid'] = AID;
				$data['fld_uid'] = $userIDP;
				$data['fld_user_type'] = $usertype;
				$data['fld_uid'] = $userIDP;
				$payID = $this->common_model->saveData("tbl_admin_payments",$data);
				//$tblIncUser = $usertype == '0' ? 'tbl_incident_rm':'tbl_incident_sme';
				//$this->common_model->updateData("fld_incident_id",$incidentID,array('fld_isPaid'=>'0'),$tblIncUser);
                                if($usertype == '0'){
                                    $this ->common_model->updateRmpaid($incidentID, $userIDP);   
                                   }else {
                                       $this ->common_model->updateSMEPaid($incidentID, $userIDP); 
                                }
			}else{
				$payID = $this->common_model->saveData("tbl_payments",$data);
				$this->common_model->updateData("fld_id",$incidentID,array('fld_isPaid'=>'0'),'tbl_incident');
			}
			if ($payID) {
				echo json_encode(array('status' => 200, 'success' => 'Payment successfully completed.','tid' =>encode($payID)));
				exit();
			} else {
				echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
				exit();
			}		
		} catch (Stripe_CardError $e) {
			echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
			exit();
		} catch (Stripe_InvalidRequestError $e) {
			// Invalid parameters were supplied to Stripe's API
			echo json_encode(array('status' => 500, 'error' => $e->getMessage()));
			exit();
		} catch (Stripe_AuthenticationError $e) {
			// Authentication with Stripe's API failed
			echo json_encode(array('status' => 500, 'error' => AUTHENTICATION_STRIPE_FAILED));
			exit();
		} catch (Stripe_ApiConnectionError $e) {
			// Network communication with Stripe failed
			echo json_encode(array('status' => 500, 'error' => NETWORK_STRIPE_FAILED));
			exit();
		} catch (Stripe_Error $e) {
			// Display a very generic error to the user, and maybe send
			echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
			exit();
		} catch (Exception $e) {
			// Something else happened, completely unrelated to Stripe
			echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
			exit();
		}
    }

    public function success($tid=''){
        $data['tid'] = $tid;
		$id = decode($tid);
		if(AID){
			$data['payment'] = $this->common_model->getAll(array("fld_id" => $id),'','tbl_admin_payments');
			$data['product'] = $this->common_model->getAll(array("fld_id" => $data['payment'][0]['fld_incident_id']),'','tbl_incident');
			$data['user'] = $this->common_model->getAll(array("fld_id" => $data['payment'][0]['fld_uid']),'','tbl_user');
			$this->load->view('paypal/success_admin', $data);
		}else{
			$data['payment'] = $this->common_model->getAll(array("fld_id" => $id),'','tbl_payments');
			$this->load->view('paypal/success', $data);
                        $iid = $data['payment'][0]['fld_incident_id'];
                        $paymentId  = $data['payment'][0]['fld_payment_id'];
                        $paymentAmount = $data['payment'][0]['fld_total'];
                        $paymentDate = $data['payment'][0]['fld_createdDt'];
                        $this->sendPaymentMail($id , $iid, $paymentId ,$paymentAmount, $paymentDate);
		}
    }
	
    
    public function sendPaymentMail($id ,$iid,$paymentId,$paymentAmount, $paymentDate) {
        if ($iid) {            
            $userData = userInfo(UID);
	    $this->load->helper('email_helper');
            
            $data['case'] = 'payment';
            
            $data['amount'] =  $paymentAmount;
            $data['TransactionId'] = $paymentId;
            $data['fld_createdDt'] = $paymentDate;
            $data['payId']         = $id;
            $data['incidentid'] = $iid;
            $data['name']       = $userData[0]['fld_fname'];
            
            $emailConfig['subject'] = 'Incident Payment - ' . LOGO_NAME;
            $emailConfig['to_email'] = $userData[0]['fld_email'];
           
            sendEmail($data, $emailConfig);          
        }
    }
	public function byAdmin(){
		$iid = decode($this->input->get('iid'));
		$rid = decode($this->input->get('rid'));
		$paynow = $this->input->get('paynow');
		$usertype = $this->input->get('usertype');
		if($iid){
			$data['user'] = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $rid),'','tbl_user');
			$data['product'] = $this->common_model->getAll(array("fld_isDeleted" => 0, "fld_id" => $iid),'','tbl_incident');
			$data['paynow'] = $paynow;
			$data['usertype'] = $usertype;
			if(count($data['product'])>0){
				$this->load->view('strip', $data);
			}else{
				echo 'Congratulations!! You have already paid your due amount. Go back and login';	
			}
		}
		
			
	}
}