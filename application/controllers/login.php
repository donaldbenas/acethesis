<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->database();
	}
	
	function index()
	{
		$data = array();
		if(!empty($_POST)){
			$this->load->model('usermodel');
			$query = $this->usermodel->verify($this->input->post('username'),$this->input->post('password'));

			if($query>0){
				$userdata = Array("user_login_key" => $query[0]->fld_userID);
				$this->session->set_userdata($userdata);
				redirect(base_url()."home",'refresh');
			} else {
				$data['errorMessage'] = "Invalid username or password. Please try again!";
				$data['successMessage'] = "";
				$data['username'] = "";
				$data['password'] = "";
			}
		}else{
			$data['errorMessage'] = "";
			$data['successMessage'] = "";
			$data['username'] = "";
			$data['password'] = "";
		}
		
		$this->load->view('admin/header');
		$this->load->view('admin/login',$data);
		$this->load->view('admin/footer');

	}
	
	function signup()
	{
		$this->load->model('usermodel');
		$valid = $this->usermodel->signup($this->input->post('key'));
		if($valid['validate']){
			$data['successMessage'] = "Successfully username <b>".$this->input->post('username')."</b> added!";
			$data['errorMessage'] = "";
			$data['username'] = "";
			$data['password'] = "";
		}else{
			$data['successMessage'] = "";
			$data['errorMessage'] = $valid['errorMessage'];
			$data['username'] = $valid['username'];
			$data['password'] = $valid['password'];
		}
		$this->load->view('admin/header');
		$this->load->view('admin/login',$data);
		$this->load->view('admin/footer');	
	}
	
}

