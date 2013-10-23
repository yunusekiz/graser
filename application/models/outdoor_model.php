<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class outdoor_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('outdoor');
        $this->model_killer_library->setNameOfIdColumn('outdoor_id');
        $this->model_killer_library->setViewTableName('outdoor_view');
    }

	public function insertNewItemDetail($outdoor_title, $outdoor_detail, $outdoor_css)
	{
		$insert_data = array(
								'outdoor_title' 	=> $outdoor_title,
								'outdoor_detail' 	=> $outdoor_detail,
								'outdoor_css'		=> $outdoor_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($outdoor_big_photo, $outdoor_thumb_photo, $outdoor_id=NULL)
	{
		if ($outdoor_id == NULL)
			$outdoor_id = $this->last_record_id;

		$insert_data = array(
								'outdoor_id'			=> $outdoor_id,
								'outdoor_big_photo'		=> $outdoor_big_photo,
								'outdoor_thumb_photo'	=> $outdoor_thumb_photo
							);

		$this->model_killer_library->setTableName('outdoor_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($outdoor_id,$outdoor_title,$outdoor_detail,$outdoor_css)
	{
		$update_data = array(
								'outdoor_title' 	=> $outdoor_title,
								'outdoor_detail' 	=> $outdoor_detail,
								'outdoor_css'		=> $outdoor_css
							);
		return $this->model_killer_library->updateRow($outdoor_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deletePhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'outdoor_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}


}
