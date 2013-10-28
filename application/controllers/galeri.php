<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class galeri extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['site_title'] = 'Galeri | Graser';
		$this->iletisim();
	}	

	public function index()
	{
		$this->referanslar();
	}

	protected function iletisim()
	{
		$this->load->model('contact_model');
		$this->parser_data['iletisim_iteration'] = $this->contact_model->readRow();
	}

	public function sanal_tur()
	{
		$this->load->model('gal_model');
		$this->parser_data['galeri_kategori_iteration'] = $this->gal_model->readParentRow();	

		$this->load->model('tour_model');
		$this->parser_data['title'] = 'Sanal Tur | Graser';
		$this->parser_data['sanal_tur_iteration'] = $this->tour_model->readRow();
		$this->parser->parse('frontend_views/sanal_tur_view', $this->parser_data);
	}

	public function referanslar($ref_cat_css=null, $ref_cat_id=null)
	{	
		$this->load->model('gal_model');
		$this->parser_data['galeri_kategori_iteration'] = $this->gal_model->readParentRow();

		$this->load->model('ref_model');
		$this->parser_data['ref_kategori_iteration'] = $this->ref_model->readParentRow();


		if (($ref_cat_id==null)||($ref_cat_css==null)) 
		{
			$this->parser_data['ref_iteration'] = $this->ref_model->readRow();
			
			$this->parser_data['ref_cat_css_switch'] = 'hepsi';
		}
		else
		{	
			$ref_detail = $this->ref_model->readParentRow($ref_cat_id);	
			$this->parser_data['ref_cat_css_switch'] = $ref_detail[0]['ref_cat_css'];

			if ($this->ref_model->readRowByParent($ref_cat_id)!=null) 
			{
				$this->parser_data['ref_iteration'] = $this->ref_model->readRowByParent($ref_cat_id);
			}
			else
			{
				$this->parser_data['ref_iteration'] = array();
			}
				
		}

		$this->parser->parse('frontend_views/referans_view',$this->parser_data);
	}

	public function detay($gal_cat_css=null, $gal_cat_id=null)
	{
		$this->load->model('gal_model');
		$this->parser_data['galeri_kategori_iteration'] = $this->gal_model->readParentRow();

		$gal_detail = $this->gal_model->readParentRow($gal_cat_id);
		$this->parser_data['gal_cat_css_switch'] = $gal_detail[0]['gal_cat_css'];
		
		if (($gal_cat_css!=null)&&($gal_cat_id!=null))
		{	
			if ($this->gal_model->readRowByParent($gal_cat_id)!=null) 
			{	
				$this->parser_data['galeri_iteration'] = $this->gal_model->readRowByParent($gal_cat_id);	
			}
			else
			{
				$this->parser_data['galeri_iteration'] = array();	
			}
		}
		else
		{
			$base = base_url();
			echo "<meta http-equiv=\"refresh\" content=\"0; url=$base"."galeri\">";
		}

		$this->parser->parse('frontend_views/galeri_detay_view',$this->parser_data); 
	}
}

