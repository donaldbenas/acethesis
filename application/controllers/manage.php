<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manage extends CI_Controller
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
		$this->nav['active'] = "manage";
	}
	
	function index()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/footer');

	}
	
	function stocks()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/stocks');
		$this->load->view('admin/footer');
	}
	
	function users()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/users');
		$this->load->view('admin/footer');
	}
	
	function customers()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/customers');
		$this->load->view('admin/footer');
	}
	
	function suppliers()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/suppliers');
		$this->load->view('admin/footer');
	}
	
}
