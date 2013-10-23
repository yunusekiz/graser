<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_pdf_model extends CI_Model {

	protected $last_record_id;


	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('model_pdf_detail');
        $this->model_killer_library->setNameOfIdColumn('pdf_id');
        $this->model_killer_library->setViewTableName('model_pdf_view');
        
    }

	public function insertNewItemDetail($pdf_title)
	{
		$insert_data = array(
								'pdf_title' => $pdf_title
							);

		$this->model_killer_library->insertNewRow($insert_data);
		return $this->last_record_id = $this->model_killer_library->getLastRecordId();
	}

	public function insertNewItemPhoto($pdf_file_path,$pdf_id=NULL)
	{
		if ($pdf_id == NULL)
			$pdf_id = $this->last_record_id;

		$insert_data = array(
								'pdf_id'			 => $pdf_id,
								'pdf_file_path'	 => $pdf_file_path
							);

		$this->model_killer_library->setTableName('model_pdf_file');
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
			$query = $this->db->select('*')->from('model_pdf_view')->get();
			return $query->result_array();
		}
		else
		{
			$query = $this->db->select('*')->from('model_pdf_view')->where('pdf_id',$record_id)->get();
			return $query->result_array();
		}
	}	

	public function updateItemDetail($pdf_id, $pdf_title)
	{
		$update_data = array(
								'pdf_title' => $pdf_title
							);

		return $this->model_killer_library->updateRow($pdf_id, $update_data);
	}

	public function deleteItemRow($row_id)
	{
		return $this->model_killer_library->deleteRow($row_id);
	}

	public function deleteItemPhotoRow($row_id)
	{
		$name_of_id_column = 'pdf_file_id';
		$table_name = 'model_pdf_file';
		return $this->model_killer_library->deleteRow($row_id, $name_of_id_column, $table_name);
	}		

}