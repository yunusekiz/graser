<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class health_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('health');
        $this->model_killer_library->setNameOfIdColumn('health_id');
        $this->model_killer_library->setViewTableName('health_view');
    }

	public function insertNewItemDetail($health_title)
	{
		$insert_data = array(
								'health_title'	=> $health_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($health_big_photo, $health_thumb_photo, $health_id=NULL)
	{
		if ($health_id == NULL)
			$health_id = $this->last_record_id;

		$insert_data = array(
								'health_id'			 => $health_id,
								'health_big_photo'	 => $health_big_photo,
								'health_thumb_photo' => $health_thumb_photo
							);

		$this->model_killer_library->setTableName('health_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($health_id, $health_title)
	{
		$update_data = array(
								'health_title' 	  => $health_title
							);
		return $this->model_killer_library->updateRow($health_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'health_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}
}