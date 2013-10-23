<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class type_home_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('type_home');
        $this->model_killer_library->setNameOfIdColumn('type_home_id');
        $this->model_killer_library->setViewTableName('type_home_view');
    }

	public function insertNewItemDetail($type_home_title)
	{
		$insert_data = array(
								'type_home_title' => $type_home_title
							);	

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($type_home_big_photo, $type_home_thumb_photo, $type_home_id=NULL)
	{
		if ($type_home_id == NULL)
			$type_home_id = $this->last_record_id;

		$insert_data = array(
								'type_home_id'			=> $type_home_id,
								'type_home_big_photo'	=> $type_home_big_photo,
								'type_home_thumb_photo'	=> $type_home_thumb_photo
							);

		$this->model_killer_library->setTableName('type_home_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($type_home_id,$type_home_title)
	{
		$update_data = array(
								'type_home_title' 	=> $type_home_title
							);
		return $this->model_killer_library->updateRow($type_home_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deletePhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'type_home_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

}