<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class closet_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('closet');
        $this->model_killer_library->setNameOfIdColumn('closet_id');
        $this->model_killer_library->setViewTableName('closet_view');
    }

	public function insertNewItemDetail($closet_title)
	{
		$insert_data = array(
								'closet_title'	=> $closet_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($closet_big_photo, $closet_thumb_photo, $closet_id=NULL)
	{
		if ($closet_id == NULL)
			$closet_id = $this->last_record_id;

		$insert_data = array(
								'closet_id'			 => $closet_id,
								'closet_big_photo'	 => $closet_big_photo,
								'closet_thumb_photo' => $closet_thumb_photo
							);

		$this->model_killer_library->setTableName('closet_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($closet_id, $closet_title)
	{
		$update_data = array(
								'closet_title' 	  => $closet_title
							);
		return $this->model_killer_library->updateRow($closet_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'closet_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}
}