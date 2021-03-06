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
		$this->load->helper('html');
		$this->load->helper('form');
		if($this->session->userdata('user_login_key')=="")
			redirect(base_url()."login");
		$this->nav['active'] = "transact";
		$this->nav['breadcrumbs'] = array(array("href" => base_url()."home", "label"=> "<i class=\"icon-home\"></i>"));
		$this->load->model('usermodel');
		$this->usermodel->id = $this->session->userdata('user_login_key');
		$data = $this->usermodel->load();
		$this->nav['previledge'] = $data[0]->fld_type;
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
		$this->load->model('invoiceitemmodel');
		$this->load->model('suppliermodel');
		$this->load->model('productmodel');
		switch($page){
			
			case "edit"	:
						$this->invoicemodel->id = $this->uri->segment(4);
						$data['invoices'] = $this->invoicemodel->load();
						$this->invoiceitemmodel->invoiceID = $this->invoicemodel->id;
						$data['invoiceItems'] = $this->invoiceitemmodel->load();
						$data['invoiceReceipts'] = $this->invoiceitemmodel->invoicereceiptload();
						$this->load->view('admin/ordinary',$data);
						break;
			case "save"	:
						$this->invoicemodel->id = $this->input->post('id');
						$this->invoicemodel->save();
						$this->invoicemodel->stock();
						redirect(base_url()."transact/ordinary/edit/".$this->input->post('id'));
						break;
			case "list"	:
						array_push($this->nav['breadcrumbs'],
								array("href" => base_url()."transact", "label"=> "Transaction"),
								array("href" => "", "label"=> "Ordinary Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$data['invoices'] = $this->invoicemodel->ordinaryload();
						$this->load->view('admin/ordinary-list',$data);
						break;
			case "delete"	:
						$this->invoicemodel->id = $this->uri->segment(4);
						$this->invoicemodel->delete();
						redirect(base_url()."transact/ordinary/list");
						break;
			case "invoice"	:
						$data['company'] = $this->suppliermodel->loadCompanyName();
						if($this->uri->segment(4)=='add'){
							if($this->uri->segment(6)!=""&&$this->uri->segment(6)!="0")
								$this->productmodel->company = $this->uri->segment(6);
							elseif($this->uri->segment(6)=="0")
								$this->productmodel->company = "";
							$data['product'] = $this->productmodel->load();						
							if($this->uri->segment(7)!="")
								$this->productmodel->id = $this->uri->segment(7);
							$data['details'] = $this->productmodel->load();
							$this->load->view('admin/invoice-add',$data);
						}elseif($this->uri->segment(4)=='edit'){
							if($this->uri->segment(6)!=""&&$this->uri->segment(6)!="0")
								$this->productmodel->company = $this->uri->segment(6);
							elseif($this->uri->segment(6)=="0")
								$this->productmodel->company = "";
							$data['product'] = $this->productmodel->load();						
							if($this->uri->segment(7)!="")
								$this->productmodel->id = $this->uri->segment(7);
							$data['details'] = $this->productmodel->load();
							$this->load->view('admin/invoice-edit',$data);
						}elseif($this->uri->segment(4)=='save'){
							if($this->input->post('invoiceitemID')==''){
								$this->invoiceitemmodel->save();
								echo link_tag('./css/bootstrap.min.css');							
								echo heading('Successfully saved!', 5, 'class="alert alert-success"');
								$data = array(
											  'type'        => 'button',
											  'class'       => 'btn btn-primary',
											  'content'       => '<i class="icon-plus icon-white"></i> Add Product',
											  'onclick'       => 'window.location.href=\''.base_url().'transact/ordinary/invoice/add/'.$this->input->post('invoice').'/0/0\'',
											);

								echo form_button($data);
								//redirect(base_url()."transact/ordinary/invoice/add/".$this->input->post('invoice'));
							}else{
								$this->invoiceitemmodel->id = $this->input->post('invoiceitemID');
								$this->invoiceitemmodel->save();	
								echo link_tag('./css/bootstrap.css');							
								echo heading('Successfully saved!', 5, 'class="alert alert-success"');
							}
						}
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
	
	function regular($page="")
	{		
		$this->load->view('admin/header');
		
		$this->load->model('customermodel');
		$this->load->model('invoicemodel');
		$this->load->model('invoiceitemmodel');
		$this->load->model('suppliermodel');
		$this->load->model('productmodel');
		switch($page){
			
			case "new"	:
						$this->invoicemodel->id = $this->invoicemodel->save();
						$data['invoices'] = $this->invoicemodel->load();
						redirect(base_url()."transact/regular/edit/".$data['invoices']['0']->id);
						break;			
			case "edit"	:		
						$this->customermodel->status = "regular";
						$data['customers'] = $this->customermodel->load();
						$this->invoicemodel->id = $this->uri->segment(4);
						$data['invoices'] = $this->invoicemodel->load();
						$this->invoiceitemmodel->invoiceID = $this->invoicemodel->id;
						$data['invoiceItems'] = $this->invoiceitemmodel->load();
						$data['invoiceReceipts'] = $this->invoiceitemmodel->invoicereceiptload();
						$this->load->view('admin/regular',$data);
						break;
			case "save"	:
						$this->invoicemodel->id = $this->input->post('id');
						$this->invoicemodel->save();
						$this->invoicemodel->stock();
						redirect(base_url()."transact/regular/edit/".$this->input->post('id'));
						break;
			case "delete"	:
						$this->invoicemodel->id = $this->uri->segment(4);
						$this->invoicemodel->delete();
						redirect(base_url()."transact/regular");
						break;
			case "invoice"	:
						$data['company'] = $this->suppliermodel->loadCompanyName();
						if($this->uri->segment(4)=='add'){
							if($this->uri->segment(6)!=""&&$this->uri->segment(6)!="0")
								$this->productmodel->company = $this->uri->segment(6);
							elseif($this->uri->segment(6)=="0")
								$this->productmodel->company = "";
							$data['product'] = $this->productmodel->load();						
							if($this->uri->segment(7)!="")
								$this->productmodel->id = $this->uri->segment(7);
							$data['details'] = $this->productmodel->load();
							$this->load->view('admin/invoice-add',$data);
						}elseif($this->uri->segment(4)=='edit'){
							if($this->uri->segment(6)!=""&&$this->uri->segment(6)!="0")
								$this->productmodel->company = $this->uri->segment(6);
							elseif($this->uri->segment(6)=="0")
								$this->productmodel->company = "";
							$data['product'] = $this->productmodel->load();						
							if($this->uri->segment(7)!="")
								$this->productmodel->id = $this->uri->segment(7);
							$data['details'] = $this->productmodel->load();
							$this->load->view('admin/invoice-edit',$data);
						}elseif($this->uri->segment(4)=='save'){
							if($this->input->post('invoiceitemID')==''){
								$this->invoiceitemmodel->save();
								echo link_tag('./css/bootstrap.min.css');							
								echo heading('Successfully saved!', 5, 'class="alert alert-success"');
								$data = array(
											  'type'        => 'button',
											  'class'       => 'btn btn-primary',
											  'content'       => '<i class="icon-plus icon-white"></i> Add Product',
											  'onclick'       => 'window.location.href=\''.base_url().'transact/ordinary/invoice/add/'.$this->input->post('invoice').'/0/0\'',
											);

								echo form_button($data);
								//redirect(base_url()."transact/ordinary/invoice/add/".$this->input->post('invoice'));
							}else{
								$this->invoiceitemmodel->id = $this->input->post('invoiceitemID');
								$this->invoiceitemmodel->save();	
								echo link_tag('./css/bootstrap.css');							
								echo heading('Successfully saved!', 5, 'class="alert alert-success"');
							}
						}
						break;						
			default		:
						array_push($this->nav['breadcrumbs'],
								array("href" => base_url()."transact", "label"=> "Transaction"),
								array("href" => "", "label"=> "Regular Customer")
						);
						$this->load->view('admin/navbar',$this->nav);
						$data['invoices'] = $this->invoicemodel->regularload();
						$this->load->view('admin/regular-list',$data);
						break;
		}
	
		$this->load->view('admin/footer');
	}	
	
}
