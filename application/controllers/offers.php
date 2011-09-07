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
}
