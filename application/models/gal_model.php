<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gal_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('gal');
        $this->model_killer_library->setNameOfIdColumn('gal_id');
        $this->model_killer_library->setViewTableName('gal_view');
        $this->model_killer_library->setNameOfParentIdColumn('gal_cat_id');
    }

	public function insertNewItemDetail($gal_cat_id, $gal_title, $gal_detail, $gal_css)
	{
		$insert_data = array(
								'gal_cat_id'	=> $gal_cat_id,
								'title' 		=> $gal_title,
								'detail'		=> $gal_detail,
								'gal_css' 		=> $gal_css,
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($gal_big_photo, $gal_thumb_photo, $gal_id=NULL)
	{
		if ($gal_id == NULL)
			$gal_id = $this->last_record_id;

		$insert_data = array(
								'gal_id'			=> $gal_id,
								'gal_big_photo'		=> $gal_big_photo,
								'gal_thumb_photo'	=> $gal_thumb_photo
							);

		$this->model_killer_library->setTableName('gal_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($gal_cat_id, $gal_id, $gal_title, $gal_detail, $gal_css)
	{
		$update_data = array(
								'gal_cat_id'	=> $gal_cat_id,
								'title' 		=> $gal_title,
								'detail'		=> $gal_detail,
								'gal_css' 		=> $gal_css,
							);
		return $this->model_killer_library->updateRow($gal_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'gal_photo_id';
		$table_name = 'gal_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

	public function readParentRow($id=null)
	{
        $this->model_killer_library->setTableName('gal_category');
        $this->model_killer_library->setNameOfIdColumn('gal_cat_id');
        return $this->model_killer_library->readParentRow($id);		
	}

	public function readRowByParent($cat_id)
	{
		return $this->model_killer_library->readRowByParent($cat_id);
	}
}