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
		$this->load->model('reportmodel');
		if($this->input->post('date')!=""){
			$mydate = explode(" ~ ",$this->input->post('date'));
			$this->reportmodel->before = $mydate[0];
			$this->reportmodel->after = $mydate[1];
			$this->reportmodel->type = $this->input->post('type');
			$this->reportmodel->status = $this->input->post('status');
			$data['before'] = $mydate[0];
			$data['after'] = $mydate[1];
			$data['type'] = $this->input->post('type');
			$data['status'] = $this->input->post('status');
		}
		$data['customers'] = $this->reportmodel->customerload();
		$this->load->view('admin/daily', $data);
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
	
