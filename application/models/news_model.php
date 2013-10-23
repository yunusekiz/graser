<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('news');
        $this->model_killer_library->setNameOfIdColumn('news_id');
    }

	public function insertNewItemDetail($news_date, $news_detail, $news_detail_eng)
	{
		$insert_data = array(
								'news_date' 	  => $news_date,
								'news_detail' 	  => $news_detail,
								'news_detail_eng' => $news_detail_eng
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($news_id, $news_date, $news_detail, $news_detail_eng)
	{
		$update_data = array(
								'news_date' 	  => $news_date,
								'news_detail' 	  => $news_detail,
								'news_detail_eng' => $news_detail_eng
							);
		return $this->model_killer_library->updateRow($news_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}
