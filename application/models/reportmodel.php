<?php

class reportModel extends CI_Model
{
	var $id;
	var $customerID;
	var $status;
	var $type;
	var $date;
	var $product;
	var $supplier;
	var $sold;
	
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
		if($this->date!=""){
			$this->db->where('tbl_invoices.fld_dateCreated =',$this->date);
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
	
	function stockload(){
		
		$this->db->select('tbl_products.id AS id');
		$this->db->select('tbl_productCompany.fld_name AS fld_company');
		$this->db->select('tbl_products.fld_name AS fld_name');
		$this->db->select('tbl_products.fld_description AS fld_description');
		$this->db->select('tbl_products.fld_amount AS fld_quantity,');
		$this->db->select('tbl_products.fld_price AS fld_price');
		$this->db->from('tbl_products');
		$this->db->join('tbl_productCompany','tbl_productCompany.id=tbl_products.fld_productCompanyID','left');
		if($this->product!= "0")
			$this->db->like('tbl_products.fld_name',$this->product);
		if($this->supplier!= "0")
			$this->db->like('tbl_productCompany.fld_name',$this->supplier);
		$this->db->order_by('fld_company,fld_name', 'asc');
		$query = $this->db->get();
		$data = array();
		$tsold = 0;
		foreach($query->result() as $rows){
			$logs = array();
			$sold = 0;
			$sql = "SELECT  * ";
			$sql.= "  FROM tbl_stocks ";
			$sql.= "  WHERE fld_productID = ? ";
			$sql.= "  AND fld_dateCreated = ?"; 
			$querys = $this->db->query($sql,array($rows->id,$this->date));
			foreach($querys->result() as $row){
				$sold = $sold + $row->fld_amount;
			}
			$data[] = array(
				"id" => $rows->id,
				"company" => $rows->fld_company,
				"name" => $rows->fld_name,
				"description" => $rows->fld_description,
				"quantity" => $rows->fld_quantity,
				"price" => $rows->fld_price,
				"sold" => $sold
			);
			$tsold = $tsold + $sold;
		}
		if($this->sold=="")
			return $data;
		else
			return $tsold;
	}
	
	function stockupdate(){
		$tamount = 0;
		$cnt = count($this->input->post('id'));
		$id = $this->input->post('id');
		$amount = $this->input->post('amount');
		$company = $this->input->post('company');
		$name = $this->input->post('name');
		$description = $this->input->post('description');
		$quantity = $this->input->post('quantity');
		$price = $this->input->post('price');
		$sold = $this->input->post('sold');
		for($i=0;$i<$cnt;$i++){
			$data = array(
				"fld_amount" => $amount[$i]
			);
			$this->db->where('id', $id[$i]);
			$this->db->update('tbl_products', $data); 
			$logs = array(
				"fld_supplier" => $company[$i],
				"fld_product" => $name[$i],
				"fld_description" => $description[$i],
				"fld_quantity" => $quantity[$i],
				"fld_price" => $price[$i],
				"fld_sold" => $sold[$i],
				"fld_dateCreated" => date("Y-m-d")
			);
			$this->db->insert("tbl_stockProductLogs",$logs);
			$tamount = $tamount + $sold[$i];
		}
		$update = array(
			"fld_sold" => $tamount,
			"fld_dateCreated" => date("Y-m-d")
		);	
		$this->db->insert("tbl_stockUpdateLogs",$update);
	}
	
	function stockupdateload(){
		$this->db->select('*');
		$this->db->from('tbl_stockUpdateLogs');
		$this->db->where("fld_dateCreated",date("Y-m-d"));
		$query = $this->db->get();
		if($query->num_rows()!='0'){
			$rr = $query->result();
			$data = array("count"=>$query->num_rows(),"sold"=> $rr[0]->fld_sold);
			return $data;
		}else{
			$data = array("count"=>$query->num_rows());
			return $data;
		}
	}
	
	function stocksave(){		
		$cnt = count($this->input->post('product'));	
		for($i=0;$i<$cnt;$i++){
			$data = array(
				"fld_amount" => $amount[$i]
			);
		}
	}
}

