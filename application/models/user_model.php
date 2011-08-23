<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_model{
	
	private $tablename;
	
	function __construct()
	{
		parent::__construct();
		$this->tablename = 'user';
	}
	
	function check()
	{
		if($this->session->userdata('logged')){
			return true;
		} else {
			redirect('users/login');
		}
		
		redirect('users/login');
	}
	
	function login($email, $password)
	{
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$this->db->where('status_id','1');
		
		$query = $this->db->get();
		
		if($query->num_rows > 0){
			$result = $query->result();
			
			$this->session->set_userdata(array(
				'logged'	=> true,
				'user'		=> $result[0]
			));
			
			return true;
		} else {
			return false;
		}
	}
	
	function logoff()
	{
		$this->session->unset_userdata('logged');
		
		return true;
	}
}
