<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class lists extends CI_Controller {
	
	protected $parser_data;

	protected $img_lib_bootstrap_data = array();
	protected $img_name;

	protected $model_name;

	public function index()
	{
		return null;
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->session_killer_library->controlSession('admin_session');

		$this->model_name = 'list_model';	
		
		$this->item_big_photo_column_name = 'list_file_path';
		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';
		$this->change_item_photo_form_action = 'lists/changeItemPhoto';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->load->model("{$this->model_name}");

		$this->img_lib_bootstrap_data = array(
												'image_form_field'	=>	'photo_field',
												'upload_path'		=>	'assets/images/lists'
					 	 					 );
	}

	public function addItemForm()
	{
		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/add_list_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}

	public function addItem()
	{
		$list_title 	 = $this->input->post('list_title');
		$list_detail 	 = $this->input->post('list_detail');
		$list_title_eng  = $this->input->post('list_title_eng');
		$list_detail_eng = $this->input->post('list_detail_eng');

		if (($list_title!='')&&($list_detail!='')) 
		{
			if($list_title_eng=='')
				$list_title_eng = 'default_list_title';
			if($list_detail_eng=='')
				$list_detail_eng = 'default_list_detail';

			$file_name = filterForeignChars($list_title);
			$this->img_lib_bootstrap_data['image_name'] = $file_name;
			
			$this->load->library('image_upload_resize_library');
				
			$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
		
			$this->image_upload_resize_library->display_errors = FALSE;

			$file_upload = $this->image_upload_resize_library->imageUpload();

			if ($file_upload == TRUE) 
			{
				$file_path_after_upload = $this->image_upload_resize_library->getUploadedFileFullPath();
				$f_path = strstr($file_path_after_upload, 'assets');

				$insert_item_detail_to_db = $this->{$this->model_name}->insertNewItemDetail(
																						  	  $list_title,
																						  	  $list_detail,
																						  	  $list_title_eng,
																						  	  $list_detail_eng
																						    );
				if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
				{
					$insert_item_photo_to_db = $this->{$this->model_name}->insertNewItemPhoto($f_path);
					if ($insert_item_photo_to_db==TRUE) 
					{
						$message = 'Tebrikler! Kayıt Başarılı.';
						$return_path = 'allItems';
						$this->jquery_notification_library->successMessage($message, $return_path,2);						
					}
					else
					{
						$message = 'Dosya Bilgileri Veritabanına Kaydedilemedi';
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
				$message = 'Lütfen Bir Dosya Seçin';
				$return_path = 'addItemForm';
				$this->jquery_notification_library->errorMessage($message, $return_path,0.2);
			}			
			else
				echo "dosya yuklenemedi<br/>";			
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
		$this->parser->parse('backend_views/all_list_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	public function updateItemDetailForm($id)
	{
		$this->parser_data['item_detail'] = $this->{$this->model_name}->readRow($id);
		
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_list_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	public function updateItemDetail()
	{
		$item_id = $this->input->post('id');

		$list_title 	 = $this->input->post('list_title');
		$list_detail 	 = $this->input->post('list_detail');
		$list_title_eng  = $this->input->post('list_title_eng');
		$list_detail_eng = $this->input->post('list_detail_eng');


		if (($list_title!='')&&($list_detail!='')) 
		{
			if($list_title_eng=='')
				$list_title_eng = 'default_list_title';
			if($list_detail_eng=='')
				$list_detail_eng = 'default_list_detail';

			$update_item_detail = $this->{$this->model_name}->updateItemDetail($item_id,$list_title,
																			   $list_detail,$list_title_eng,
																			   $list_detail_eng);
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
		else
		{
			$message = 'Lütfen Boş Alan Bırakmayın';
			$return_path = 'updateItemDetailForm/'.$item_id;
			$this->jquery_notification_library->errorMessage($message, $return_path,1);			
		}	
	}

	public function changeItemPhotoForm($id, $photo_id)
	{
		$this->parser_data['id'] = $id;
		$this->parser_data['action'] = $this->change_item_photo_form_action;
		$this->parser_data['photo_id']	= $photo_id;

		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/file_upload_form',$this->parser_data);
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

		$files = array($image_paths[0]["$this->item_big_photo_column_name"]);
		
		if (unLinkFile($files) == TRUE) 
			return TRUE;
		else
			return FALSE;
	}

	public function changeItemPhoto()
	{
		$item_id 	= $this->input->post('id');
		$photo_id 	= $this->input->post('photo_id');

		$records 	= $this->{$this->model_name}->readRow($item_id);
		$this->img_name = filterForeignChars($records[0]['list_title']);
		$this->img_lib_bootstrap_data['image_name'] =  $this->img_name;

		$this->load->library('image_upload_resize_library');
				
		$this->image_upload_resize_library->setBootstrapData($this->img_lib_bootstrap_data);
		$this->image_upload_resize_library->display_errors = FALSE;
			
		$image_up_and_resize = $this->image_upload_resize_library->imageUpload();

		if (($this->image_upload_resize_library->isSelectedAnyFile()==TRUE)&&($image_up_and_resize == TRUE)) 
		{
			$file_path_after_upload = $this->image_upload_resize_library->getUploadedFileFullPath();
			$f_path = strstr($file_path_after_upload, 'assets');

			$unlink_files = $this->deleteItemPhoto($item_id);

			if ($unlink_files==TRUE) 
			{
				if (($this->{$this->model_name}->deleteItemPhotoRow($photo_id)==TRUE) &&
					($this->{$this->model_name}->insertNewItemPhoto($f_path, $item_id) == TRUE))
				{
					$message = 'Dosya Yenileme Başarılı..!';
					$return_path = 'allItems';
					$this->jquery_notification_library->successMessage($message, $return_path,1);
				}
				else
				{
					$message = 'HATA:: kayıt yenilenemedi!';
					$return_path = "changeItemPhotoForm/$item_id/$photo_id";
					$this->jquery_notification_library->errorMessage($message, $return_path,2);	
				}
			}
			else
				echo 'dosya silinemedi';
		}	
		elseif ($this->image_upload_resize_library->isSelectedAnyFile()!=TRUE) 
		{
			$message = 'HATA:: Dosya Seçilmedi!';
			$return_path = "changeItemPhotoForm/$item_id/$photo_id";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
		else
		{
			$message = 'HATA:: Dosya Yüklenemedi!';
			$return_path = "changeItemPhotoForm/$item_id/$photo_id";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
	}
}
