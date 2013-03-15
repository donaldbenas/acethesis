<?php

class supplierModel extends CI_Model
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
			$this->db->from('tbl_suppliers');
			$this->db->order_by('fld_productCompanyID', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_suppliers');
			$this->db->where('id',$this->id);
			$this->db->order_by('fld_productCompanyID', 'asc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	function save()
	{
		if($this->id==""){
			$data = array(
			   'fld_productCompanyID' => $this->input->post('name') ,
			   'fld_representativeName' => $this->input->post('representative') ,
			   'fld_representativeID' => $this->input->post('repID'),
			   'fld_address' => $this->input->post('address'),
			   'fld_mobile' => $this->input->post('mobile'),
			   'fld_telephone' => $this->input->post('telephone'),
			   'fld_email' => $this->input->post('email'),
			   'fld_dateCreated' => 'now()'
			);
			$this->db->insert('tbl_suppliers', $data); 
		}else{
			$data = array(
			   'fld_productCompanyID' => $this->input->post('name') ,
			   'fld_representativeName' => $this->input->post('representative') ,
			   'fld_representativeID' => $this->input->post('repID'),
			   'fld_address' => $this->input->post('address'),
			   'fld_mobile' => $this->input->post('mobile'),
			   'fld_telephone' => $this->input->post('telephone'),
			   'fld_email' => $this->input->post('email'),
			   'fld_dateCreated' => 'now()'
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_suppliers', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_suppliers'); 
	}
	
	function loadCompanyName($id=""){
		if($id==""){
			$this->db->select('*');
			$this->db->from('tbl_productCompany');
			$this->db->order_by('fld_name', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_productCompany');
			$this->db->where('id',$id);
			$this->db->order_by('fld_name', 'asc');
			$query = $this->db->get();
			return $query->result();
		}
	}
}

