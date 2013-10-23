<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gal_home_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('gal_home');
        $this->model_killer_library->setNameOfIdColumn('gal_home_id');
        $this->model_killer_library->setViewTableName('gal_home_view');
    }

	public function insertNewItemDetail($gal_home_title)
	{
		$insert_data = array(
								'gal_home_title'	=> $gal_home_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($gal_home_big_photo, $gal_home_thumb_photo, $gal_home_id=NULL)
	{
		if ($gal_home_id == NULL)
			$gal_home_id = $this->last_record_id;

		$insert_data = array(
								'gal_home_id'			 => $gal_home_id,
								'gal_home_big_photo'	 => $gal_home_big_photo,
								'gal_home_thumb_photo' => $gal_home_thumb_photo
							);

		$this->model_killer_library->setTableName('gal_home_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($gal_home_id, $gal_home_title)
	{
		$update_data = array(
								'gal_home_title' 	  => $gal_home_title
							);
		return $this->model_killer_library->updateRow($gal_home_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'gal_home_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}
}