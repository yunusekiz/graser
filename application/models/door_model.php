<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class door_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('door');
        $this->model_killer_library->setNameOfIdColumn('door_id');
        $this->model_killer_library->setViewTableName('door_view');
    }

	public function insertNewItemDetail($door_title)
	{
		$insert_data = array(
								'door_title'	=> $door_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($door_big_photo, $door_thumb_photo, $door_id=NULL)
	{
		if ($door_id == NULL)
			$door_id = $this->last_record_id;

		$insert_data = array(
								'door_id'			 => $door_id,
								'door_big_photo'	 => $door_big_photo,
								'door_thumb_photo' => $door_thumb_photo
							);

		$this->model_killer_library->setTableName('door_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($door_id, $door_title)
	{
		$update_data = array(
								'door_title' 	  => $door_title
							);
		return $this->model_killer_library->updateRow($door_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'door_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}
}