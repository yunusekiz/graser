<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class projeler extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Projeler';
	}	

	public function index($page=null)
	{
		$this->konut();
	}

	public function konut()
	{
		$this->parser_data['title'] = 'Metosan - Konut Projeleri';

		$this->load->model('project_model');
		
		if ($this->project_model->readRow() == NULL)
		{
			$this->parser_data['konut_iteration_1'] = array();
			$this->parser_data['konut_iteration_2'] = array();
			$this->parser->parse('frontend_views/konut_view',$this->parser_data);
		}
		else
		{
			$this->parser_data['konut_iteration_1'] = $this->project_model->readRow();
			$this->parser_data['konut_iteration_2'] = $this->project_model->readRow();
			$this->parser->parse('frontend_views/konut_view', $this->parser_data);			
		}			
	} 

	public function taahhut()
	{
		$this->parser_data['title'] = 'Metosan - Taahhüt Projeleri';
		$this->parser->parse('frontend_views/taahhut_view',$this->parser_data);
	}

}