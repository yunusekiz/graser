<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends CI_Controller {

	protected $parser_data;
	
	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');
		
		$base = base_url();
		$this->parser_data = array('base' => $base);
		
		$this->load->model('contact_model');
		$raw_data = $this->contact_model->readRow('1');	// admin panelinin arayüzü için gerekli datayı raw olarak alır
		$this->rawDataKiller($raw_data, $this->parser_data); // raw haldeki datayı tek boyutlu bir array olarak parser_data değişkenine atar

		$this->load->library('jquery_notification_library'); // jquery notification kütüphanesini çağırır
		$this->jquery_notification_library->setParserData($this->parser_data);
	}

	protected function rawDataKiller($raw_data, &$output_data) // raw halindeki datayı tek boyutlu array haline getiren metod
	{
		foreach ($raw_data as $middle_data) 
		{
			foreach ($middle_data as $key => $value) 
			{
				$output_data[$key] = $value;
			}
		}
		return $output_data;		
	}
	
	public function editContact()
	{
		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/contact_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	/*	print_r($this->parser_data);*/

	}
	
	public function updateContact()
	{
		$address_field	= $this->input->post('address_field');
		$phone_field	= $this->input->post('phone_field');
		$fax_field		= $this->input->post('fax_field');
		$email_field	= $this->input->post('email_field');
		
		if(($address_field == '') || ($phone_field == ''))
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$this->jquery_notification_library->errorMessage($message, '../contact/editContact');
		}
		else
		{
			if ($email_field =='')
				$email_field = 'ornek_eposta_adresi';

			$update = $this->contact_model->updateRow($address_field, $phone_field, $fax_field, $email_field);
			if($update == TRUE)
			{
				$message = 'İletişim Bilgileri Başarıyla Güncellendi';
				$this->jquery_notification_library->successMessage($message, '../contact/editContact');
			}
			else
			{
				$message =  'Güncelleme İşlemi Başarısız Oldu';
				$this->jquery_notification_library->errorMessage($message, '../contact/editContact');
			}			
		}	
	}

}