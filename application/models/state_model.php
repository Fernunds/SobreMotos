<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class State_model extends CI_model{
	
	private $tablename;
	
	function __construct()
	{
		parent::__construct();
		$this->tablename = 'state';
	}
	
	function all()
	{
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where('status_id', 1);
		$this->db->order_by('name', 'ASC');
		
		$query = $this->db->get();
		$data  = array();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row){
				array_push($data, $row);
			}
		}
		
		return $data;
	}
	
	function by($by, $value)
	{
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where('status_id', 1);
		$this->db->where($by, $value);
		$this->db->order_by('name', 'ASC');
		
		$query = $this->db->get();
		$data  = array();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row){
				array_push($data, $row);
			}
		}
		
		return $data;
	}
}
