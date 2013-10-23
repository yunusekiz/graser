<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class hakkimizda extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Hakkımızda - Metosan';
	}	

	public function index()
	{
		$this->about();
		$this->parser->parse('frontend_views/hakkimizda_view',$this->parser_data);
	}

	protected function about()
	{
		$this->load->model('about_model');
		$this->parser_data['about_iteration'] = $this->about_model->readRow(null,1);
	}

}