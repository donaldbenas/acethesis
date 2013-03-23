<?php

class invoiceItemModel extends CI_Model
{
	var $id;
	var $invoiceID;
	
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
			$this->db->from('tbl_invoiceItems');
			if($this->invoiceID!="")
				$this->db->where('fld_invoiceID',$this->invoiceID);
			$this->db->order_by('fld_productName', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_invoiceItems');
			$this->db->where('id',$this->id);
			if($this->invoiceID!="")
				$this->db->where('fld_invoiceID',$this->invoiceID);
			$this->db->order_by('fld_productName', 'asc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	function save()
	{
		if($this->id==""){
			$data = array(
			   'fld_invoiceID' => $this->input->post('invoice'),
			   'fld_productCompanyID' => $this->input->post('companyID'),
			   'fld_productID' => $this->input->post('productID'),
			   'fld_productQuantity' => $this->input->post('quantity'),
			   'fld_productName' => $this->input->post('name'),
			   'fld_productDescription' => $this->input->post('description'),
			   'fld_productCode' => $this->input->post('code'),
			   'fld_productPrice' => $this->input->post('price')
			);
			$this->db->insert('tbl_invoiceItems', $data); 
			return $this->db->insert_id();
		}else{
			$data = array(
			   'fld_invoiceID' => $this->input->post('invoice'),
			   'fld_productCompanyID' => $this->input->post('companyID'),
			   'fld_productID' => $this->input->post('productID'),
			   'fld_productQuantity' => $this->input->post('quantity'),
			   'fld_productName' => $this->input->post('name'),
			   'fld_productDescription' => $this->input->post('description'),
			   'fld_productCode' => $this->input->post('code'),
			   'fld_productPrice' => $this->input->post('price')
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_invoiceItems', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_invoiceItems'); 
	}	
	
	function invoicereceiptload()
	{
		$this->db->select('*');
		$this->db->from('tbl_invoiceReceipts');
		$this->db->where('fld_invoiceID', $this->invoiceID);
		$query = $this->db->get();
		return $query->result();
	}
}

