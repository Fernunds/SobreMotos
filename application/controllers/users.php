<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->user_model->check();
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
		if(@$this->session->userdata['logged']){
			redirect('/');
		}
		
		if(!$_POST){
			$data['root']	= site_url();
			$data['params'] = $this->parameter_model->all();
			
			$this->load->view('common/header', $data);
			$this->load->view('users/login', $data);
			$this->load->view('common/footer', $data);
		} else {
			if($this->user_model->login($_POST['email'], $_POST['password'])){
				redirect('/');
			}
		}
	}
	
	public function logoff()
	{
		$this->user_model->logoff();
		redirect('/');
	}
}
