<?php

class customerModel extends CI_Model
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
			$this->db->from('tbl_customers');
			$this->db->order_by('fld_firstname', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_customers');
			$this->db->where('id',$this->id);
			$this->db->order_by('fld_firstname', 'asc');
			$this->db->limit(1);
			$query = $this->db->get();
			return $query->result();
		}
	}
	
	function save()
	{	
		if($this->id==""){
			$data = array(
			   'fld_status' => $this->input->post('status') ,
			   'fld_firstname' => $this->input->post('firstname') ,
			   'fld_middlename' => $this->input->post('middlename'),
			   'fld_lastname' => $this->input->post('lastname'),
			   'fld_address' => $this->input->post('address'),
			   'fld_mobile' => $this->input->post('mobile'),
			   'fld_telephone' => $this->input->post('telephone'),
			   'fld_email' => $this->input->post('email'),
			   'fld_dateCreated' => 'now()'
			);
			$this->db->insert('tbl_customers', $data); 
		}else{
			$data = array(
			   'fld_status' => $this->input->post('status') ,
			   'fld_firstname' => $this->input->post('firstname') ,
			   'fld_middlename' => $this->input->post('middlename'),
			   'fld_lastname' => $this->input->post('lastname'),
			   'fld_address' => $this->input->post('address'),
			   'fld_mobile' => $this->input->post('mobile'),
			   'fld_telephone' => $this->input->post('telephone'),
			   'fld_email' => $this->input->post('email')
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_customers', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('id', $this->id);
		$this->db->delete('tbl_customers'); 
	}
}

