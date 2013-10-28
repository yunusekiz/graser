<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ref_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('ref');
        $this->model_killer_library->setNameOfIdColumn('ref_id');
        $this->model_killer_library->setViewTableName('ref_view');
        $this->model_killer_library->setNameOfParentIdColumn('ref_cat_id');
    }

	public function insertNewItemDetail($ref_cat_id, $ref_title, $ref_detail, $ref_css)
	{
		$insert_data = array(
								'ref_cat_id'	=> $ref_cat_id,
								'title' 		=> $ref_title,
								'detail'		=> $ref_detail,
								'ref_css' 		=> $ref_css,
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($ref_big_photo, $ref_thumb_photo, $ref_id=NULL)
	{
		if ($ref_id == NULL)
			$ref_id = $this->last_record_id;

		$insert_data = array(
								'ref_id'			=> $ref_id,
								'ref_big_photo'		=> $ref_big_photo,
								'ref_thumb_photo'	=> $ref_thumb_photo
							);

		$this->model_killer_library->setTableName('ref_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($ref_cat_id, $ref_id, $ref_title, $ref_detail, $ref_css)
	{
		$update_data = array(
								'ref_cat_id'	=> $ref_cat_id,
								'title' 		=> $ref_title,
								'detail'		=> $ref_detail,
								'ref_css' 		=> $ref_css,
							);
		return $this->model_killer_library->updateRow($ref_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'ref_photo_id';
		$table_name = 'ref_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

	public function readParentRow($id=null)
	{
        $this->model_killer_library->setTableName('ref_category');
        $this->model_killer_library->setNameOfIdColumn('ref_cat_id');
        return $this->model_killer_library->readParentRow($id);		
	}

	public function readRowByParent($cat_id)
	{
		return $this->model_killer_library->readRowByParent($cat_id);
	}
}