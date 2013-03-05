<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales extends CI_Controller
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
	
	function cash()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/cash-register');
		$this->load->view('admin/footer');
	}
	
	function daily()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/daily-sales');
		$this->load->view('admin/footer');
	}
	
	function quick()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/quickCount');
		$this->load->view('admin/footer');
	}
	
	function inventory()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar');
		$this->load->view('admin/invent');
		$this->load->view('admin/footer');
	}
	
}