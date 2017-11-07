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
    }

    public function index()
    {
        $this->load->view('strip');
    }


    public function process()
    {  
		try {
			Stripe::setApiKey('sk_test_joA604sBfMeBKuif483lUNyB');
			$incidentID = decode($this->input->post('iid'));
			$incidentInfo = $this->common_model->getAll(array("fld_id" => $incidentID, "fld_isDeleted" => '0' ),'','tbl_incident');			
			$charge = Stripe_Charge::create(array(
				"amount" => str_replace( ',', '', $incidentInfo[0]['fld_plan_amount']),
				"currency" => "USD",
				"card" => $this->input->post('access_token'),
				"description" => "Stripe Payment"
			));
			// this line will be reached if no error was thrown above
			$data = array(
				'fld_uid' => UID,
				'fld_incident_id' => $incidentID,
				'fld_payment_id' => $charge->id,
				'fld_payment_status' => 'Completed',
				'fld_total' => $charge->amount,
				'fld_currency' => strtoupper($charge->currency),
				'fld_description' => $charge->description,
				'fld_createdDt' => date('Y-m-d H:i:s')
			);
			
			$payID = $this->common_model->saveData("tbl_payments",$data);
			$this->common_model->updateData("fld_id",$incidentID,array('fld_isPaid'=>'0'),'tbl_incident');
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
	    $data['payment'] = $this->common_model->getAll(array("fld_id" => $id),'','tbl_payments');
		$this->load->view('paypal/success', $data);
    }
}