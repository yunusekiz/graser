<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class project_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('project');
        $this->model_killer_library->setNameOfIdColumn('project_id');
        $this->model_killer_library->setViewTableName('project_view');
    }

	public function insertNewItemDetail($project_title, $project_detail, $project_date, $project_css)
	{
		$insert_data = array(
								'project_title' 	=> $project_title,
								'project_detail' 	=> $project_detail,
								'project_date' 		=> $project_date,
								'project_css'		=> $project_css
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($project_big_photo, $project_thumb_photo, $project_id=NULL)
	{
		if ($project_id == NULL)
			$project_id = $this->last_record_id;

		$insert_data = array(
								'project_id'			=> $project_id,
								'project_big_photo'		=> $project_big_photo,
								'project_thumb_photo'	=> $project_thumb_photo
							);

		$this->model_killer_library->setTableName('project_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function updateItemDetail($project_id,$project_title,$project_detail,$project_date,$project_css)
	{
		$update_data = array(
								'project_title' 	=> $project_title,
								'project_detail' 	=> $project_detail,
								'project_date' 	=> $project_date,
								'project_css'		=> $project_css
							);
		return $this->model_killer_library->updateRow($project_id, $update_data);
	}

	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deletePhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'project_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}


}
