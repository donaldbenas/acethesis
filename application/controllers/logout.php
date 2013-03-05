<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->database();
	}
	
	function index()
	{	
		$this->session->sess_destroy();
		redirect(base_url()."login",'refresh');

	}
	
}
