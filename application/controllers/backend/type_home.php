<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class type_home extends CI_Controller {
	
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

		$this->load->model('type_home_model');	
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->img_lib_bootstrap_data = array(
											  'image_form_field' =>	'photo_field',
											  'upload_path'		 =>	'assets/images/type_home',
											  'image_name'		 =>	$this->img_name,
											  'big_img_width'	 =>	NULL,
											  'big_img_height'	 =>	NULL,
											  'thumb_img_width'	 =>	200,
											  'thumb_img_height' =>	127
					 	 					);
	}

	public function addItemForm()
	{
		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/add_type_home_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}


	public function controlItem()
	{
		$title 	= $this->input->post('title');

		if (($title!='')) 
		{
			$this->img_name = filterForeignChars($title);
			$reference_css = $this->img_name;
			$this->img_lib_bootstrap_data['image_name'] =  $this->img_name;			

			$this->load->library('image_upload_resize_library');
				
			$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
		
			$this->image_upload_resize_library->display_errors = FALSE;

			$image_up_and_resize = $this->image_upload_resize_library->imageUpAndResize();

			if ($image_up_and_resize == TRUE) 
			{
				$big_img_data_for_db	= $this->image_upload_resize_library->getSizedBigImgNameForDB();
				$thumb_img_data_for_db	= $this->image_upload_resize_library->getSizedThumbImgNameForDB();

				$insert_item_detail_to_db = $this->type_home_model->insertNewItemDetail($title);
				if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
				{
					$insert_item_photo_to_db = $this->type_home_model->insertNewItemPhoto($big_img_data_for_db, 
																						$thumb_img_data_for_db);
					if ($insert_item_photo_to_db==TRUE) 
					{
						$message = 'Tebrikler! Kayıt Başarılı.';
						$return_path = 'allItems';
						$this->jquery_notification_library->successMessage($message, $return_path,2);						
					}
					else
					{
						$message = 'Fotoğraf Bilgileri Veritabanına Kaydedilemedi';
						$return_path = 'addItemForm';
						$this->jquery_notification_library->errorMessage($message, $return_path,2);								
					}

				}
				else
				{
					$message = 'Form Bilgileri Veritabanına Kaydedilemedi';
					$return_path = 'addItemForm';
					$this->jquery_notification_library->errorMessage($message, $return_path,2);					
				}

			}
			elseif ($this->image_upload_resize_library->isSelectedAnyFile()==FALSE) 
			{
				$message = 'Lütfen Bir Resim Seçin';
				$return_path = 'addItemForm';
				$this->jquery_notification_library->errorMessage($message, $return_path,0.2);
			}			
			else
				echo "resim yuklenemedi<br/>";			
		}
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'addItemForm';
			$this->jquery_notification_library->errorMessage($message, $return_path,0.2);
		}
	}

	public function allItems()
	{
		if ($this->type_home_model->readRow()!=NULL) 
		{
			$this->parser_data['all_items'] = $this->type_home_model->readRow();
			$this->parser_data['all_items_header_css']  = array(array());
		}
		else
		{
			$this->parser_data['all_items'] = array();	
			$this->parser_data['all_items_header_css']  = array();	
		}

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/all_type_home_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	public function updateItemDetailForm($id)
	{
		$this->parser_data['item_detail'] = $this->type_home_model->readRow($id);
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_type_home_detail_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function updateItemDetail()
	{
		$reference_id = $this->input->post('id');

		$reference_title 	= $this->input->post('reference_title');

		if (($reference_title!='')) 
		{
			$reference_css = filterForeignChars($reference_title);

			$update_item_detail = $this->type_home_model->updateItemDetail($reference_id, $reference_title);
			if ($update_item_detail == TRUE) 
			{
				$message = 'Kayıt Güncelleme Başarılı..!';
				$return_path = 'allItems';
				$this->jquery_notification_library->successMessage($message, $return_path,1);	
			}
			else
			{
				$message = 'HATA:: Kayıt Güncellenemedi..!';
				$return_path = 'updateItemDetailForm/'.$reference_id;
				$this->jquery_notification_library->errorMessage($message, $return_path,1);		
			}
		}
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'updateItemDetailForm/'.$reference_id;
			$this->jquery_notification_library->errorMessage($message, $return_path,1);			
		}	
	}

	public function changeItemPhotoForm($id, $photo_id)
	{
		$this->parser_data['id'] = $id;
		$this->parser_data['action'] = 'type_home/changeItemPhoto';
		$this->parser_data['photo_id']	= $photo_id;

		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/photo_upload_form',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function deleteItem($id)
	{
		if ($this->deleteItemPhoto($id)==TRUE) 
		{
			if ($this->type_home_model->deleteRow($id) == TRUE)
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
		$image_paths = $this->type_home_model->readRow($id);

		$files = array($image_paths[0]['type_home_big_photo'], $image_paths[0]['type_home_thumb_photo']);
		
		if (unLinkFile($files) == TRUE) 
			return TRUE;
		else
			return FALSE;
	}

	public function changeItemPhoto()
	{
		$id 		= $this->input->post('id');
		$photo_id 	= $this->input->post('photo_id');

		$records 	= $this->type_home_model->readRow($id);
		$this->img_name = filterForeignChars($records[0]['type_home_title']);

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
				if (($this->type_home_model->deletePhotoRow($photo_id)==TRUE) &&
					($this->type_home_model->insertNewItemPhoto($big_img_data_for_db,
																 	 $thumb_img_data_for_db, $id) == TRUE))
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
