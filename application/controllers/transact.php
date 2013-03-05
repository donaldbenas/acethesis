<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transact extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('history');
		$this->load->database();
		if($this->session->userdata('user_login_key')=="")
			redirect(base_url()."login");
	}
	
	function index()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/login');
		$this->load->view('admin/footer');

	}
	
	function purchases()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/purchases');
		$this->load->view('admin/footer');
	}
	
	function expenses()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/expenses');
		$this->load->view('admin/footer');
	}
	
	function drawings()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/drawings');
		$this->load->view('admin/footer');
	}
	
	
}