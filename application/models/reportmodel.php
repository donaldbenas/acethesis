<?php

class reportModel extends CI_Model
{
	var $id;
	var $customerID;
	var $status;
	var $type;
	var $before;
	var $after;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->library('encrypt');
	}
	

	function customerload()
	{
		$this->db->select('tbl_invoices.*,tbl_customers.*,tbl_customers.fld_status AS fld_stat,tbl_invoicereceipts.*');
		$this->db->from('tbl_invoices');
		$this->db->join('tbl_customers','tbl_customers.id=tbl_invoices.fld_customerID','left');
		$this->db->join('tbl_invoicereceipts','tbl_invoicereceipts.fld_invoiceID=tbl_invoices.id','left');
		$this->db->where('tbl_invoices.fld_active','1');		
		if($this->before!=""&&$this->after!=""){
			$this->db->where('tbl_invoices.fld_dateCreated <=',$this->after);
			$this->db->where('tbl_invoices.fld_dateCreated >=',$this->before);
		}
		if($this->type!='0'){
			$this->db->where('tbl_customers.fld_status',$this->type);
		}
		if($this->status!='0'){
			$this->db->where('tbl_invoicereceipts.fld_status',$this->status);
		}
		$this->db->order_by('fld_code', 'asc');
		$query = $this->db->get();
		return $query->result();
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

