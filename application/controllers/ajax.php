<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {
	
	function brands()
	{
		$data = $this->brand_model->all();
		print('<option value="0">Selecione...</option>');
		
		foreach($data as $row){
			print('<option value="'.$row->id.'">'.strtoupper($row->name).'</option>');
		}
	}
	
	function models($brand)
	{
		$data = $this->model_model->bybrand($brand);
		print('<option value="0">Selecione...</option>');
		
		foreach($data as $row){
			print('<option value="'.$row->id.'">'.$row->name.'</option>');
		}
	}
	
	function states()
	{
		$data = $this->state_model->all();
		print('<option value="0">Selecione...</option>');
		
		foreach($data as $row){
			print('<option value="'.$row->id.'">'.$row->name.'</option>');
		}
	}
	
	function cities($state)
	{
		$data = $this->city_model->bystate($state);
		print('<option value="0">Selecione...</option>');
		
		foreach($data as $row){
			print('<option value="'.$row->id.'">'.$row->name.'</option>');
		}
	}
	
	function telephone($id)
	{
		
	}
}