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
		//bredcrumbs home
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
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
		//
		
		$this->load->model('usermodel');
		switch($this->uri->segment(3)){
			
			case 'add'	:
						$this->load->view('admin/header');
						//bredcrumbs home -> user -> add user
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage/users", "label"=> "Users"),
							array("href" => "", "label"=> "Add User")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->load->model('usermodel');
						$data['users'] = $this->usermodel->load();
						$this->load->view('admin/users-add',$data);
						break;
			case 'edit'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage/users", "label"=> "Users"),
							array("href" => "", "label"=> "Edit User")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->load->model('usermodel');	
						$this->usermodel->id = $this->uri->segment(4);
						$data['users'] = $this->usermodel->load();
						$this->load->view('admin/users-edit',$data);
						$this->load->view('admin/footer');
						break;
			case 'delete'	:
						$this->load->view('admin/users-add');
						break;
			case 'save'	:
						if($this->uri->segment(4)==""){
							$this->usermodel->save();
							redirect(base_url()."manage/users");
						}else{
							$this->usermodel->id = $this->uri->segment(4);
							$this->usermodel->save();
							redirect(base_url()."manage/users/edit/".$this->uri->segment(4));
						}
							
						break;
			default		:		
						array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Users"));
						$this->load->view('admin/navbar',$this->nav);
						$data['users'] = $this->usermodel->load();
						$this->load->view('admin/users',$data);
						break;						
			
		}
		
		$this->load->view('admin/footer');
	}
	
	function customers()
	{		
		$this->load->view('admin/header');
		
		$this->load->model('customermodel');
		switch($this->uri->segment(3)){
			
			case 'add'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage/customers", "label"=> "Customers"),
							array("href" => "", "label"=> "Add Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$data['customers'] = $this->customermodel->load();
						$this->load->model('customermodel');
			
						$this->load->view('admin/customers-add',$data);
						break;
			case 'edit'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage/customers", "label"=> "Customers"),
							array("href" => "", "label"=> "Edit Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->load->model('customermodel');	
						$this->customermodel->id = $this->uri->segment(4);
						$data['customers'] = $this->customermodel->load();
						$this->load->view('admin/customers-edit',$data);
						$this->load->view('admin/footer');
						
						break;
			case 'delete'	:
						$this->load->view('admin/customers-add');
						break;
			case 'save'	:
						if($this->uri->segment(4)==""){
							$this->customermodel->save();
							redirect(base_url()."manage/customers");
						}else{
							$this->customermodel->id = $this->uri->segment(4);
							$this->customermodel->save();
							redirect(base_url()."manage/customers/edit/".$this->uri->segment(4));
						}
							
						break;
			default		:		
						array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Customers"));
						$this->load->view('admin/navbar',$this->nav);
						$data['customers'] = $this->customermodel->load();
						$this->load->view('admin/customers',$data);
						break;						
			
		}
		$this->load->view('admin/footer');
	}
	
	function suppliers()
	{		
		$this->load->view('admin/header');
	
		
		$this->load->model('suppliermodel');
		switch($this->uri->segment(3)){
			
			case 'add'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage/suppliers", "label"=> "Suppliers"),
							array("href" => "", "label"=> "Add Supplier")
						);
						
						$this->load->view('admin/navbar',$this->nav);
						$data['customers'] = $this->suppliermodel->load();
						$this->load->model('suppliermodel');
						$this->load->view('admin/suppliers-add',$data);
						break;
			case 'edit'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage/suppliers", "label"=> "Suppliers"),
							array("href" => "", "label"=> "Edit Supplier")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->load->model('suppliermodel');		
						//$this->suppliermodel->id = $id;	
						$this->suppliermodel->id = $this->uri->segment(4);
						$data['suppliers'] = $this->suppliermodel->load();
						$this->load->view('admin/suppliers-edit',$data);
						$this->load->view('admin/footer');
						
						
						break;
			case 'delete'	:
						$this->load->view('admin/suppliers-add');
						break;
			case 'save'	:
						if($this->uri->segment(4)==""){
							$this->suppliermodel->save();
							redirect(base_url()."manage/suppliers");
						}else{
							$this->suppliermodel->id = $this->uri->segment(4);
							$this->suppliermodel->save();
							redirect(base_url()."manage/suppliers/edit/".$this->uri->segment(4));
						}
							
						break;
			default		:		
						array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Suppliers"));
						$this->load->view('admin/navbar',$this->nav);
						$data['suppliers'] = $this->suppliermodel->load();
						$this->load->view('admin/suppliers',$data);
						break;						
			
		}
		$this->load->view('admin/footer');
	}
	
}
