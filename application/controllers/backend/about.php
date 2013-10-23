<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class about extends CI_Controller {

	protected $parser_data;
	protected $row_data;
	
	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');

		$base = base_url();
		$this->parser_data['base'] = $base;

		$this->load->library('jquery_notification_library'); // jquery notification kütüphanesini çağırır
		$this->jquery_notification_library->setParserData($this->parser_data);
		
		$this->load->model('about_model');
	}

	public function editAboutUs()
	{
		$this->parser_data['hakkimizda_iteration'] =  $this->about_model->readRow();

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/about_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
				
	}
	
	public function controlAboutUs()
	{	
		$about_detail_tr	= $this->input->post('about_detail_tr');
		$about_detail_eng	= $this->input->post('about_detail_eng');

		if(($about_detail_tr == '')||($about_detail_eng == ''))
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'editAboutUs';
			$this->jquery_notification_library->errorMessage($message, $return_path,2);

		}
		else
		{

			$update = $this->about_model->updateAboutUs($about_detail_tr,$about_detail_eng);
			
			if($update == TRUE)
			{
				$message = 'Tebrikler.! Güncelleme başarılı.';
				$return_path = 'editAboutUs';
				$this->jquery_notification_library->successMessage($message, $return_path,2);
			}
			else
			{
				$message = 'Güncelleme İşlemi Başarısız Oldu';
				$return_path = 'editAboutUs';
				$this->jquery_notification_library->errorMessage($message, $return_path,2);	
			}
		}
					
	}

}