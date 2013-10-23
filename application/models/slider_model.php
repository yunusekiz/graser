<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slider_model extends CI_Model {

	protected $last_record_id;

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('main_slider_text');
        $this->model_killer_library->setNameOfIdColumn('slider_id');
        $this->model_killer_library->setViewTableName('main_slider_view');
    }


	public function insertNewSliderText($slider_text_title)
	{
		$insert_data = array(
								'slider_text_title' => $slider_text_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewSliderPhoto($slider_big_photo, $slider_thumb_photo, $slider_id = NULL)
	{
		if ($slider_id == NULL) 
		{
			$slider_id = $this->last_record_id;
		}

		$insert_data = array(
								'slider_id'				=> $slider_id,
								'slider_big_photo'		=> $slider_big_photo,
								'slider_thumb_photo'	=> $slider_thumb_photo
							);

		$this->model_killer_library->setTableName('main_slider_photo');
		return $this->model_killer_library->insertNewRow($insert_data);
	}

	public function readRow($record_id = NULL, $recor_number = NULL)
	{
		return $this->model_killer_library->readRow($record_id, $recor_number);
	}

	public function read($record_id = NULL)
	{
		if ($record_id == NULL) 
		{
			$query = $this->db->select('*')->from('main_slider_view')->get();
			return $query->result_array();
		}
		else
		{
			$query = $this->db->select('*')->from('main_slider_view')->where('slider_id',$record_id)->get();
			return $query->result_array();
		}
	}

	public function updateSliderText($slider_id, $slider_text_title)
	{
		$update_data = array(
								'slider_text_title' => $slider_text_title
							);

		return $this->model_killer_library->updateRow($slider_id, $update_data);
	}


	public function deleteRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deletePhotoRow($row_id)
	{
		$name_of_id_column = 'photo_id';
		$table_name = 'main_slider_photo';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}

	public function readImageRow($id)
	{
		$this->model_killer_library->setTableName('main_slider_photo');
		return $this->model_killer_library->readRow($record_id);
	}

}
