<?php

class productModel extends CI_Model
{
	var $id;
	var $company;
	var $date;
	var $product;
	var $supplier;
	
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
		if($this->company==""){
			if($this->id==""){
				$this->db->select('*');
				$this->db->from('tbl_products');
				$this->db->order_by('fld_productCompanyID,fld_name', 'asc');
				$query = $this->db->get();
				return $query->result();
			}else{
				$this->db->select('*');
				$this->db->from('tbl_products');
				$this->db->where('id',$this->id);
				$this->db->order_by('fld_productCompanyID', 'asc');
				$this->db->limit(1);
				$query = $this->db->get();
				return $query->result();
			}
		}else{
			if($this->id==""){
				$this->db->select('*');
				$this->db->from('tbl_products');
				$this->db->where('fld_productCompanyID',$this->company);
				$this->db->order_by('fld_productCompanyID,fld_name', 'asc');
				$query = $this->db->get();
				return $query->result();
			}else{
				$this->db->select('*');
				$this->db->from('tbl_products');
				$this->db->where('id',$this->id);
				$this->db->where('fld_productCompanyID',$this->company);
				$this->db->order_by('fld_productCompanyID', 'asc');
				$this->db->limit(1);
				$query = $this->db->get();
				return $query->result();
			}
		}
	}
	
	function save()
	{
		if($this->id==""){
			$data = array(
			   'fld_productCompanyID' => $this->input->post('supplierID') ,
			   'fld_name' => $this->input->post('name') ,
			   'fld_description' => $this->input->post('description'),
			   'fld_code' => $this->input->post('code'),
			   'fld_dateCreated' => 'now()',
			   'fld_price' => $this->input->post('price'),
			   'fld_amount' => $this->input->post('amount')
			);
			$this->db->insert('tbl_products', $data); 
		}else{
			$data = array(
			   'fld_productCompanyID' => $this->input->post('supplierID') ,
			   'fld_name' => $this->input->post('name') ,
			   'fld_description' => $this->input->post('description'),
			   'fld_code' => $this->input->post('code'),
			   'fld_price' => $this->input->post('price'),
			   'fld_amount' => $this->input->post('amount')
			);
			$this->db->where('id', $this->id);
			$this->db->update('tbl_products', $data); 
		}
		
	}
	
	function delete()
	{
		if($this->id!=""){
			$this->db->where('id', $this->id);
			$this->db->delete('tbl_products'); 
		}
	}
	
	function supplier()
	{
		$this->db->select('*');
		$this->db->from('tbl_productCompany');
		$this->db->order_by('fld_name');
		$query = $this->db->get();
		return $query->result();
	}
	
	function stockproductload()
	{
		$this->db->select('*');
		$this->db->from('tbl_stockProductLogs');
		$this->db->where('fld_dateCreated',$this->date);
		if($this->date!="")
			$this->db->where("fld_dateCreated",$this->date);
		if($this->supplier!="0")
			$this->db->like("fld_supplier",$this->supplier);
		if($this->product!="0")
			$this->db->like("fld_dateCreated",$this->product);
		$this->db->order_by('fld_supplier,fld_product', 'asc');
		$query = $this->db->get();
		return $query->result();
	}
}

