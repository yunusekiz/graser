<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class team extends CI_Controller {
	
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

		$this->model_name = 'team_model';
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->load->model("{$this->model_name}");

	}

	public function addItemForm()
	{
		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/add_team_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}

	public function addItem()
	{
		$team_name 		   = $this->input->post('team_name');
		$positon_title 	   = $this->input->post('positon_title');
		$positon_title_eng = $this->input->post('positon_title_eng');

		if (($team_name!='') && ($positon_title!='')) 
		{
			if ($positon_title_eng =='')
				$positon_title_eng = 'default_position_detail';
			
			$insert_item_detail_to_db = $this->{$this->model_name}->insertNewItemDetail($team_name, $positon_title,
																						$positon_title_eng);
			
			if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
			{
				$message = 'Tebrikler! Kayıt Başarılı.';
				$return_path = 'allItems';
				$this->jquery_notification_library->successMessage($message, $return_path,2);						
			}
			else
			{
				$message = 'Form Bilgileri Veritabanına Kaydedilemedi';
				$return_path = 'addItemForm';
				$this->jquery_notification_library->errorMessage($message, $return_path,2);					
			}
		}		
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'addItemForm';
			$this->jquery_notification_library->errorMessage($message, $return_path,0.2);
		}
	}

	public function allItems()
	{
		if ($this->{$this->model_name}->readRow()!=NULL) 
		{
			$this->parser_data['all_items'] = $this->{$this->model_name}->readRow();
			$this->parser_data['all_items_header_css']  = array(array());
		}
		else
		{
			$this->parser_data['all_items'] = array();	
			$this->parser_data['all_items_header_css']  = array();	
		}

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/all_team_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	public function updateItemDetailForm($id)
	{
		$this->parser_data['item_detail'] = $this->{$this->model_name}->readRow($id);
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_team_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function updateItemDetail()
	{
		$item_id = $this->input->post('id');
		$team_name 		   = $this->input->post('team_name');
		$positon_title 	   = $this->input->post('positon_title');
		$positon_title_eng = $this->input->post('positon_title_eng');

		if (($team_name!='') && ($positon_title!='')) 
		{
			if ($positon_title_eng =='')
				$positon_title_eng = 'default_position_detail';
			
			$update_item_detail = $this->{$this->model_name}->updateItemDetail($item_id,$team_name,
																			   $positon_title,$positon_title_eng);
			if ($update_item_detail == TRUE) 
			{
				$message = 'Kayıt Güncelleme Başarılı..!';
				$return_path = 'allItems';
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

	public function deleteItem($id)
	{
		if ($this->{$this->model_name}->deleteRow($id) == TRUE)
		{
			$message = 'Kayıt Silme Başarılı..!';
			$return_path = '../allItems';
			$this->jquery_notification_library->successMessage($message, $return_path,1);					
		}
		else
		{
			$message = 'HATA:: Kayıt Silme Başarısız..!';
			$return_path = '../allItems';
			$this->jquery_notification_library->errorMessage($message, $return_path,1);					
		}
	}	

}