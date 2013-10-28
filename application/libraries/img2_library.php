<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class img2_library{

	// codeigniter ın orijinal class larına ulaşmak için bu değişken kullanılacak.
	private $CI;

	//resim upload işlemlerinden sonra resize için gerekli olan dataları tutacak olan değişken.
	private $data_after_upload;

	//  resize işlemlerinden sonra veritabanına kaydedilecek olan resim "file-path" lerini tutacak olan değişken.
	private $data_after_resize;

	// bu class'ı instance ederken construct  image detaylarını tutacak olan array türünde değişken.
	private $bootstrap_data = array();

	// class run edildiğinde eğer bi hata oluşursa, hatanın ekrana basılıp basılmayacağını belirleyen değişken.
	public $display_errors = FALSE;

	// projenin (server üzerindeki..!) root adresini tutan değişken.
	public $root;

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->library('image_lib'); //CI'ın image_lib library'sini instance ediyoruz.

		//$this->root = strstr(dirname(__FILE__),'application',TRUE); // strstr() ye gelen üçüncü parametre, hostmana da fail oluyor, php versiyonu 5.3 den düşük olduğu için
		//$this->root = $_SERVER['DOCUMENT_ROOT']; // bu hosta yüklerken alternatif çözüm üretiyor
		$this->root = FCPATH; // bu sabit codeigniter ın kendi sabitlerinden birisi, bu sayede $root a değer atamak için yukarıdaki yöntemlere gerek kalmıyor.
	}


	public function setBootstrapData(array $bootstrap_data) // bu metod constructor işlevi görür. 
	{
		$this->bootstrap_data = $bootstrap_data;
		$this->controlBootstrapData();
	}

	// class ı n çalışabilmesi için gerekli olan bootstrap datalar eksikmi değilmi diye control eder, eksikse gerekli işlemleri yapar
	private function controlBootstrapData()
	{

		if ($this->display_errors == TRUE) 
		{
			if (@$this->bootstrap_data['image_form_field'] == NULL)
			{
				echo '</br></br><center> <h3> HATA:: Dosya Yukleme Formundaki Ilgili Field Name i, class a tanitmadiniz </h3></center>';
			}
		}


		if (@$this->bootstrap_data['upload_path'] == NULL)
		{
			if (!file_exists($this->root.'/'.$this->bootstrap_data['upload_path']))
				@mkdir($this->root.'/'.$this->bootstrap_data['upload_path']);

			@$this->bootstrap_data['upload_path'] = $this->root.'/assets/images/default_image_upload_path';
		}
		else
		{
			if (!file_exists($this->root.'/'.$this->bootstrap_data['upload_path']))
				@mkdir($this->root.'/'.$this->bootstrap_data['upload_path']);

			@$this->bootstrap_data['upload_path'] = $this->root.'/'.$this->bootstrap_data['upload_path'];
		}
			

		/* fotolar için width ve height değerleri belirtilmediyse, default olarak aşağıdaki değerleri atar. */
/*		if (@$this->bootstrap_data['big_img_width'] == NULL) //
			$this->bootstrap_data['big_img_width'] = 800;
		
		if (@$this->bootstrap_data['big_img_height'] == NULL)
			$this->bootstrap_data['big_img_height'] = 600;
*/
/*		if (@$this->bootstrap_data['thumb_img_width'] == NULL)
			$this->bootstrap_data['thumb_img_width'] = 90;

		if (@$this->bootstrap_data['thumb_img_height'] == NULL)
			$this->bootstrap_data['thumb_img_height'] = 90;*/
	}


	/* class'a gönderilen bootstarp değerlerine göre hem dosya yükleme hem boyutlandırma metodlarını çağıran kendi halinde bir metod. */
	public function imageUpAndResize()
	{
		if ($this->display_errors == TRUE) 
		{
			if ($this->imageUpload() == TRUE)
			{
				if ($this->imageResize() == TRUE) 
					return TRUE;
				else
				{
					echo '</br> <center> <h3> HATA:: Resim Resize FALSE Dondu </h3> </center></br>';
					die();
				}
			}
			else
			{
				echo '</br> <center> <h3> HATA:: Resim Yukleme FALSE Dondu </h3> </center></br>';
				echo '</br><center> <h3>  upload path i : </h3>';
				var_dump(@$this->bootstrap_data['upload_path']);
				die();
			}

		}
		else
		{
			if ($this->imageUpload() == TRUE)
			{
				if ($this->imageResize() == TRUE) 
					return TRUE;
				else
					return FALSE;
			}
			else
				return FALSE;	
		}

	}


	public function imageUpload() /* CI'da native olarak gelen "upload" librarysini kullanarak dosya upload yapan metod. */
	{
		$upload_config['upload_path'] = $this->bootstrap_data['upload_path'];
		$upload_config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|ppt|pptx|xls|xlsx|bmp';
		$upload_config['max_size']	= '0';
		$upload_config['max_width'] = '5000';
		$upload_config['max_height'] = '4000';
		
		if (@$this->bootstrap_data['image_name'] != NULL)
			$upload_config['file_name'] = @$this->bootstrap_data['image_name'].'_'.rand();
		else
			$upload_config['file_name'] =  rand().'_'.rand();

		$image_form_field = @$this->bootstrap_data['image_form_field'];

		$this->CI->load->library('upload',$upload_config);

		$do_upload = $this->CI->upload->do_upload($image_form_field);
		$this->data_after_upload = $this->CI->upload->data();
		if ($this->data_after_upload['client_name'] != NULL) 
		{
			if ($do_upload)
			{
				return TRUE;
			}
			else
			{
				if ($this->display_errors == TRUE)
					echo '<center><h3>'.$this->CI->upload->display_errors('<p>', '</p>').'</h3></center>';
				else
					return FALSE;
			}

		}
		else
		{
			if ($this->display_errors == TRUE)
				echo '<center><h3> Upload Icin Dosya Secilmedi <br>'.$this->CI->upload->display_errors('<p>', '</p>').'</h3></center>';
			else
				return FALSE;
		}

	}

	public function imageResize($source_of_img = NULL) /* CI'da native olarak gelen "image_lib" librarysini kullanarak foto. boyutlandırması yapan metod. */
	{
		if ($this->getUploadedFileFullPath() == NULL)
			$source_of_img = $this->root.$source_of_img;
		else
			$source_of_img = $this->getUploadedFileFullPath();

		$resize_thumb_img_config['image_library'] = 'gd2';
		$resize_thumb_img_config['source_image'] = $source_of_img;
		$resize_thumb_img_config['create_thumb'] = TRUE;
		$resize_thumb_img_config['maintain_ratio'] = FALSE;
		$this->image_rate_killer();
		$resize_thumb_img_config['width'] = $this->bootstrap_data['thumb_img_width'];
		$resize_thumb_img_config['height'] = $this->bootstrap_data['thumb_img_height'];

		$img_sourge_parent_directory = dirname($source_of_img);

		$resize_thumb_img_config['new_image']	= $img_sourge_parent_directory.'/thumb'; 

		if (!file_exists($img_sourge_parent_directory.'/thumb')) // eğer hedef dizinde 'thumb' isimli bir dizin yoksa oluşturur
		{
			mkdir($img_sourge_parent_directory.'/thumb');	
		}

		$this->CI->image_lib->initialize($resize_thumb_img_config);
		$create_thumb_image = $this->CI->image_lib->resize();

		$this->CI->image_lib->clear();

		if ($create_thumb_image)
		{
			if ($this->bootstrap_data['big_img_width'] == NULL)
			{
				if ($this->getUploadedFileWidth() == NULL)
				{
					echo '</br><center> <h3> HATA:: Buyuk Resim Icın Hic Bir Width Degeri Belirtilmedi </h3> </center>';
					die();	# code...
				}
				else
					$big_img_width = $this->getUploadedFileWidth();
				
			}
			else
				$big_img_width = $this->bootstrap_data['big_img_width'];



			if ($this->bootstrap_data['big_img_height'] == NULL)
			{
				if ($this->getUploadedFileHeight() == NULL)
				{
					echo '</br><center> <h3> HATA:: Buyuk Resim Icın Hic Bir Height Degeri Belirtilmedi </h3> </center>';
					die();
				}
				else
					$big_img_height = $this->getUploadedFileHeight();				
			}
			else
				$big_img_height = $this->bootstrap_data['big_img_height'];


			$resize_big_img_config['image_library'] = 'gd2';	
			$resize_big_img_config['source_image'] = $source_of_img;
			$resize_big_img_config['create_thumb'] = FALSE;
			$resize_big_img_config['maintain_ratio'] = FALSE;
			$resize_big_img_config['width'] = $big_img_width;
			$resize_big_img_config['height'] = $big_img_height; 

			$this->CI->image_lib->initialize($resize_big_img_config);
			$create_big_image = $this->CI->image_lib->resize();

			if ($create_big_image)
			{
				//echo '<br/> resmin buyuk hali olusturuldu </br>';
				//echo '<br/> gecmis olsun : <br/>';
				//echo 'veritabanina kaydedilmesi gerekenler : ';
				//echo '<br/>';
				$this->data_after_resize['db_big_image'] = strstr($source_of_img, 'assets');
				
				$path_parts = pathinfo($this->data_after_resize['db_big_image']);
				$thumb_fullpath = $resize_thumb_img_config['new_image'].'/'.$path_parts['filename'].'_thumb'.$this->getUploadedFileExtension();

				$this->data_after_resize['db_thumb_image'] = strstr($thumb_fullpath, 'assets');

				return TRUE;

			}
			else
			{
				if ($this->display_errors == TRUE) 
				{
					echo '</br> HATA:: resmin buyuk hali olusturulamadi :  </br>';
					echo $this->CI->image_lib->display_errors();
					return FALSE;
				}
				else
					return FALSE;
			}
		}
		else
		{
			if ($this->display_errors == TRUE) 
			{
				echo '</br> HATA:: resmin thumb i olusturulamadi </br>';
				echo $this->CI->image_lib->display_errors();
				return FALSE;
			}
			else
				return FALSE;
		}
			
	}


