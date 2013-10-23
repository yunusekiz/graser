<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class list_model extends CI_Model {

	protected $last_record_id;


	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('list');
        $this->model_killer_library->setNameOfIdColumn('list_id');
        $this->model_killer_library->setViewTableName('list_view');
        
    }

	public function insertNewItemDetail($list_title, $list_detail, $list_title_eng, $list_detail_eng)
	{
		$insert_data = array(
								'list_title' 		=> $list_title,
								'list_detail' 		=> $list_detail,
								'list_title_eng' 	=> $list_title_eng,
								'list_detail_eng'	=> $list_detail_eng
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($list_file_path,$list_id=NULL)
	{
		if ($list_id == NULL)
			$list_id = $this->last_record_id;

		$insert_data = array(
								'list_id'			 => $list_id,
								'list_file_path'	 => $list_file_path
							);

		$this->model_killer_library->setTableName('list_file');
		return $this->model_killer_library->insertNewRow($insert_data);
	}		

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function read($record_id = NULL)
	{
		if ($record_id == NULL) 
		{
			$query = $this->db->select('*')->from('list_view')->get();
			return $query->result_array();
		}
		else
		{
			$query = $this->db->select('*')->from('list_view')->where('list_id',$record_id)->get();
			return $query->result_array();
		}
	}	

	public function updateItemDetail($list_id, $list_title, $list_detail, $list_title_eng, $list_detail_eng)
	{
		$update_data = array(
								'list_title' 		=> $list_title,
								'list_detail' 		=> $list_detail,
								'list_title_eng' 	=> $list_title_eng,
								'list_detail_eng'	=> $list_detail_eng
							);

		return $this->model_killer_library->updateRow($list_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'list_file_id';
		$table_name = 'list_file';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}		

}