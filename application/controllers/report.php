<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class report extends CI_Controller
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
		$this->nav['active'] = "report";
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
	}
	
	function index()
	{		
		$this->load->view('admin/header');
		array_push($this->nav['breadcrumbs'],
				array("href" => "", "label"=> "Reports")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/footer');

	}
	
	function daily()
	{		
		$this->load->view('admin/header');
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."report", "label"=> "Reports"),
				array("href" => "", "label"=> "Daily Sales")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/daily');
		$this->load->view('admin/footer');
	}
	
	function stock()
	{		
		$this->load->view('admin/header');
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."report", "label"=> "Reports"),
				array("href" => "", "label"=> "Stock Invetory")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/stock');
		$this->load->view('admin/footer');
	}
}
	
