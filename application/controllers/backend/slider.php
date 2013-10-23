<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slider extends CI_Controller {
	
	protected $parser_data;

	protected $img_lib_bootstrap_data = array();
	protected $img_name;	
	
	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');

		$this->load->model('slider_model');

		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->img_lib_bootstrap_data = array(
												'image_form_field'	=>	'photo_field',
												'upload_path'		=>	'assets/images/main_slider',
												'image_name'		=>	$this->img_name,
												'big_img_width'		=>	906,
												'big_img_height'	=>	404,
												'thumb_img_width'	=>	80,
												'thumb_img_height'	=>	80
					 						);		
	}

	public function addSliderForm()
	{
		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/add_slider_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}

	public function controlSlider()
	{
		$slider_title = rand().'_'.rand();

		if (($slider_title!='')) 
		{
			$this->img_name = filterForeignChars($slider_title);
			$this->img_lib_bootstrap_data['image_name'] =  $this->img_name;

			$this->load->library('image_upload_resize_library');
				
			$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
			$this->image_upload_resize_library->display_errors = FALSE;

			$image_up_and_resize = $this->image_upload_resize_library->imageUpAndResize();

			if ($image_up_and_resize == TRUE) 
			{
				$big_img_data_for_db	= $this->image_upload_resize_library->getSizedBigImgNameForDB();
				$thumb_img_data_for_db	= $this->image_upload_resize_library->getSizedThumbImgNameForDB();

				$insert_item_detail_to_db = $this->slider_model->insertNewSliderText($slider_title);
				if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
				{
					$insert_item_photo_to_db = $this->slider_model->insertNewSliderPhoto($big_img_data_for_db, $thumb_img_data_for_db);
					if ($insert_item_photo_to_db==TRUE) 
					{
						$message = 'Tebrikler! Kayıt Başarılı.';
						$return_path = 'allItems';
						$this->jquery_notification_library->successMessage($message, $return_path,2);						
					}
					else
					{
						$message = 'Fotoğraf Bilgileri Veritabanına Kaydedilemedi';
						$return_path = 'addSliderForm';
						$this->jquery_notification_library->errorMessage($message, $return_path,2);								
					}
				}
				else
				{
					$message = 'Form Bilgileri Veritabanına Kaydedilemedi';
					$return_path = 'addSliderForm';
					$this->jquery_notification_library->errorMessage($message, $return_path,2);					
				}

			}
			elseif ($this->image_upload_resize_library->isSelectedAnyFile()==FALSE) 
			{
				$message = 'Lütfen Bir Resim Seçin';
				$return_path = 'addSliderForm';
				$this->jquery_notification_library->errorMessage($message, $return_path,0.2);
			}
			else
				echo "resim yuklenemedi<br/>";			
		}
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'addSliderForm';
			$this->jquery_notification_library->errorMessage($message, $return_path,0.2);
		}

	}

	public function allItems()
	{
		if ($this->slider_model->readRow()!=NULL) 
		{
			$this->parser_data['all_sliders'] = $this->slider_model->readRow();
			$this->parser_data['all_sliders_header_css']  = array(array());
		}
		else
		{
			$this->parser_data['all_sliders'] = array();	
			$this->parser_data['all_sliders_header_css']  = array();	
		}
		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/all_slider_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	public function updateItemDetailForm($id)
	{
		$this->parser_data['slider_detail'] = $this->slider_model->readRow($id);
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_slider_detail_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

/*	public function updateItemDetail()
	{
		$id = $this->input->post('id');
		$slider_title  = $this->input->post('slider_title');
		$slider_detail = $this->input->post('slider_detail');

		if (($slider_title!='')&&($slider_detail!='')) 
		{
			$update_item_detail = $this->slider_model->updateSliderText($id, $slider_title, $slider_detail);
			if ($update_item_detail == TRUE) 
			{
				$message = 'Kayıt Güncelleme Başarılı..!';
				$return_path = 'allItems';
				$this->jquery_notification_library->successMessage($message, $return_path,1);	
			}
			else
			{
				$message = 'HATA:: Kayıt Güncellenemedi..!';
				$return_path = 'updateItemDetailForm/'.$id;
				$this->jquery_notification_library->errorMessage($message, $return_path,1);		
			}
		}
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'updateItemDetailForm/'.$id;
			$this->jquery_notification_library->errorMessage($message, $return_path,1);			
		}	
	}*/

	public function deleteItem($id)
	{
		if ($this->deleteItemPhoto($id)==TRUE) 
		{
			if ($this->slider_model->deleteRow($id) == TRUE)
			{
				$message = 'Kayıt Silme Başarılı..!';
				$return_path = '../allItems';
				$this->jquery_notification_library->successMessage($message, $return_path,1);					
			}
			else
			{
				$message = 'HATA:: Kayıt Silme Başarısız..!';
				$return_path = '../allItems';
				$this->jquery_notification_library->errorMessage($message, $return_path,1);					
			}
		}
	}

	protected function deleteItemPhoto($id)
	{
		$image_paths = $this->slider_model->readRow($id);

		$files = array($image_paths[0]['slider_big_photo'], $image_paths[0]['slider_thumb_photo']);
		
		if (unLinkFile($files) == TRUE) 
			return TRUE;
		else
			return FALSE;
	}		

	public function changeItemPhotoForm($id, $photo_id)
	{
		$this->parser_data['id'] = $id;
		$this->parser_data['action'] = 'slider/changeItemPhoto';
		$this->parser_data['photo_id']	= $photo_id;

		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/photo_upload_form',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function changeItemPhoto()
	{
		$id 		= $this->input->post('id');
		$photo_id 	= $this->input->post('photo_id');

		$records 	= $this->slider_model->readRow($id);
		$this->img_name = filterForeignChars($records[0]['slider_text_title']);
		$this->img_lib_bootstrap_data['image_name'] =  $this->img_name;

		$this->load->library('image_upload_resize_library');
				
		$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
		
		$this->image_upload_resize_library->display_errors = FALSE;
			
		$image_up_and_resize = $this->image_upload_resize_library->imageUpAndResize();

		if (($this->image_upload_resize_library->isSelectedAnyFile()==TRUE)&&($image_up_and_resize == TRUE)) 
		{
			$big_img_data_for_db	= $this->image_upload_resize_library->getSizedBigImgNameForDB();
			$thumb_img_data_for_db	= $this->image_upload_resize_library->getSizedThumbImgNameForDB();

			$unlink_files = $this->deleteItemPhoto($id);

			if ($unlink_files==TRUE) 
			{
				if (($this->slider_model->deletePhotoRow($photo_id)==TRUE) &&
					($this->slider_model->insertNewSliderPhoto($big_img_data_for_db, $thumb_img_data_for_db, $id) == TRUE))
				{
					$message = 'Fotoğraf Yenileme Başarılı..!';
					$return_path = 'allItems';
					$this->jquery_notification_library->successMessage($message, $return_path,1);
				}
				else
				{
					$message = 'HATA:: kayıt yenilenemedi!';
					$return_path = "changeItemPhotoForm/$id/$photo_id";
					$this->jquery_notification_library->errorMessage($message, $return_path,2);	
				}
			}
			else
				echo 'resim silinemedi';
		}	
		elseif ($this->image_upload_resize_library->isSelectedAnyFile()!=TRUE) 
		{
			$message = 'HATA:: Fotoğraf Seçilmedi!';
			$return_path = "changeItemPhotoForm/$id/$photo_id";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
		else
		{
			$message = 'HATA:: Fotoğraf Yüklenemedi!';
			$return_path = "changeItemPhotoForm/$id/$photo_id";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
	}	
}