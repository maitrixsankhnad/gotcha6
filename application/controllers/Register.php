<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('html');
		$this->load->library('form_validation');
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$data['country'] = $this->user_model->getcountry();
		$this->load->view('signup_gotcha6',$data);
	}
	function filename_exists()
	{
		$email = $this->input->post('email');
		$exists = $this->user_model->checkRegister($email);
		echo $count = count($exists);
	}
}
