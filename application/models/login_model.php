<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function getAdminRow()
	{
		$query = $this->db->select("*");
		$query = $this->db->get_where('admin',array('id'=>1));
		return $query->row();
	}

	public function get()
	{
		$query = $this->db->select("*");
		$query = $this->db->get_where('admin',array('id'=>1));
		return $query->row();		
	}

	public function getAll()
	{
		$query = $this->db->select('*')->from('admin')->get();
		return $query->result_array();
	}
	
}