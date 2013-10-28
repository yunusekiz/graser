<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tour_model extends CI_Model {

	public function readRow()
	{
		$query = $this->db->select('*')->from('tour')->where('id',1)->get();
		if($query->num_rows()>0)
			return $query->result_array();
		else
			return FALSE;
	}	
	
	public function updateItemDetail($tour_detail, $tour_video)
	{
		$data = array(	'tour_detail'	=> $tour_detail,
						'tour_video' 	=> $tour_video
					 );
					  
		$query = $this->db->where('id',1)->update('tour',$data);
		
		if($this->db->_error_message() == NULL)
			return TRUE;
		else
			return FALSE;			  
	}

}