///////////////////// upload dan sonraki gerekli dataları alan metodlar başlangıç ///////////////////
	public function getUploadedFileFullData()
	{
		return $this->data_after_upload;
	}

	public function getUploadedFileFullPath()
	{
		return $this->data_after_upload['full_path'];
	}

	public function getUploadedFilePath()
	{
		return $this->data_after_upload['file_path'];
	}

	public function getUploadedFileSize()
	{
		return $this->data_after_upload['file_size'];
	}

	public function getUploadedFileExtension()
	{
		return $this->data_after_upload['file_ext'];
	}

	public function getUploadedFileType()
	{
		return $this->data_after_upload['file_type'];
	}

	public function getUploadedFileClientName()
	{
		return $this->data_after_upload['client_name'];
	}

	public function getUploadedFileWidth()
	{
		list($width,$height) = getimagesize($this->getUploadedFileFullPath());
		return $width;
	}

	public function getUploadedFileHeight()
	{
		list($width,$height) = getimagesize($this->getUploadedFileFullPath());
		return $height;
	}
///////////////////// upload dan sonraki gerekli dataları alan metodlar bitiş ///////////////////



//////////////////// resize işleminden sonra gerekli dataları alan metodlar başlangıç //////////////
	public function getSizedBigImgNameForDB()
	{
		return $this->data_after_resize['db_big_image'];
	}

	public function getSizedThumbImgNameForDB()
	{
		return $this->data_after_resize['db_thumb_image'];
	}
