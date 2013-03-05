<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('history');
		$this->load->database();
		if($this->session->userdata('user_login_key')=="")
			redirect(base_url()."login");
	}
	
	function index(){
		$this->history->exclude();
		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/home');
		$this->load->view('admin/footer');
		
	}
	
	
}
