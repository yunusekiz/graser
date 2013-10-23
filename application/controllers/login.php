<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Controller {
	
	protected static $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		self::$parser_data['base'] = base_url();
	}
	
	public function index()
	{

		$this->parser->parse('login_views/login_header',self::getParserData());
		$this->parser->parse('login_views/login_form',self::getParserData());
		$this->parser->parse('login_views/login_footer',self::getParserData());
	}

	protected static function getParserData()
	{
		return self::$parser_data;
	}
	
	
}