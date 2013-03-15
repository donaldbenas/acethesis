<?php

class invoiceModel extends CI_Model
{
	var $id;
	var $customerID;
	
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
			   'fld_dateCreated' => 'now()',
			   'fld_dueDate' => '0000-00-00',
			   'fld_active' => '0'
			);
			$this->db->insert('tbl_invoices', $data); 
			return $this->db->insert_id();
		}else{
			$data = array(
			   'fld_code' => $this->input->post('code'),
			   'fld_dateCreated' => 'now()',
			   'fld_dueDate' => '0000-00-00',
			   'fld_active' => '1'
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_invoices', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_invoices'); 
	}
}

