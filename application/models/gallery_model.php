<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('gallery');
        $this->model_killer_library->setNameOfIdColumn('gal_photo_id');
    }

	public function insertNewItemDetail($gal_big_photo, $gal_thumb_photo)
	{
		$insert_data = array(
								'gal_big_photo'		  => $gal_big_photo,
								'gal_thumb_photo' 	  => $gal_thumb_photo
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}

