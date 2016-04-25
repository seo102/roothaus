<?php

class Estimate_model extends CI_Model {
	
	var $estimate_id = '';
	var $title = '';
	var $create_id = '';
	var $create_datetime = '';
	var $update_datetime = '';
	var $price_buffer = '';
	var $total_area = '';
	var $roof_area = '';
	var $outer_area = '';
	var $inner_area = '';
	var $floor_area = '';
	var $land_area = '';
	var $floor_count = '';
	var $room_count = '';
	var $family_count = '';
			
	function __construct() {
		parent::__construct();
	}
	
	function get_estimate_info($estimateId)
	{
		$sql = "SELECT * FROM est_estimate_info WHERE estimate_id = '".$estimateId."'";
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	function insert_estimate_info($queryString)
	{
		$sql = "insert into est_estimate_info set create_id = '".$this->db->escape_str($queryString)."', create_datetime = now(), update_datetime = now()";		
		$query = $this->db->query($sql);
		$sql = "SELECT LAST_INSERT_ID() 'estimate_id'";	// auto increment된 아이디 return	
		$query = $this->db->query($sql);
				
		return $query->row(); // 한줄의 결과만 리턴
	}
	
	function update_estimate_info($estimateId, $createId, $inputArray)
	{		
		//echo $inputArray->post('estimate_id', true);
		
		$updateArray = array(
			"title" => $inputArray->post('title', true),
			"update_datetime" => date("Y-m-d H:i:s"),
			"total_area" => $inputArray->post('total_area', true),
			"roof_area" => $inputArray->post('roof_area', true),
			"outer_area" => $inputArray->post('outer_area', true),
			"inner_area" => $inputArray->post('inner_area', true),
			"floor_area" => $inputArray->post('floor_area', true),
			"land_area" => $inputArray->post('land_area', true),
			"floor_count" => $inputArray->post('floor_count', true),
			"room_count" => $inputArray->post('room_count', true),
			"family_count" => $inputArray->post('family_count', true)
		);
		$whereArray = array (
			"estimate_id" => $inputArray->post('estimate_id', true),
			//$this->db->where("create_id", $this->session->userdata("userId")); 세션값 userId에 아이디 넣어두기
			"create_id" => $createId
		);
		
		//$this->db->set("update_datetime", date("Y-m-d H:i:s"));
		//$this->db->where("estimate_id", $estimateId); 
		$this->db->update(est_estimate_info, $updateArray, $whereArray);		
		
		/*
		$sql = "UPDATE est_estimate_info SET title = '', update_datetime = now(), total_area = '', roof_area = '', outer_area = '', inner_area = '', floor_area = '' 
				WHERE id = ? AND status = ? AND author = ?";
		*/
	}
	
	
}

?>