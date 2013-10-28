<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gal_category extends CI_Controller {
	
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

		$this->model_name = 'gal_category_model';
		
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
		$this->parser->parse('backend_views/add_gal_category_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}

	public function addItem()
	{
		$gal_category_name_tr = $this->input->post('gal_category_name_tr');
		$gal_category_name_eng = $this->input->post('gal_category_name_eng');

		if (($gal_category_name_tr!='')&&($gal_category_name_eng!='')) 
		{
			$item_css = strtolower(filterForeignChars($gal_category_name_tr));	
			$insert_item_detail_to_db = $this->{$this->model_name}->insertNewItemDetail($gal_category_name_tr, $gal_category_name_eng, $item_css);
			
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
		$this->parser->parse('backend_views/all_gal_category_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	public function updateItemDetailForm($id)
	{
		$this->parser_data['item_detail'] = $this->{$this->model_name}->readRow($id);
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_gal_category_detail_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function updateItemDetail()
	{
		$item_id = $this->input->post('id');

		$gal_category_name_tr = $this->input->post('title_tr');
		$gal_category_name_eng = $this->input->post('title_eng');

		if (($gal_category_name_tr!='')&&($gal_category_name_eng!='')) 
		{
			$item_css = strtolower(filterForeignChars($gal_category_name_tr));	
			$update_item_detail = $this->{$this->model_name}->updateItemDetail($item_id ,$gal_category_name_tr, $gal_category_name_eng, $item_css);
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


}