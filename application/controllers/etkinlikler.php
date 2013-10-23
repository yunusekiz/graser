<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class etkinlikler extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Etkinlikler - American Fine Arts and Drama Anaokulları';
	}	

	public function index($id = null)
	{
		if ($id != null) 
		{
			$this->edu_system($id);
			$this->parser->parse('frontend_views/etkinlik_detay_view',$this->parser_data);
		}
		else
		{
			$base = base_url();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."\">";
		}
	}

	public function _remap($parameter)
	{
		if ($parameter==null) 
		{
			$this->index(null);
		}
		else
			$this->index($parameter);
	}	

	protected function edu_system($id = null)
	{
		$this->load->model('acty_model');
		if ($this->acty_model->readRow($id) != null) 
		{
			$this->parser_data['acty_iteration'] = $this->acty_model->readRow($id);
		}
		else
		{
			$this->parser_data['acty_iteration'] = array();
		}

	}

}