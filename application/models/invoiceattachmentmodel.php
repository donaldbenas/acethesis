<?php

class invoiceattachmentModel extends CI_Model
{
	var $id;
	
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
			$this->db->from('tbl_invoiceattachments');
			$this->db->order_by('fld_name', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_invoiceattachments');
			$this->db->where('id',$this->id);
			$this->db->order_by('fld_name', 'asc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	function save()
	{
		if($this->id==""){
			$data = array(
			   'fld_invoiceID' => $this->input->post('invoice') ,
			   'fld_name' => $this->input->post('name') ,
			   'fld_size' => $this->input->post('size'),
			   'fld_dateCreated' => "now()"
			);
			$this->db->insert('tbl_invoiceattachments', $data); 
		}else{
			$data = array(
			   'fld_invoiceID' => $this->input->post('invoice') ,
			   'fld_name' => $this->input->post('name') ,
			   'fld_size' => $this->input->post('size')
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_invoiceattachments', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_invoiceattachments'); 
	}
}

