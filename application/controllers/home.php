<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = $this->parameter_model->all();
		$data['root'] = site_url();
		
		$data['offers'] = $this->offer_model->featured(12);
		
		$this->load->view('application/common/header', $data);
		$this->load->view('application/common/search', $data);
		$this->load->view('application/home/index', $data);
		$this->load->view('application/common/footer', $data);
	}
}
