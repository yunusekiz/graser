<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class team_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('our_team');
        $this->model_killer_library->setNameOfIdColumn('team_id');
    }

	public function insertNewItemDetail($team_name, $positon_title, $position_title_eng)
	{
		$insert_data = array(
								'team_name'			 => $team_name,
								'positon_title' 	 => $positon_title,
								'position_title_eng' => $position_title_eng
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($team_id, $team_name, $positon_title, $position_title_eng)
	{
		$update_data = array(
								'team_name'			 => $team_name,
								'positon_title' 	 => $positon_title,
								'position_title_eng' => $position_title_eng
							);
		return $this->model_killer_library->updateRow($team_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}
}