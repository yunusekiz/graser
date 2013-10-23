<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class montage_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('montage');
        $this->model_killer_library->setNameOfIdColumn('montage_id');
        $this->model_killer_library->setViewTableName('montage_view');
    }

	public function insertNewItemDetail($montage_title)
	{
		$insert_data = array(
								'montage_title'	=> $montage_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($montage_big_photo, $montage_thumb_photo, $montage_id=NULL)
	{
		if ($montage_id == NULL)
			$montage_id = $this->last_record_id;

		$insert_data = array(
								'montage_id'			 => $montage_id,
								'montage_big_photo'	 => $montage_big_photo,
								'montage_thumb_photo' => $montage_thumb_photo
							);

		$this->model_killer_library->setTableName('montage_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($montage_id, $montage_title)
	{
		$update_data = array(
								'montage_title' 	  => $montage_title
							);
		return $this->model_killer_library->updateRow($montage_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'montage_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}
}