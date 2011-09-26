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
		
		$temp = $this->brand_model->by('id', $_POST['brand_id']);
		$data['filters']['Marca'] = 'Fabricante ' . $temp[0]->name;
		
		if(strlen($_POST['model_id']) > 1){
			$filters[] = array('offer.model_id =', $_POST['model_id']);
			
			$temp = $this->model_model->by('id', $_POST['model_id']);
			$data['filters']['Modelo'] = 'Modelo ' . $temp[0]->name;
		}
		
		if(strlen($_POST['min_price']) > 1){
			$filters[] = array('offer.price >', $_POST['min_price']);
			$filters[] = array('offer.price <', $_POST['max_price']);
			
			$data['filters']['Preço'] = 'Valor entre R$ ' . number_format($_POST['min_price'], 2) . ' e R$ ' . number_format($_POST['max_price'], 2);
		}
		
		if(strlen($_POST['min_year']) > 1){
			$filters[] = array('offer.factory_year >', $_POST['min_year']);
			$filters[] = array('offer.factory_year <', $_POST['max_year']);
			
			$data['filters']['Ano de Fabricação'] = 'Fabricada entre ' . $_POST['min_year'] . ' e ' . $_POST['max_year'];
		}
		
		if($_POST['state_id'] > 0){
			$filters[] = array('offer.state_id =', $_POST['state_id']);
			
			$temp = $this->state_model->by('id', $_POST['state_id']);
			$data['filters']['Estado'] = 'No estado ' . $temp[0]->name;
		}
		
		if($_POST['city_id'] > 0){
			$filters[] = array('offer.city_id =', $_POST['city_id']);
			
			$temp = $this->city_model->by('id', $_POST['city_id']);
			$data['filters']['Cidade'] = 'Na cidade ' . $temp[0]->name;
		}
		
		$data['offers'] = $this->offer_model->search($filters);
		
		$data['root']		= site_url();
		$data['params'] 	= $this->parameter_model->all();
		
		$this->load->view('common/header', $data);
		$this->load->view('common/search', $data);
		$this->load->view('offers/search', $data);
		$this->load->view('common/footer', $data);
	}
}
