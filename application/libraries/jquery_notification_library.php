<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  Bu class sadece jquery notificationları üretmek için yazılmıştır.
	Php ile ve CI ile başka herhangi bir bağı yoktur.
*/

class jquery_notification_library{

	// codeigniter ın native class larına ulaşmak için kullanılacak olan değişken.
	private $CI;

	private $parser_data;

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	public function setParserData(&$parser_data)
	{
		$this->parser_data =& $parser_data;
	}

	public function errorMessage($message, $return_path, $time = NULL)
	{
		if ($time == NULL)
			$time = 3;

		$this->parser_data['error_message'] = $message;

		// admin panelinin ilgili view lerini yükler
		$this->CI->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->CI->parser->parse('backend_views/error_view',$this->parser_data);
		$this->CI->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->CI->parser->parse('backend_views/admin_footer_view',$this->parser_data);
		echo "<meta http-equiv=\"refresh\" content=\"$time; url=$return_path\">";	
	}

	public function successMessage($message, $return_path, $time = NULL)
	{
		if ($time == NULL)
			$time = 3;

		$this->parser_data['success_message'] = $message;

		// admin panelinin ilgili view lerini yükler
		$this->CI->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->CI->parser->parse('backend_views/success_view',$this->parser_data);
		$this->CI->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->CI->parser->parse('backend_views/admin_footer_view',$this->parser_data);
		echo "<meta http-equiv=\"refresh\" content=\"$time; url=$return_path\">";	
	}	

}