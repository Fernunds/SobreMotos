<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->user_model->check();
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
		if(!$_POST){
			$this->load->view('users/login');
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
