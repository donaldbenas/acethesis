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
<<<<<<< HEAD
=======
		//bredcrumbs home
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
	}
	
	function index()
	{		
		$this->load->view('admin/header');
		array_push($this->nav['breadcrumbs'],
				array("href" => "", "label"=> "Management")
		);
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
<<<<<<< HEAD
=======
		//
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
		
		$this->load->model('usermodel');
		switch($this->uri->segment(3)){
			
<<<<<<< HEAD
			case 'add'	:		
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Management"),
=======
			case 'add'	:
						$this->load->view('admin/header');
						//bredcrumbs home -> user -> add user
						array_push($this->nav['breadcrumbs'],
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
							array("href" => base_url()."manage/users", "label"=> "Users"),
							array("href" => "", "label"=> "Add User")
						);
						$this->load->view('admin/navbar',$this->nav);
<<<<<<< HEAD
						$this->load->view('admin/users-add');
						break;
			case 'edit'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Transaction"),
							array("href" => base_url()."manage/users", "label"=> "Users"),
							array("href" => "", "label"=> "Edit User")
						);	
						$this->load->view('admin/navbar',$this->nav);
=======
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
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
						$this->usermodel->id = $this->uri->segment(4);
						$data['users'] = $this->usermodel->load();
						$this->load->view('admin/users-edit',$data);
						$this->load->view('admin/footer');
						break;
			case 'delete'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Transaction"),
							array("href" => base_url()."manage/users", "label"=> "Users"),
							array("href" => "", "label"=> "Delete User")
						);	
						$this->load->view('admin/navbar',$this->nav);
						$this->load->view('admin/users-add');
						break;
			case 'save'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."transact", "label"=> "Transaction"),
							array("href" => "", "label"=> "Ordinary Customer")
						);	
						$this->load->view('admin/navbar',$this->nav);
						if($this->uri->segment(4)==""){
							$this->usermodel->save();
							redirect(base_url()."manage/users");
						}else{
							$this->usermodel->id = $this->uri->segment(4);
							$this->usermodel->save();
							redirect(base_url()."manage/users/edit/".$this->uri->segment(4));
						}
							
						break;
<<<<<<< HEAD
			default		:	
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."transact", "label"=> "Transaction"),
							array("href" => "", "label"=> "Ordinary Customer")
						);	
=======
			default		:		
						array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Users"));
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
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
<<<<<<< HEAD
							array("href" => base_url()."manage", "label"=> "Management"),
							array("href" => base_url()."manage/customers", "label"=> "Customers"),
							array("href" => "", "label"=> "Add Cutomer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->load->view('admin/customers-add');
						break;
			case 'edit'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Management"),
=======
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
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
							array("href" => base_url()."manage/customers", "label"=> "Customers"),
							array("href" => "", "label"=> "Edit Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
<<<<<<< HEAD
=======
						$this->load->model('customermodel');	
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
						$this->customermodel->id = $this->uri->segment(4);
						$data['customers'] = $this->customermodel->load();
						$this->load->view('admin/customers-edit',$data);
						$this->load->view('admin/footer');
						
						break;
			case 'delete'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Management"),
							array("href" => base_url()."manage/customers", "label"=> "Customers"),
							array("href" => "", "label"=> "Delete Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->load->view('admin/customers-add');
						break;
			case 'save'	:
						if($this->uri->segment(4)==""){
							$this->customermodel->status = $this->input->post('status');
							$this->customermodel->save();
							redirect(base_url()."manage/customers");
						}else{
							$this->customermodel->status = $this->input->post('status');
							$this->customermodel->id = $this->uri->segment(4);
							$this->customermodel->save();
							redirect(base_url()."manage/customers/edit/".$this->uri->segment(4));
						}
							
						break;
<<<<<<< HEAD
			default		:	
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Management"),
							array("href" => "", "label"=> "Customers")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->customermodel->status = "regular";
=======
			default		:		
						array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Customers"));
						$this->load->view('admin/navbar',$this->nav);
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
						$data['customers'] = $this->customermodel->load();
						$this->load->view('admin/customers',$data);
						break;						
			
		}
		$this->load->view('admin/footer');
	}
	
	function suppliers()
	{		
		$this->load->view('admin/header');
<<<<<<< HEAD
=======
	
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
		
		$this->load->model('suppliermodel');
		switch($this->uri->segment(3)){
			
			case 'add'	:
						array_push($this->nav['breadcrumbs'],
<<<<<<< HEAD
							array("href" => base_url()."manage", "label"=> "Management"),
							array("href" => base_url()."manage/suppliers", "label"=> "Suppliers"),
							array("href" => "", "label"=> "Add Supplier")
						);
						$data['company'] = $this->suppliermodel->loadCompanyName();
						$this->load->view('admin/navbar',$this->nav);
=======
							array("href" => base_url()."manage/suppliers", "label"=> "Suppliers"),
							array("href" => "", "label"=> "Add Supplier")
						);
						
						$this->load->view('admin/navbar',$this->nav);
						$data['customers'] = $this->suppliermodel->load();
						$this->load->model('suppliermodel');
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
						$this->load->view('admin/suppliers-add',$data);
						break;
			case 'edit'	:
						array_push($this->nav['breadcrumbs'],
<<<<<<< HEAD
							array("href" => base_url()."manage", "label"=> "Management"),
=======
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
							array("href" => base_url()."manage/suppliers", "label"=> "Suppliers"),
							array("href" => "", "label"=> "Edit Supplier")
						);
						$this->load->view('admin/navbar',$this->nav);
<<<<<<< HEAD
=======
						$this->load->model('suppliermodel');		
						//$this->suppliermodel->id = $id;	
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
						$this->suppliermodel->id = $this->uri->segment(4);
						$data['suppliers'] = $this->suppliermodel->load();
						$data['company'] = $this->suppliermodel->loadCompanyName();
						$this->load->view('admin/suppliers-edit',$data);
						$this->load->view('admin/footer');
						
						
						break;
			case 'delete'	:
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Management"),
							array("href" => base_url()."manage/suppliers", "label"=> "Suppliers"),
							array("href" => "", "label"=> "Delete Supplier")
						);
						$this->load->view('admin/navbar',$this->nav);
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
<<<<<<< HEAD
						array_push($this->nav['breadcrumbs'],
							array("href" => base_url()."manage", "label"=> "Management"),
							array("href" => "", "label"=> "Suppliers")
						);
						$this->load->view('admin/navbar',$this->nav);	
=======
						array_push($this->nav['breadcrumbs'],array("href" =>"", "label"=> "Suppliers"));
						$this->load->view('admin/navbar',$this->nav);
>>>>>>> cf5fa74431909026d957dfa9e4ea586e09d6681c
						$data['suppliers'] = $this->suppliermodel->load();
						$data['company'] = $this->suppliermodel->loadCompanyName();
						$this->load->view('admin/suppliers',$data);
						break;						
			
		}
		$this->load->view('admin/footer');
	}
	
}
