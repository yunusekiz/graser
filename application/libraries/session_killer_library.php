<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*  Bu class CI'ın native session library'sini, 
	admin panelindeki her sayfada instance edip session kontrolü yapmamak için yazılmıştır.
	Bu class ın çağrıldığı sayfada otomatik session kontrolü yapılır. Session yoksa projenin base sayfasına yönlendirir. 
*/

class session_killer_library{

	// codeigniter ın orijinal class larına ulaşmak için kullanılacak değişken.
	private $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

	 	$this->CI->load->library('session');// session ın nimetlerinden faydalanabilmek için CI'ın 'session' isimli library yi yükler.
	}

	public function controlSession($session_var)
	{
		$data = $this->CI->session->userdata($session_var);					
		if(empty($data))
		{
			$base = base_url();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."\">";
			die();
		}		
	}

	public function setSessionData($session_data)
	{
		$this->CI->session->set_userdata($session_data);
	}

	public function getSessionData()
	{
		return $this->CI->session->all_userdata();
	}

}