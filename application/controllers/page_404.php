<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class page_404 extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();

		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Sayfa Bulunamadı';
	}		

	public function index()
	{	
		$this->parser->parse('frontend_views/404_view',$this->parser_data);
	}

	
}