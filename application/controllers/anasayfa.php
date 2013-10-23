<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class anasayfa extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->iletisim();
		$this->slider();
		
		$this->parser_data['title'] = 'Graser - Anasayfa';
	}	

	public function index()
	{

		$this->parser->parse('frontend_views/anasayfa_view',$this->parser_data);
	}

	protected function news()
	{
		$this->load->model('news_model');
		$this->parser_data['news_iteration'] = $this->news_model->readRow(null,1);
	}

	protected function slider()
	{	
		$this->load->model('slider_model');
		
		if ($this->slider_model->readRow() == NULL)
			return $this->parser_data['slider_iteration'] = array();
		else
			return $this->parser_data['slider_iteration'] 	= $this->slider_model->readRow();
	}


	protected function lists()
	{
		$this->load->model('list_model');
		$this->parser_data['lists_iteration'] = $this->list_model->readRow(null,5);
	}

	protected function iletisim()
	{
		$this->load->model('contact_model');
		$this->parser_data['iletisim_iteration'] = $this->contact_model->readRow();
	}

}