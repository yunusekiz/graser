<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ref extends CI_Controller {
	
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

		$this->model_name = 'ref_model';
		$this->item_big_photo_column_name = 'ref_big_photo';
		$this->item_thumb_photo_column_name = 'ref_thumb_photo';

		$this->change_item_photo_form_action = 'ref/changeItemPhoto';
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['backend_base'] = base_url().'backend/';

		$this->load->library('jquery_notification_library');
		$this->jquery_notification_library->setParserData($this->parser_data);

		$this->load->model("{$this->model_name}");

		$this->img_lib_bootstrap_data = array(
											  'image_form_field' =>	'photo_field',
											  'upload_path'		 =>	'assets/images/ref',
											  'image_name'		 =>	$this->img_name,
											  'big_img_width'	 =>	null,
											  'big_img_height'	 =>	768,
											  'thumb_img_width'	 =>	175,
											  'thumb_img_height' =>	null
					 	 					);
	}
	

	/* bu controller ın bağlı olduğu veritabanındaki tabloya
 	   yeni kayıt eklemek için gerekli olan HTML formları getirir. */
	public function addItemForm() 
	{
		if ($this->{$this->model_name}->readParentRow() != NULL)
			$this->parser_data['ref_cat_iteration'] = $this->{$this->model_name}->readParentRow();
		else
			$this->parser_data['ref_cat_iteration'] = array();

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/add_ref_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);
	}


	/* Yeni kayıt için eklemek için formdan gönderilen değerleri kontrol edip veritabanına kaydeder.*/
	public function addItem()
	{
		$ref_title	= $this->input->post('title');
		$ref_detail	= $this->input->post('detail');
		$cat_id	 		= $this->input->post('cat_id');

		if (($ref_title!='')&&($cat_id!='0')&&($ref_detail!='')) 
		{
			$item_css = strtolower(filterForeignChars($ref_title));

			$this->load->library('img2_library');
				
			$this->img2_library->setBootstrapData($this->img_lib_bootstrap_data);
		
			$this->img2_library->display_errors = FALSE;

			$image_up_and_resize = $this->img2_library->imageUpAndResize();

			if ($image_up_and_resize == TRUE) 
			{
				$big_img_data_for_db	= $this->img2_library->getSizedBigImgNameForDB();
				$thumb_img_data_for_db	= $this->img2_library->getSizedThumbImgNameForDB();

				$insert_item_detail_to_db = $this->{$this->model_name}->insertNewItemDetail($cat_id,$ref_title,
																							$ref_detail,$item_css);
				if ($insert_item_detail_to_db==TRUE) // item detail ler db ye insert edilmişse, item photo bilgilerini db ye insert eder 
				{
					$insert_item_photo_to_db = $this->{$this->model_name}->insertNewItemPhoto($big_img_data_for_db, 
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
			elseif ($this->img2_library->isSelectedAnyFile()==FALSE) 
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

	
	/* Veritabanındaki ilgili tablodaki tüm değerleri getirir ve admin panelinin ilgili view'ını render eder. */
	public function allItems()
	{
		if ($this->{$this->model_name}->readParentRow()!=NULL) 
		{
			$this->parser_data['all_items_by_cat'] = $this->{$this->model_name}->readParentRow();
			$this->parser_data['all_items_header_css']  = array(array());
		}
		else
		{
			$this->parser_data['all_items_by_cat'] = array();	
			$this->parser_data['all_items_header_css']  = array();	
		}

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/all_ref_by_cat_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}

	/* Veritabanındaki ilgili tablodaki tüm değerleri getirir ve admin panelinin ilgili view'ını render eder. */
	public function allItemById($id,$name)
	{
		$name = urldecode($name);
		$this->parser_data['cat_name'] = $name;
		
		if ($this->{$this->model_name}->readRowByParent($id)!=NULL) 
		{
			$this->parser_data['all_items'] = $this->{$this->model_name}->readRowByParent($id);
			$this->parser_data['all_items2'] = $this->{$this->model_name}->readRowByParent($id);
			$this->parser_data['all_items_header_css']  = array(array());
		}
		else
		{
			$this->parser_data['all_items2'] = array();
			$this->parser_data['all_items'] = array();	
			$this->parser_data['all_items_header_css']  = array();	
		}

		// admin panelinin ilgili view lerini yükler
		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/all_ref_by_id_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);		
	}


	/* Veritabanındaki bilgileri update etmek için gerekli HTML formları ekrana getirir. */
	public function updateItemDetailForm($id)
	{
		$this->parser_data['item_detail'] = $this->{$this->model_name}->readRow($id);
		$this->parser_data['ref_cat_iteration'] = $this->{$this->model_name}->readParentRow();

		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/update_ref_detail_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	/* Veritabanındaki bilgileri update etmek için formdan gönderilen değerleri işleyerek update işlemi gerçekleştirir. */
	public function updateItemDetail()
	{
		$item_id = $this->input->post('id');

		$hidden_cat_name = $this->input->post('hidden_cat_name');
		$hidden_cat_id = $this->input->post('hidden_cat_id');
		$cat_id = $this->input->post('cat_id');

		if ($cat_id != '0')
			$ref_cat_id	= $cat_id;
		else
			$ref_cat_id = $hidden_cat_id;

		$ref_title = $this->input->post('ref_title');
		$ref_detail = $this->input->post('ref_detail');

		if (($ref_title!='')&&($ref_detail!='')) 
		{
			$item_css = strtolower(filterForeignChars($ref_title));

			$update_item_detail = $this->{$this->model_name}->updateItemDetail($ref_cat_id,$item_id,$ref_title,
																			   $ref_detail,$item_css);
			if ($update_item_detail == TRUE) 
			{
				$message = 'Kayıt Güncelleme Başarılı..!';
				/*$return_path = 'allItemById/'.$ref_cat_id.'/'.$hidden_cat_name;*/
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

	/* Fotoğrafı update etmek için ekrana HTML form getirir. */
	public function changeItemPhotoForm($id, $photo_id)
	{
		$this->parser_data['id'] = $id;
		$this->parser_data['action'] = $this->change_item_photo_form_action;
		$this->parser_data['photo_id']	= $photo_id;

		$this->parser->parse('backend_views/admin_header_view',$this->parser_data);
		$this->parser->parse('backend_views/admin_main_view',$this->parser_data);
		$this->parser->parse('backend_views/photo_upload_form',$this->parser_data);
		$this->parser->parse('backend_views/admin_footer_view',$this->parser_data);			
	}

	/* DB'deki ilgili kayıt ve ona bağlı olan fotoyu hem DB'den hem de server'dan siler */
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

	/* Bu metod sadece foto siler. Yukarıdaki metod bunu çağırır. 
	   URL üzerinden çağrılmaması gerektiği için protected'dır. 
	   Bu metod bir "Helper" sayesinde fotoları silebiliyor. 
	   O Helper'ın açıklaması ise (Helpers) dizinindeki mevcut.*/
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

	/* Fotoğraf update etmek için formdan gönderilen değerleri alır ve update işlemini gerçekleştirir. */
	public function changeItemPhoto()
	{
		$item_id 	= $this->input->post('id');
		$photo_id 	= $this->input->post('photo_id');

/*		$records 	= $this->{$this->model_name}->readRow($item_id);
		$this->img_name = filterForeignChars($records[0]['slider_text_detail']);
		$this->img_lib_bootstrap_data['image_name'] =  $this->img_name;*/

		$this->load->library('img2_library');
				
		$this->img2_library->setBootstrapData($this->img_lib_bootstrap_data);
		$this->img2_library->display_errors = FALSE;
			
		$image_up_and_resize = $this->img2_library->imageUpAndResize();

		if (($this->img2_library->isSelectedAnyFile()==TRUE)&&($image_up_and_resize == TRUE)) 
		{
			$big_img_data_for_db	= $this->img2_library->getSizedBigImgNameForDB();
			$thumb_img_data_for_db	= $this->img2_library->getSizedThumbImgNameForDB();

			$unlink_files = $this->deleteItemPhoto($item_id);

			if ($unlink_files==TRUE) 
			{
				if (($this->{$this->model_name}->deleteItemPhotoRow($photo_id)==TRUE) &&
					($this->{$this->model_name}->insertNewItemPhoto($big_img_data_for_db,
														   			$thumb_img_data_for_db, $item_id) == TRUE))
				{
					$message = 'Fotoğraf Yenileme Başarılı..!';
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
				echo 'resim silinemedi';
		}	
		elseif ($this->img2_library->isSelectedAnyFile()!=TRUE) 
		{
			$message = 'HATA:: Fotoğraf Seçilmedi!';
			$return_path = "changeItemPhotoForm/$item_id/$photo_id";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
		else
		{
			$message = 'HATA:: Fotoğraf Yüklenemedi!';
			$return_path = "changeItemPhotoForm/$item_id/$photo_id";
			$this->jquery_notification_library->errorMessage($message, $return_path,2);				
		}
	}
}