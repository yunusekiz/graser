<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tour extends CI_Controller {

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
		
		$this->load->model('tour_model');
	}

	public function updateItemDetailForm()
	{
		$this->parser_data['tour_iteration'] =  $this->tour_model->readRow();

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_tour_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
				
	}
	
	public function updateItemDetail()
	{	
		$tour_detail	= $this->input->post('tour_detail');
		$tour_video		= $this->input->post('tour_video');

		if(($tour_detail == '')||($tour_video == ''))
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'updateItemDetailForm';
			$this->jquery_notification_library->errorMessage($message, $return_path,2);

		}
		else
		{

			$update = $this->tour_model->updateItemDetail($tour_detail,$tour_video);
			
			if($update == TRUE)
			{
				$message = 'Tebrikler.! Güncelleme başarılı.';
				$return_path = 'updateItemDetailForm';
				$this->jquery_notification_library->successMessage($message, $return_path,2);
			}
			else
			{
				$message = 'Güncelleme İşlemi Başarısız Oldu';
				$return_path = 'updateItemDetailForm';
				$this->jquery_notification_library->errorMessage($message, $return_path,2);	
			}
		}
					
	}

}