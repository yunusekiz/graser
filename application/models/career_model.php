<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class career_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('career');
        $this->model_killer_library->setNameOfIdColumn('record_id');
    }

	public function insertNewCareerRecord($name_surname, $email, $phone, $position, $message, $cv_file_path)
	{
		$insert_data = array(
								'name_surname' 	=> $name_surname,
								'email' 		=> $email,
								'phone' 		=> $phone,
								'position' 		=> $position,
								'message' 		=> $message,
								'cv_file_path' 	=> $cv_file_path
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function read($record_id = NULL)
	{
		if ($record_id == NULL) 
		{
			$query = $this->db->select('*')->from('catalog')->get();
			return $query->result_array();
		}
		else
		{
			$query = $this->db->select('*')->from('catalog')->where('catalog_id',$record_id)->get();
			return $query->result_array();
		}
	}	

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

}
