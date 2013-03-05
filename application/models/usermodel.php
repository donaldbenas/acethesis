<?php

class userModel extends CI_Model
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
	

	function verify($username, $password)
	{
		$this->db->select('fld_userID,fld_username,fld_password');
		$this->db->from('tbl_user');
		$this->db->where('fld_username', $username);
		$this->db->where('fld_password', substr($this->encrypt->sha1($password),0,-10));
		$this->db->where('fld_active','1');
		$this->db->limit(1);
		
		$sql = " SELECT fld_userID, fld_username, fld_password ";
		$sql.= "	FROM tbl_user ";
		$sql.= "	WHERE fld_username = '".$username."' ";
		$sql.= "	AND fld_password = '".substr($this->encrypt->sha1($password),0,-10)."' ";
		$sql.= "	AND fld_active = '1'";
		$query = $this->db->query($sql);
		
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	
	function signup($key)
	{
		$this->db->select('fld_userID');
		$this->db->from('tbl_user');
		$this->db->where('fld_type', "manager");
		$this->db->where('fld_password', substr($this->encrypt->sha1($key),0,-10));
		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			
			$this->db->select('fld_userID');
			$this->db->from('tbl_user');
			$this->db->where('fld_username',str_replace("'","",stripslashes($this->input->post('username'))));
			$this->db->limit(1);
			$query = $this->db->get();
			if($query->num_rows() == 0)
			{
				$this->save();
				$data['validate'] = TRUE;
				return $data;
			}else{
				$data['validate'] = FALSE;
				$data['errorMessage'] = "Username is not available! Please try again.";
				$data['username'] = str_replace("'","",stripslashes($this->input->post('username')));
				$data['password'] = str_replace("'","",stripslashes($this->input->post('newpassword')));
				return $data;
			}
		}else
		{
			$data['username'] = str_replace("'","",stripslashes($this->input->post('username')));
			$data['password'] = str_replace("'","",stripslashes($this->input->post('newpassword')));
			$data['validate'] = FALSE;
			$data['errorMessage'] = "Administration key is invalid key! Please try again!";
			return $data;
		}
	}
	
	function save()
	{
		if($this->id==""){
			$sql = "INSERT INTO tbl_user( ";
			$sql.= "       fld_type, ";
			$sql.= "       fld_password, ";
			$sql.= "       fld_username, ";
			$sql.= "       fld_dateCreated, ";
			$sql.= "       fld_active) ";
			$sql.= "  VALUES (";
			$sql.= "       '".str_replace("'","",stripslashes($this->input->post('type')))."',";
			$sql.= "       '".substr($this->encrypt->sha1($this->input->post('newpassword')),0,-10)."',";
			$sql.= "       '".str_replace("'","",stripslashes($this->input->post('username')))."',";
			$sql.= "       now(),";
			$sql.= "       '1')";
			$this->db->query($sql);
		}
	}
}

