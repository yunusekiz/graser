<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class uygulamalar extends CI_Controller {
	
	protected $parser_data;

	public function __construct()
	{
		parent::__construct();
		
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar';
	}	

	public function index()
	{
		$this->ahsap_kapi_sistemleri();
	}

	public function ahsap_ev()
	{
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar - Ahşap Ev';
		$this->parser->parse('frontend_views/ahsap_ev_view',$this->parser_data);
	}

	public function ahsap_ev_galeri()
	{
		$this->load->model('gal_home_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Ahşap Ev Galeri';
		$this->parser_data['ahsap_ev_galeri_iteration'] = $this->gal_home_model->readRow();
		$this->parser->parse('frontend_views/ahsap_ev_galeri_view',$this->parser_data);			
	}

	public function ahsap_ev_tip_projeler()
	{
		$this->load->model('type_home_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Ahşap Ev Tip Projeler ';
		$this->parser_data['ahsap_ev_tipi_iteration'] = $this->type_home_model->readRow();
		$this->parser->parse('frontend_views/ahsap_ev_tipi_projeler_view',$this->parser_data);			
	}

	public function ahsap_montaj()
	{
		$this->load->model('montage_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar - Ahşap Ürün Montajı Hizmetleri';
		$this->parser_data['montaj_iteration'] = $this->montage_model->readRow();
		$this->parser->parse('frontend_views/ahsap_mantaj_view',$this->parser_data);		
	}

	public function ahsap_kapi_sistemleri()
	{
		$this->load->model('model_pdf_model');
		$this->load->model('door_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar - Ahşap Kapı Sistemleri';
		$this->parser_data['kapi_iteration'] = $this->door_model->readRow();
		$this->parser_data['kapi_model_iteration'] = $this->model_pdf_model->read();
		$this->parser->parse('frontend_views/ahsap_kapi_view',$this->parser_data);			
	}

	public function ahsap_dolap_sistemleri()
	{
		$this->load->model('closet_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar - Ahşap Dolap Sistemleri';
		$this->parser_data['dolap_iteration'] = $this->closet_model->readRow();
		$this->parser->parse('frontend_views/ahsap_dolap_view',$this->parser_data);	
	}

	public function ahsap_dekorasyon_urunleri()
	{
		$this->load->model('decoration_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar - Ahşap Dekorasyon Ürünleri ';
		$this->parser_data['dekorasyon_iteration'] = $this->decoration_model->readRow();
		$this->parser->parse('frontend_views/ahsap_dekorasyon_view',$this->parser_data);	
	}

	public function ahsap_dis_mekan_urunleri()
	{
		$this->load->model('outdoor_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Uygulamalar - Ahşap Dış Mekan Ürünleri ';
		$this->parser_data['dis_mekan_iteration_1'] = $this->outdoor_model->readRow();
		$this->parser_data['dis_mekan_iteration_2'] = $this->outdoor_model->readRow();
		$this->parser->parse('frontend_views/ahsap_dis_mekan_view',$this->parser_data);
	}

	public function ahsap_dis_mekan_urunleri_galeri()
	{
		$this->load->model('gal_out_model');
		$this->parser_data['base'] = base_url();
		$this->parser_data['title'] = 'Metosan - Ahşap Dış Mekan Ürünleri Galeri ';
		$this->parser_data['ahsap_mekan_galeri_iteration'] = $this->gal_out_model->readRow();
		$this->parser->parse('frontend_views/ahsap_dis_mekan_galeri_view',$this->parser_data);			
	}		

}