<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class is_guvenligi extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Çevre, iş sağlığı ve güvenliği';
	}	

	public function index()
	{
		$this->is_sagligi();
		$this->parser->parse('frontend_views/isguvenligi_view',$this->parser_data);
	}

	protected function is_sagligi()
	{
		$this->load->model('health_model');
		$this->parser_data['is_sagligi_iteration'] = $this->health_model->readRow();
	}

}