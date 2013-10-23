<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edu_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('edu_system');
        $this->model_killer_library->setNameOfIdColumn('edu_id');
    }

	public function insertNewItemDetail($edu_sys_title, $edu_sys_detail, $edu_sys_title_eng, $edu_sys_detail_eng)
	{
		$insert_data = array(
								'edu_sys_title'		  => $edu_sys_title,
								'edu_sys_detail' 	  => $edu_sys_detail,
								'edu_sys_title_eng'	  => $edu_sys_title_eng,
								'edu_sys_detail_eng'  => $edu_sys_detail_eng,
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($edu_id, $edu_sys_title, $edu_sys_detail, $edu_sys_title_eng, $edu_sys_detail_eng)
	{
		$update_data = array(
								'edu_sys_title'		  => $edu_sys_title,
								'edu_sys_detail' 	  => $edu_sys_detail,
								'edu_sys_detail_eng'  => $edu_sys_detail_eng,
								'edu_sys_title_eng'	  => $edu_sys_title_eng
							);
		return $this->model_killer_library->updateRow($edu_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}

