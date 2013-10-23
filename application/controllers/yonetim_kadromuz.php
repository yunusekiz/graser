<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class yonetim_kadromuz extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Yönetim Kadromuz - American Fine Arts and Drama Anaokulları';
	}	

	public function index()
	{
		$this->team();
		$this->parser->parse('frontend_views/yonetim_kadromuz_view',$this->parser_data);
	}

	protected function team()
	{
		$this->load->model('team_model');
		$this->parser_data['team_iteration'] = $this->team_model->readRow();
	}	

}