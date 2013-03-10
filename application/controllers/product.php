<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller
{
	var $nav;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('history');
		$this->load->database();
		if($this->session->userdata('user_login_key')=="")
			redirect(base_url()."login");
		$this->nav['active'] = "product";
	}
	
	function index()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('productmodel');
		$data['products'] = $this->productmodel->load();
		$this->load->model('suppliermodel');
		$data['suppliers'] = $this->suppliermodel->load();
		$this->load->view('admin/products',$data);
		$this->load->view('admin/footer');

	}
	
	function add()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('suppliermodel');
		$data['suppliers'] = $this->suppliermodel->load();
		$this->load->view('admin/products-add',$data);
		$this->load->view('admin/footer');

	}
	
	function edit($id="")
	{	
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('productmodel');
		
		$this->productmodel->id = $id;
		$data['products'] = $this->productmodel->load();
		$this->load->model('suppliermodel');
		$data['suppliers'] = $this->suppliermodel->load();
		$this->load->view('admin/products-edit',$data);
		$this->load->view('admin/footer');

	}
	
	function delete()
	{		
		$this->load->view('admin/header');
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/products-delete');
		$this->load->view('admin/footer');

	}
	
	function save($id="")
	{	
		$this->load->model('productmodel');
		if($id==""){
			$this->productmodel->save();
			redirect(base_url()."product");
		}else{
			$this->productmodel->id = $id;
			$this->productmodel->save();
			redirect(base_url()."product/edit/".$id);
		}
	}
}
	