////////////////// resize işleminden sonra gerekli dataları alan metodlar bitiş //////////////


///////////////// herhangi bir resmin form aracılığla seçilip seçilmediğini kontrol eder////	
	public function isSelectedAnyFile()
	{
		if ($this->getUploadedFileClientName()!=NULL)
			return TRUE;
		else
			return FALSE;
	}
////////////////////////////////////////////////////////////////////////////////////////////

	protected function image_rate_killer()
	{
		$uploaded_width  = $this->getUploadedFileWidth();
		$bootstrap_width = $this->bootstrap_data['big_img_width'];

		$uploaded_height  = $this->getUploadedFileHeight();
		$bootstrap_height = $this->bootstrap_data['big_img_height'];
		if ($uploaded_height > $bootstrap_height) 
		{
			$rate = $uploaded_height / $bootstrap_height;
			$this->bootstrap_data['big_img_height'] = $uploaded_height/$rate;
			$this->bootstrap_data['big_img_width'] = $uploaded_width/$rate;
		}
		else
		{
			$this->bootstrap_data['big_img_height'] = $uploaded_height;
			$this->bootstrap_data['big_img_width'] = $uploaded_width;	
		}

		$bootstrap_width_thumb = $this->bootstrap_data['thumb_img_width'];
		$thumb_rate = $this->bootstrap_data['big_img_width'] / $bootstrap_width_thumb;
		$this->bootstrap_data['thumb_img_width'] = $this->bootstrap_data['big_img_width'] / $thumb_rate;
		$this->bootstrap_data['thumb_img_height'] = $this->bootstrap_data['big_img_height'] / $thumb_rate;
	}


} /* end of class */
