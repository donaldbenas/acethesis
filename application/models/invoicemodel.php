<?php

class invoiceModel extends CI_Model
{
	var $id;
	var $customerID;
	var $status;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->library('encrypt');
	}
	

	function load()
	{
		if($this->id==""){
			$this->db->select('*');
			$this->db->from('tbl_invoices');
			$this->db->order_by('fld_code', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_invoices');
			$this->db->where('id',$this->id);
			$this->db->order_by('fld_code', 'asc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	function save()
	{
		if($this->id==""){
			$data = array(
			   'fld_customerID' => $this->customerID ,
			   'fld_code' => '',
			   'fld_dateCreated' => date("Y-m-d"),
			   'fld_dueDate' => '0000-00-00',
			   'fld_active' => '0'
			);
			$this->db->insert('tbl_invoices', $data); 
			$myid = $this->db->insert_id();
			
			$data = array(
			   'fld_invoiceID' => $myid ,
			   'fld_dateCreated' => date("Y-m-d")	
			);
			$this->db->insert('tbl_invoiceReceipts', $data); 
			return $myid;
		}else{			
			if($this->input->post('type')=='regular'){
				$data = array(
				   'fld_customerID' => $this->input->post('customer'),
				   'fld_code' => $this->input->post('invoiceID'),
				   'fld_dueDate' => date("Y-m-d",strtotime(date("Y-m-d")." + ".$this->input->post('dueDate')." days")),
				   'fld_active' => '1'
				);
			}else{
				$data = array(
				   'fld_code' => $this->input->post('invoiceID'),
				   'fld_dueDate' => date("Y-m-d"),
				   'fld_active' => '1'
				);
			}
			$this->db->where('id', $this->id);
			$this->db->update('tbl_invoices', $data); 
			
			if($this->input->post('type')=='regular'){
				if($this->input->post('paid')!=""&&$this->input->post('price')!=""){ 
					if(($this->input->post('price') - $this->input->post('paid'))>0) 
						$this->status = "unpaid"; 
					else 
						$this->status = "paid"; 
				}else
					$this->status = "unpaid"; 
			}else{
				$this->status = 'paid';
			}
				
			$data = array(
			   'fld_orNumber' => $this->input->post('ornumber'),
			   'fld_status' => $this->status,
			   'fld_paid' => $this->input->post('paid'),
			   'fld_price' => $this->input->post('price'),
			);
			$this->db->where('fld_invoiceID', $this->id);
			$this->db->update('tbl_invoiceReceipts', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_invoices'); 
	}
	
	function ordinaryload(){
		$this->db->select('tbl_invoices.*,tbl_invoicereceipts.*');
		$this->db->from('tbl_customers');
		$this->db->join('tbl_invoices', 'tbl_invoices.fld_customerID = tbl_customers.id', 'left');
		$this->db->join('tbl_invoicereceipts', 'tbl_invoicereceipts.fld_invoiceID = tbl_invoices.id', 'left');
		$this->db->where('tbl_invoices.fld_active','1');
		$this->db->where('tbl_invoices.fld_dateCreated',date("Y-m-d"));
		$this->db->where('tbl_customers.fld_status','ordinary');
		$this->db->order_by('tbl_invoices.id','asc');
		$query = $this->db->get();
		return $query->result();
		
	}
	
	function regularload(){
		$this->db->select('tbl_customers.*,tbl_invoices.*,tbl_invoicereceipts.*');
		$this->db->from('tbl_customers');
		$this->db->join('tbl_invoices', 'tbl_invoices.fld_customerID = tbl_customers.id', 'left');
		$this->db->join('tbl_invoicereceipts', 'tbl_invoicereceipts.fld_invoiceID = tbl_invoices.id', 'left');
		$this->db->where('tbl_invoices.fld_active','1');
		$this->db->where('tbl_invoices.fld_dateCreated',date("Y-m-d"));
		$this->db->where('tbl_customers.fld_status','regular');
		$this->db->order_by('tbl_invoices.id','asc');
		$query = $this->db->get();
		return $query->result();
		
	}
}

