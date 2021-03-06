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
		//bredcrumbs home
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
		$this->load->model('usermodel');
		$this->usermodel->id = $this->session->userdata('user_login_key');
		$data = $this->usermodel->load();
		$this->nav['previledge'] = $data[0]->fld_type;
	}
	
	function index()
	{		
		$this->load->view('admin/header');		
		//bredcrumbs home -> products
		array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Products"));
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('productmodel');
		$data['products'] = $this->productmodel->load();
		$this->load->model('suppliermodel');
		$data['suppliers'] = $this->suppliermodel->load();
		$data['company'] = $this->suppliermodel->loadCompanyName();
		$this->load->view('admin/products',$data);
		$this->load->view('admin/footer');

	}
	
	function add()
	{		
		$this->load->view('admin/header');
		//bredcrumbs home -> products -> add product items
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."product", "label"=> "Products"),
				array("href" => "", "label"=> "Add Product Item")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('suppliermodel');
		$data['suppliers'] = $this->suppliermodel->load();
		$data['company'] = $this->suppliermodel->loadCompanyName();
		$this->load->view('admin/products-add',$data);
		$this->load->view('admin/footer');

	}
	
	function edit($id="")
	{	
		$this->load->view('admin/header');
		//bredcrumbs home -> products -> edit product items
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."product", "label"=> "Products"),
				array("href" => "", "label"=> "Edit Product Item")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->model('productmodel');		
		$this->productmodel->id = $id;
		$data['products'] = $this->productmodel->load();
		$this->load->model('suppliermodel');
		$data['suppliers'] = $this->suppliermodel->load();
		$data['company'] = $this->suppliermodel->loadCompanyName();
		$this->load->view('admin/products-edit',$data);
		$this->load->view('admin/footer');

	}
	
	function delete($id="")
	{		
		$this->load->model('productmodel');
		$this->productmodel->id = $id;
		$this->productmodel->delete();
		redirect(base_url()."product");

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
	
