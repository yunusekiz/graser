<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reference_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('reference');
        $this->model_killer_library->setNameOfIdColumn('ref_id');
    }

    public function insertRow($ref_detail)
    {
		$insert_data = array(
								'ref_detail' => $ref_detail
							);	

		$this->model_killer_library->insertNewRow($insert_data);    	
    }	
	
	public function readRow($record_id = NULL)
	{
		return $this->model_killer_library->readRow($record_id);
	}
	
	public function updateRow($ref_detail)
	{
		$update_data = array(
								'ref_detail' => $ref_detail
							);	
		return $this->model_killer_library->updateRow(1,$update_data);
	}
}