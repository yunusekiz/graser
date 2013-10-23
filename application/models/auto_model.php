<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auto_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('auto');
        $this->model_killer_library->setNameOfIdColumn('auto_id');
        $this->model_killer_library->setViewTableName('auto_view');
    }

	public function insertNewItemDetail($brand_id, $auto_title, $auto_detail, $auto_css)
	{
		$insert_data = array(
								'brand_id'		=> $brand_id,
								'auto_title' 	=> $auto_title,
								'auto_detail' 	=> $auto_detail,
								'auto_css' 		=> $auto_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($auto_big_photo, $auto_thumb_photo, $auto_id=NULL)
	{
		if ($auto_id == NULL)
			$auto_id = $this->last_record_id;

		$insert_data = array(
								'auto_id'			=> $auto_id,
								'auto_big_photo'	=> $auto_big_photo,
								'auto_thumb_photo'	=> $auto_thumb_photo
							);

		$this->model_killer_library->setTableName('auto_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($auto_id, $brand_id, $auto_title, $auto_detail, $auto_css)
	{
		$update_data = array(
								'brand_id'		=> $brand_id,
								'auto_title' 	=> $auto_title,
								'auto_detail' 	=> $auto_detail,
								'auto_css' 		=> $auto_css
							);
		return $this->model_killer_library->updateRow($auto_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'auto_photo_id';
		$table_name = 'auto_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

	public function readParentRow()
	{
        $this->model_killer_library->setTableName('brand');
        $this->model_killer_library->setNameOfIdColumn('brand_id');
        return $this->model_killer_library->readParentRow();		
	}
}