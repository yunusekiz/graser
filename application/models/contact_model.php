<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();

        $this->load->library('model_killer_library');
        $this->model_killer_library->setTableName('contact');
        $this->model_killer_library->setNameOfIdColumn('id');
    }

    public function insertRow($address, $phone, $fax, $email)
    {
		$insert_data = array(
								'address' 	  => $address,
								'phone'		  => $phone,
								'fax'		  => $fax,
								'email'		  => $email
							);	

		$this->model_killer_library->insertNewRow($insert_data);    	
    }	
	
	public function readRow($record_id = NULL)
	{
		return $this->model_killer_library->readRow($record_id);
	}
	
	public function updateRow($address, $phone, $fax, $email)
	{
		$update_data = array(
								'address' 	  => $address,
								'phone'		  => $phone,
								'fax'		  => $fax,
								'email'		  => $email
							);	
		return $this->model_killer_library->updateRow(1,$update_data);
	}
}