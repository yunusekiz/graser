<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class urunler extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['site_title'] = 'Ürünler | Graser';
		$this->iletisim();
		
		$this->load->model('product_model');
		$this->parser_data['urun_kategori_iteration'] = $this->product_model->readParentRow();
	}	

	public function index()
	{
		if ($this->product_model->readRowByParent(1)!=null)
			$this->parser_data['urun_iteration'] = $this->product_model->readRowByParent(1);
		else
			$this->parser_data['urun_iteration'] = array();

		$this->parser_data['cat_name_tr'] = $this->parser_data['urun_iteration'][0]['title_tr'];
		$this->parser_data['cat_name_eng'] = $this->parser_data['urun_iteration'][0]['title_eng'];

		$this->parser_data['pro_cat_css_switch'] = $this->parser_data['urun_iteration'][1]['pro_cat_css'];
		
		$this->parser->parse('frontend_views/urunler_view',$this->parser_data);
		/*var_dump($this->parser_data['urun_kategori_iteration']);*/
	}

	public function kategori($cat_css = '', $cat_id = '')
	{
		if (($cat_css!='') && ($cat_id!=''))
		{
			$parent_data = $this->product_model->readParentRow($cat_id);
			$this->parser_data['cat_name_tr']  = $parent_data[0]['title_tr'];
			$this->parser_data['cat_name_eng'] = $parent_data[0]['title_eng'];
			$this->parser_data['pro_cat_css_switch'] = $parent_data[0]['pro_cat_css'];

			if ($this->product_model->readRowByParent($cat_id)!=null)
				$this->parser_data['urun_iteration'] = $this->product_model->readRowByParent($cat_id);
			else
				$this->parser_data['urun_iteration'] = array();

			$this->parser->parse('frontend_views/urun_detay_view',$this->parser_data);
		}
		else
		{
			$base = base_url();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."urunler\">";
		}

	}

	protected function iletisim()
	{
		$this->load->model('contact_model');
		$this->parser_data['iletisim_iteration'] = $this->contact_model->readRow();
	}	
}

