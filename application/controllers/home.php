<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['root']	= site_url();
		$data['params'] = $this->parameter_model->all();
		$data['offers'] = $this->offer_model->featured(12);
		
		$this->load->view('common/header', $data);
		$this->load->view('common/search', $data);
		$this->load->view('home/index', $data);
		$this->load->view('common/footer', $data);
	}
}
