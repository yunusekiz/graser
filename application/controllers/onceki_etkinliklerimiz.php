<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class onceki_etkinliklerimiz extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Önceki Etkinliklerimiz - American Fine Arts and Drama Anaokulları';
	}	

	public function index()
	{
		$this->prev_acty();
		$this->parser->parse('frontend_views/onceki_etkinlik_view',$this->parser_data);
	}

	protected function prev_acty()
	{
		$this->load->model('acty_model');
		$this->parser_data['all_acty_iteration'] = $this->acty_model->readRow();
	}


}