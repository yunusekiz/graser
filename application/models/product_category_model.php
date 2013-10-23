<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_category_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('product_category');
        $this->model_killer_library->setNameOfIdColumn('pro_cat_id');
    }

	public function insertNewItemDetail($product_category_name_tr, $product_category_name_eng, $product_category_css)
	{
		$insert_data = array(
								'title_tr' 			=> $product_category_name_tr,
								'title_eng'			=> $product_category_name_eng,
								'pro_cat_css' 		=> $product_category_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($product_category_id, $product_category_name_tr, $product_category_name_eng, $product_category_css)
	{
		$update_data = array(
								'title_tr' 			=> $product_category_name_tr,
								'title_eng'			=> $product_category_name_eng,
								'pro_cat_css' 		=> $product_category_css
							);
		return $this->model_killer_library->updateRow($product_category_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}
