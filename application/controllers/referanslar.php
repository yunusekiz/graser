<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class referanslar extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Referanslar';
	}	

	public function index()
	{
		$this->all_ref();
		$this->parser->parse('frontend_views/referans_view',$this->parser_data);
	}

	protected function all_ref()
	{
		$this->load->model('reference_model');
		$this->parser_data['ref_iteration'] = $this->reference_model->readRow();
	}

}