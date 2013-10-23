<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gal_out_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('gal_out');
        $this->model_killer_library->setNameOfIdColumn('gal_out_id');
        $this->model_killer_library->setViewTableName('gal_out_view');
    }

	public function insertNewItemDetail($gal_out_title)
	{
		$insert_data = array(
								'gal_out_title' => $gal_out_title
							);	

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($gal_out_big_photo, $gal_out_thumb_photo, $gal_out_id=NULL)
	{
		if ($gal_out_id == NULL)
			$gal_out_id = $this->last_record_id;

		$insert_data = array(
								'gal_out_id'			=> $gal_out_id,
								'gal_out_big_photo'	=> $gal_out_big_photo,
								'gal_out_thumb_photo'	=> $gal_out_thumb_photo
							);

		$this->model_killer_library->setTableName('gal_out_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($gal_out_id,$gal_out_title)
	{
		$update_data = array(
								'gal_out_title' 	=> $gal_out_title
							);
		return $this->model_killer_library->updateRow($gal_out_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deletePhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'gal_out_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

}