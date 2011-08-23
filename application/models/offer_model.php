<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Offer_model extends CI_model{
	
	private $tablename;
	
	function __construct()
	{
		parent::__construct();
		$this->tablename = 'offer';
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
		$this->db->select('
			offer.id,
			brand.name as brand,
			model.name as model,
			fuel.name as fuel,
			exchange.name as exchange,
			color.name as color,
			state.name as state,
			city.name as city,
			offer.title,
			offer.slug,
			offer.description,
			offer.factory_year,
			offer.model_year,
			offer.mileage,
			offer.plate,
			offer.price,
			offer.is_funding
		');
		
		$this->db->from($this->tablename);
		
		$this->db->join('brand', 'brand.id=offer.brand_id');
		$this->db->join('model', 'model.id=offer.model_id');
		$this->db->join('fuel', 'fuel.id=offer.fuel_id');
		$this->db->join('exchange', 'exchange.id=offer.exchange_id');
		$this->db->join('color', 'color.id=offer.color_id');
		$this->db->join('state', 'state.id=offer.state_id');
		$this->db->join('city', 'city.id=offer.city_id');
		
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
}
