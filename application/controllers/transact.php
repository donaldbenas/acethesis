<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transact extends CI_Controller
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
		$this->nav['active'] = "transact";
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
	}
	
	function index()
	{		
		$this->load->view('admin/header');
		array_push($this->nav['breadcrumbs'],
				array("href" => "", "label"=> "Transaction")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/footer');
	}
	
	function ordinary($page="")
	{		
		$this->load->view('admin/header');
		
		$this->load->model('customermodel');
		$this->load->model('invoicemodel');
		$this->load->model('suppliermodel');
		$this->load->model('productmodel');
		switch($page){
			
			case "edit"	:
						array_push($this->nav['breadcrumbs'],
								array("href" => base_url()."transact", "label"=> "Transaction"),
								array("href" => "", "label"=> "Ordinary Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$this->invoicemodel->id = $this->uri->segment(4);
						$data['invoices'] = $this->invoicemodel->load();
						$this->load->view('admin/ordinary',$data);
						break;
			case "save"	:
						break;
			case "invoice"	:
						array_push($this->nav['breadcrumbs'],
								array("href" => base_url()."transact", "label"=> "Transaction"),
								array("href" => base_url()."transact/ordinary/edit".$this->uri->segment(4), "label"=> "Ordinary Customer"),
								array("href" => "", "label"=> "Add New Invoice Item")
						);
						$this->load->view('admin/navbar',$this->nav);
						$data['company'] = $this->suppliermodel->loadCompanyName();
						if($this->uri->segment(5)!="")
							$this->productmodel->company = $this->uri->segment(5);
						$data['product'] = $this->productmodel->load();						
						if($this->uri->segment(6)!="")
							$this->productmodel->id = $this->uri->segment(6);
						$data['details'] = $this->productmodel->load();
						$this->load->view('admin/invoice-add',$data);
						break;						
			default		:
						$this->customermodel->status = "ordinary";
						$this->invoicemodel->customerID = $this->customermodel->save();
						$this->invoicemodel->id = $this->invoicemodel->save();
						$data['invoices'] = $this->invoicemodel->load();
						redirect(base_url()."transact/ordinary/edit/".$data['invoices']['0']->id);
						break;
		}
		
		$this->load->view('admin/footer');
	}
	
	function regular()
	{		
		$this->load->view('admin/header');
		array_push($this->nav['breadcrumbs'],
				array("href" => base_url()."transact", "label"=> "Transaction"),
				array("href" => "", "label"=> "Regular Customer")
		);
		$this->load->view('admin/navbar',$this->nav);
		$this->load->view('admin/regular');
		$this->load->view('admin/footer');
	}	
	
}
