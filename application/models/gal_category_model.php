<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gal_category_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('gal_category');
        $this->model_killer_library->setNameOfIdColumn('gal_cat_id');
    }

	public function insertNewItemDetail($gal_category_name_tr, $gal_category_name_eng, $gal_category_css)
	{
		$insert_data = array(
								'title_tr' 			=> $gal_category_name_tr,
								'title_eng'			=> $gal_category_name_eng,
								'gal_cat_css' 		=> $gal_category_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($gal_category_id, $gal_category_name_tr, $gal_category_name_eng, $gal_category_css)
	{
		$update_data = array(
								'title_tr' 			=> $gal_category_name_tr,
								'title_eng'			=> $gal_category_name_eng,
								'gal_cat_css' 		=> $gal_category_css
							);
		return $this->model_killer_library->updateRow($gal_category_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}
