<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offers extends CI_Controller {

	public function details($slug = '')
	{
		$data['root']		= site_url();
		$data['params'] 	= $this->parameter_model->all();
		$data['offers']		= $this->offer_model->details($slug);
		$data['contact']	= $this->telephone_model->byuser($data['offers'][0]->user_id);
		
		$this->load->view('common/header', $data);
		$this->load->view('offers/details', $data);
		$this->load->view('common/footer', $data);
	}
	
	public function search()
	{
		$filters = array();
		$filters[] = array('offer.brand_id =',$_POST['brand_id']);
		
		if(strlen($_POST['model_id'] > 1)){
			$filters[] = array('offer.model_id =', $_POST['model_id']);
		}
		
		if(strlen($_POST['min_price'] > 1)){
			$filters[] = array('offer.price >', $_POST['min_price']);
			$filters[] = array('offer.price <', $_POST['max_price']);
		}
		
		if(strlen($_POST['min_year'] > 1)){
			$filters[] = array('offer.factory_year >', $_POST['min_year']);
			$filters[] = array('offer.factory_year <', $_POST['max_year']);
		}
		
		if(strlen($_POST['state_id'] > 1)){
			$filters[] = array('offer.state_id =', $_POST['state_id']);
		}
		
		if(strlen($_POST['city_id']) > 1){
			$filters[] = array('offer.city_id =', $_POST['city_id']);
		}
		
		$data['offers'] = $this->offer_model->search($filters);
		
		$data['root']		= site_url();
		$data['params'] 	= $this->parameter_model->all();
		
		$this->load->view('common/header', $data);
		$this->load->view('offers/search', $data);
		$this->load->view('common/footer', $data);
	}
}
