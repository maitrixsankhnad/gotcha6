<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$login['loginType'] = 'user';
		$this->load->view('signin_gotcha6',$login);
	}
	public function linkedin()
	{
		$this->load->view('linkedin');
		$this->session->set_userdata('UID',$_SESSION['UID']);
		redirect('dashboard');
	}
	public function google()
	{
		$this->load->view('google');
	}
}
