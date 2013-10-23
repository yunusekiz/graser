<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class email_killer_library{

	// codeigniter ın system class'larına ulaşmak için bu değişken kullanılacak.
	private $CI;

	protected $email_data;

	public $debug_data;	// class debug edilirse output'u  bu değişkene set edeceğiz.

	public function __construct()
	{
		$this->CI =& get_instance();

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'localhost';
		$config['smtp_port'] = '25';
		$config['useragent'] = 'JeeMasters Admin';
		$config['mailpath'] = '/usr/sbin/sendmail'; // çekirdeğe gömülü email 
		$config['priority']	= '1';

		$this->CI->load->library('email'); // CI'ın "email" library'sini instance ediyoruz. 
		$this->CI->email->initialize($config);
	}

	public function sendEmail()
	{
		if ($this->CI->email->send())
			return TRUE;
		//else
			//$this->debug_data = $this->CI->email->print_debugger(); // metod TRUE dönmezse $debug_data değişkenini set et.
	}

	public function setEmailData(array $email_data)
	{
		$base_url = base_url();

		$trans = array('http://'=>'', '/'=>'', 'www.'=>'');

		$trans_url = strtr($base_url, $trans);

		$this->CI->email->from('JeeMasters@'.$trans_url,'JeeMasters Admin');
		$this->CI->email->to($email_data['to']);
		$this->CI->email->subject($email_data['subject']);
		$this->CI->email->message($email_data['message']);
	}

	public function getDebugData()
	{
		return $this->debug_data; // $debug_data değişkenini, yani class debug edildiğindeki output u döndürür.
	}

}