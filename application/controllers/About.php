<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*Sankhnad Mishra*/
class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	
	}
	public function index()
	{
		$this->load->view('about_gotcha6');
	}
}
