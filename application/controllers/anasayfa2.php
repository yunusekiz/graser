<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class anasayfa extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		//$this->parser_data['title'] = 'Anasayfa';
	}	

	public function index()
	{
		//$this->output->cache(10);
		$this->load->model('team_model');

		$twig_debug_mode = true;
		$this->load->library('twig',$twig_debug_mode);
		//$data['title'] = "Testing Twig!!";
/*		$data = array(
    					'topics' => array(
        									'topic1' => array('Message 1 of topic 1', 'Message 2 of topic 1'),
        									'topic2' => array('Message 1 of topic 2', 'Message 2 of topic 2'),
    									 )
					);	*/
		
		$this->parser_data['all_auto'] = $this->team_model->readRow();
		//$this->twig->enableTwigDebug();
		$this->parser_data['nm'] = "var_name";
		$this->twig->display('view.html',$this->parser_data);

	}

}