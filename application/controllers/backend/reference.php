<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reference extends CI_Controller {
	
	protected $parser_data;

	protected $img_lib_bootstrap_data = array();

	protected $change_item_form_action;

	protected $model_name;

	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');

		$this->model_name = 'reference_model';
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->load->model("{$this->model_name}");

	}


	public function updateItemDetailForm($id = 1)
	{
		$this->parser_data['item_detail'] = $this->{$this->model_name}->readRow($id);
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_ref_detail_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function updateItemDetail()
	{
		$item_id = '1';
		$reference_detail = $this->input->post('ref_detail');

		if ($reference_detail!='') 
		{
			$update_item_detail = $this->{$this->model_name}->updateRow($reference_detail);
			
			if ($update_item_detail == TRUE) 
			{
				$message = 'Kayıt Güncelleme Başarılı..!';
				$return_path = 'updateItemDetailForm/'.$item_id;
				$this->jquery_notification_library->successMessage($message, $return_path,1);	
			}
			else
			{
				$message = 'HATA:: Kayıt Güncellenemedi..!';
				$return_path = 'updateItemDetailForm/'.$item_id;
				$this->jquery_notification_library->errorMessage($message, $return_path,1);		
			}
		}
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'updateItemDetailForm/'.$item_id;
			$this->jquery_notification_library->errorMessage($message, $return_path,1);			
		}	
	}


}