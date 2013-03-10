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
		$this->db->from('tbl_users');
		$this->db->where('fld_username', $username);
		$this->db->where('fld_password', substr($this->encrypt->sha1($password),0,-10));
		$this->db->where('fld_active','1');
		$this->db->limit(1);
		
		$sql = " SELECT fld_userID, fld_username, fld_password ";
		$sql.= "	FROM tbl_users ";
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
		$this->db->from('tbl_users');
		$this->db->where('fld_type', "manager");
		$this->db->where('fld_password', substr($this->encrypt->sha1($key),0,-10));
		$this->db->limit(1);
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			
			$this->db->select('fld_userID');
			$this->db->from('tbl_users');
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
	
	function load()
	{
		if($this->id==""){
			$this->db->select('*');
			$this->db->from('tbl_users');
			$this->db->order_by('fld_firstname', 'asc');
			$query = $this->db->get();
			return $query->result();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_users');
			$this->db->where('fld_userID',$this->id);
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
			   'fld_type' => $this->input->post('type') ,
			   'fld_username' => $this->input->post('username') ,
			   'fld_password' => $this->input->post('password') ,
			   'fld_firstname' => $this->input->post('firstname') ,
			   'fld_middlename' => $this->input->post('middlename'),
			   'fld_lastname' => $this->input->post('lastname'),
			   'fld_address' => $this->input->post('address'),
			   'fld_mobile' => $this->input->post('mobile'),
			   'fld_telephone' => $this->input->post('telephone'),
			   'fld_email' => $this->input->post('email'),
			   'fld_dateCreated' => 'now()',
			   'fld_active' => '1'
			);
			$this->db->insert('tbl_users', $data); 
		}else{
			$data = array(
			   'fld_type' => $this->input->post('type') ,
			   'fld_username' => $this->input->post('username') ,
			   'fld_password' => $this->input->post('password') ,
			   'fld_firstname' => $this->input->post('firstname') ,
			   'fld_middlename' => $this->input->post('middlename'),
			   'fld_lastname' => $this->input->post('lastname'),
			   'fld_address' => $this->input->post('address'),
			   'fld_mobile' => $this->input->post('mobile'),
			   'fld_telephone' => $this->input->post('telephone'),
			   'fld_email' => $this->input->post('email')
			);
			$this->db->where('fld_userID', $this->id);
			$this->db->update('tbl_users', $data); 
		}
		
	}
	
	function delete()
	{
		$this->db->where('fld_userID', $this->id);
		$this->db->delete('tbl_users'); 
	}
}

