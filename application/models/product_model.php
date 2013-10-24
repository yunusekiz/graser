<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('product');
        $this->model_killer_library->setNameOfIdColumn('product_id');
        $this->model_killer_library->setViewTableName('product_view');
    }

	public function insertNewItemDetail($pro_cat_id, $product_title, $product_css)
	{
		$insert_data = array(
								'pro_cat_id'		=> $pro_cat_id,
								'title' 			=> $product_title,
								'product_css' 		=> $product_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($product_big_photo, $product_thumb_photo, $product_id=NULL)
	{
		if ($product_id == NULL)
			$product_id = $this->last_record_id;

		$insert_data = array(
								'product_id'			=> $product_id,
								'product_big_photo'	=> $product_big_photo,
								'product_thumb_photo'	=> $product_thumb_photo
							);

		$this->model_killer_library->setTableName('product_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($pro_cat_id, $product_id, $product_title, $product_css)
	{
		$update_data = array(
								'pro_cat_id'		=> $pro_cat_id,
								'title' 			=> $product_title,
								'product_css' 		=> $product_css
							);
		return $this->model_killer_library->updateRow($product_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'product_photo_id';
		$table_name = 'product_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

	public function readParentRow()
	{
        $this->model_killer_library->setTableName('product_category');
        $this->model_killer_library->setNameOfIdColumn('pro_cat_id');
        return $this->model_killer_library->readParentRow();		
	}
}