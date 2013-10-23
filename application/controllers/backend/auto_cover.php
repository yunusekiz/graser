<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class auto_cover extends CI_Controller {
	
	protected $parser_data;

	protected $img_lib_bootstrap_data = array();
	protected $img_name;

	protected $change_item_form_action;
	
	protected $item_big_photo_column_name;
	protected $item_thumb_photo_column_name;

	protected $model_name;

	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');

		$this->model_name = 'auto_cover_model';
		$this->item_big_photo_column_name = 'cover_big_photo';
		$this->item_thumb_photo_column_name = 'cover_thumb_photo';

		$this->change_item_photo_form_action = 'auto_cover/changeItemPhoto';
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->load->model("{$this->model_name}");

		$this->img_lib_bootstrap_data = array(
											  'image_form_field' =>	'photo_field',
											  'upload_path'		 =>	'assets/images/auto/auto_cover',
											  'image_name'		 =>	$this->img_name,
											  'big_img_width'	 =>	800,
											  'big_img_height'	 =>	550,
											  'thumb_img_width'	 =>	218,
											  'thumb_img_height' =>	149
					 	 					);

		/*$this->load->model('auto_model');*/
	}

	public function addItemForm()
	{
		if ($this->{$this->model_name}->readParentRow() != NULL)
			$this->parser_data['auto_model_iteration'] = $this->{$this->model_name}->readParentRow();
		else
			$this->parser_data['auto_model_iteration'] = array();


/*		if ($this->auto_model->readRow() != NULL)
			$this->parser_data['auto_model_iteration'] = $this->auto_model->readRow();
		else
			$this->parser_data['auto_model_iteration'] = array();*/


		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/add_auto_cover_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}


	public function addItem()
	{
		$auto_id	 = $this->input->post('auto_id');

		if ($auto_id!='0') 
		{

			$this->load->library('image_upload_resize_library');
				
			$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
		
			$this->image_upload_resize_library->display_errors = FALSE;

			$image_up_and_resize = $this->image_upload_resize_library->imageUpAndResize();

			if ($image_up_and_resize == TRUE) 
			{
				$big_img_data_for_db	= $this->image_upload_resize_library->getSizedBigImgNameForDB();
				$thumb_img_data_for_db	= $this->image_upload_resize_library->getSizedThumbImgNameForDB();

				$insert_item_detail_to_db = $this->{$this->model_name}->insertNewItemDetail($auto_id, $big_img_data_for_db,
																							$thumb_img_data_for_db);
				if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
				{

					$message = 'Tebrikler! Kayıt Başarılı.';
					$return_path = 'allItems';
					$this->jquery_notification_library->successMessage($message, $return_path,2);						
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
		if ($this->{$this->model_name}->readRow()!=NULL) 
		{
			$this->parser_data['all_items'] = $this->{$this->model_name}->readRow();
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
		$this->parser->parse('backend_views/all_auto_cover_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	public function updateItemDetailForm($id)
	{
		$this->parser_data['item_detail'] = $this->{$this->model_name}->readRow($id);
		$this->parser_data['item_parent'] = $this->{$this->model_name}->readParentRow();
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_auto_cover_detail_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function updateItemDetail()
	{
		$item_id = $this->input->post('id');

		$new_auto_id		= $this->input->post('new_auto_id');
		$auto_recorded_id 	= $this->input->post('auto_recorded_id');

		if ($new_auto_id!='0') 
		{

			$update_item_detail = $this->{$this->model_name}->updateItemDetail($new_auto_id, $item_id);
			if ($update_item_detail == TRUE) 
			{
				$message = 'Kayıt Güncelleme Başarılı..!';
				$return_path = 'allItems';
				$this->jquery_notification_library->successMessage($message, $return_path,1);	
			}
			else
			{
				$message = 'HATA:: Kayıt Güncellenemedi..!';
				$return_path = 'updateItemDetailForm/'.$item_id;
				$this->jquery_notification_library->errorMessage($message, $return_path,1);		
			}
		}
		elseif ($auto_recorded_id!=NULL)
		{
			$message = 'Kayıt Güncelleme Başarılı..!';
			$return_path = 'allItems';
			$this->jquery_notification_library->successMessage($message, $return_path,1);			
		}
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'updateItemDetailForm/'.$item_id;
			$this->jquery_notification_library->errorMessage($message, $return_path,1);				
		}	
	}

	public function changeItemPhotoForm($id)
	{
		$this->parser_data['id'] = $id;
		$this->parser_data['action'] = $this->change_item_photo_form_action;

		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/photo_upload_form',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function deleteItem($id)
	{
		if ($this->deleteItemPhoto($id)==TRUE) 
		{
			if ($this->{$this->model_name}->deleteItemRow($id) == TRUE)
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
		$image_paths = $this->{$this->model_name}->readRow($id);

		$files = array($image_paths[0]["$this->item_big_photo_column_name"],
					   $image_paths[0]["$this->item_thumb_photo_column_name"]);
		
		if (unLinkFile($files) == TRUE) 
			return TRUE;
		else
			return FALSE;
	}

	public function changeItemPhoto()
	{
		$item_id 	= $this->input->post('id');

/*		$records 	= $this->{$this->model_name}->readRow($item_id);
		$this->img_name = filterForeignChars($records[0]['slider_text_detail']);
		$this->img_lib_bootstrap_data['image_name'] =  $this->img_name;*/

		$this->load->library('image_upload_resize_library');
				
		$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
		$this->image_upload_resize_library->display_errors = FALSE;
			
		$image_up_and_resize = $this->image_upload_resize_library->imageUpAndResize();

		if (($this->image_upload_resize_library->isSelectedAnyFile()==TRUE)&&($image_up_and_resize == TRUE)) 
		{
			$big_img_data_for_db	= $this->image_upload_resize_library->getSizedBigImgNameForDB();
			$thumb_img_data_for_db	= $this->image_upload_resize_library->getSizedThumbImgNameForDB();

			$unlink_files = $this->deleteItemPhoto($item_id);

			if ($unlink_files==TRUE) 
			{
				if (($this->{$this->model_name}->updateItemPhoto($big_img_data_for_db,
																 $thumb_img_data_for_db,
																 $item_id) == TRUE))
				{
					$message = 'Fotoğraf Yenileme Başarılı..!';
					$return_path = 'allItems';
					$this->jquery_notification_library->successMessage($message, $return_path,1);
				}
				else
				{
					$message = 'HATA:: Foroğraf yenilenemedi!';
					$return_path = "changeItemPhotoForm/$item_id/";
					$this->jquery_notification_library->errorMessage($message, $return_path,2);	
				}
			}
			else
				echo 'resim silinemedi';
		}	
		elseif ($this->image_upload_resize_library->isSelectedAnyFile()!=TRUE) 
		{
			$message = 'HATA:: Fotoğraf Seçilmedi!';
			$return_path = "changeItemPhotoForm/$item_id/";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
		else
		{
			$message = 'HATA:: Fotoğraf Yüklenemedi!';
			$return_path = "changeItemPhotoForm/$item_id/";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
	}
}