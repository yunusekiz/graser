<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class galeri extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Galeri - American Fine Arts and Drama Anaokulları';
	}	

	public function index()
	{
		$this->gall();
		$this->parser->parse('frontend_views/galeri_view',$this->parser_data);
	}

	protected function gall()
	{
		$this->load->model('gallery_model');
		if ($this->gallery_model->readRow() != null )
			$this->parser_data['gallery_iteration'] = $this->gallery_model->readRow();
		else
			$this->parser_data['gallery_iteration'] = array();
	}

}