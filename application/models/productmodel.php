<?php

class productModel extends CI_Model
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
			$this->db->from('tbl_products');
			$this->db->order_by('fld_supplierID', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_products');
			$this->db->where('id',$this->id);
			$this->db->order_by('fld_supplierID', 'asc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	function save()
	{
		if($this->id==""){
			$data = array(
			   'fld_supplierID' => $this->input->post('supplierID') ,
			   'fld_name' => $this->input->post('name') ,
			   'fld_description' => $this->input->post('description'),
			   'fld_code' => $this->input->post('code'),
			   'fld_dateCreated' => $this->input->post('dateCreated'),
			   'fld_price' => $this->input->post('price'),
			   'fld_amount' => $this->input->post('amount')
			);
			$this->db->insert('tbl_products', $data); 
		}else{
			$data = array(
			   'fld_supplierID' => $this->input->post('supplierID') ,
			   'fld_name' => $this->input->post('name') ,
			   'fld_description' => $this->input->post('description'),
			   'fld_code' => $this->input->post('code'),
			   'fld_dateCreated' => $this->input->post('dateCreated'),
			   'fld_price' => $this->input->post('price'),
			   'fld_amount' => $this->input->post('amount')
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_products', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_products'); 
	}
}

