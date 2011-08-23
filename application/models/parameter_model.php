<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Parameter_model extends CI_model{
	
	private $tablename;
	
	function __construct()
	{
		parent::__construct();
		$this->tablename = 'parameter';
	}
	
	function all()
	{
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where('status_id', 1);
		$this->db->order_by('parameter', 'ASC');
		
		$query = $this->db->get();
		$data  = array();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row){
				$data[$row->parameter] = $row->value;
			}
		}
		
		return $data;
	}
}
