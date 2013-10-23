<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about_model extends CI_Model {

	public function readRow()
	{
		$query = $this->db->select('*')->from('about_us')->where('id',1)->get();
		if($query->num_rows()>0)
			return $query->result_array();
		else
			return FALSE;
	}	
	
	public function updateAboutUs($about_detail_tr, $about_detail_eng)
	{
		$data = array(	'about_detail_tr'	=> $about_detail_tr,
						'about_detail_eng' 	=> $about_detail_eng
					 );
					  
		$query = $this->db->where('id',1)->update('about_us',$data);
		
		if($this->db->_error_message() == NULL)
			return TRUE;
		else
			return FALSE;			  
	}

}