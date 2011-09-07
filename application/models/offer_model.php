<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offer_model extends CI_model{
	
	private $tablename;
	private $queryfields;
	private $queryjoins;
	
	function __construct()
	{
		parent::__construct();
		$this->tablename = 'offer';
		$this->queryfields = '
			offer.id,
			brand.name as brand,
			model.name as model,
			fuel.name as fuel,
			exchange.name as exchange,
			color.name as color,
			state.name as state,
			city.name as city,
			origin.name as origin,
			offer.title,
			offer.slug,
			offer.description,
			offer.consideration,
			offer.factory_year,
			offer.model_year,
			offer.mileage,
			offer.plate,
			offer.price,
			offer.is_funding,
			user.id as user_id,
			user.name as user_name,
			user.alias';
			
		$this->queryjoins = array(
			array('brand', 'brand.id=offer.brand_id'),
			array('model', 'model.id=offer.model_id'),
			array('fuel', 'fuel.id=offer.fuel_id'),
			array('exchange', 'exchange.id=offer.exchange_id'),
			array('color', 'color.id=offer.color_id'),
			array('state', 'state.id=offer.state_id'),
			array('city', 'city.id=offer.city_id'),
			array('origin', 'origin.id=offer.origin_id'),
			array('user', 'user.id=offer.user_id')
		);
	}
	
	function all()
	{
		$this->db->select('*');
		$this->db->from($this->tablename);
		$this->db->where('status_id', 1);
		$this->db->order_by('title', 'ASC');
		
		$query = $this->db->get();
		$data  = array();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row){
				array_push($data, $row);
			}
		}
		
		return $data;
	}
	
	function featured($amount = 4)
	{
		$this->db->select($this->queryfields);
		$this->db->from($this->tablename);
		
		for($i=0; $i<count($this->queryjoins); $i++){
			$this->db->join($this->queryjoins[$i][0], $this->queryjoins[$i][1]);
		}
		
		$this->db->where('offer.status_id', 1);
		$this->db->order_by('offer.title', 'ASC');
		$this->db->limit($amount);
		
		$query = $this->db->get();
		$data  = array();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row){
				array_push($data, $row);
			}
		}
		
		return $data;
	}
	
	function details($slug)
	{
		$this->db->select($this->queryfields);
		$this->db->from($this->tablename);
		
		for($i=0; $i<count($this->queryjoins); $i++){
			$this->db->join($this->queryjoins[$i][0], $this->queryjoins[$i][1]);
		}
		
		$this->db->where('offer.status_id', 1);
		$this->db->where('offer.slug', $slug);
		$this->db->limit(1);
		
		$query = $this->db->get();
		$data  = array();
		
		if($query->num_rows() > 0){
			foreach ($query->result() as $row){
				array_push($data, $row);
			}
		}
		
		return $data;
	}
	
	function byuser($alias)
	{
		$this->db->select($this->queryfields);
		$this->db->from($this->tablename);
		
		for($i=0; $i<count($this->queryjoins); $i++){
			$this->db->join($this->queryjoins[$i][0], $this->queryjoins[$i][1]);
		}
		
		$this->db->where('offer.status_id', 1);
		$this->db->where('user.alias', $alias);
		
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
