<?php

class Estimate_result_model extends CI_Model {
	
	// 기본정보 :: est_estimate_info
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
	// 제품정보 :: est_estimate_product
	var $category_id = '';
	var $product_id = '';
	var $product_option_id = '';
	// 카테고리 정보
	var $category_name = '';
	var $type = ''; // common 인지 option 인지
	//제품정보
	var $product_name = '';
	var $image_url = '';
	var $price = '';
	var $price_standard = '';
	
			
	function __construct() {
		parent::__construct();
	}
	
	function get_estimate_result_List($createId) {
		$sql = "SELECT * FROM est_estimate_info WHERE create_id = '".$createId."'" ;
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	// 견적 정보 (기본정보) 가져옴
	function get_estimate_result_basic_info($estimateId, $createId)	{
		$sql = "SELECT * FROM est_estimate_info WHERE estimate_id = '".$estimateId."' and create_id = '".$createId."'" ;
		$query = $this->db->query($sql);
		return $query->row();
	}
	
	// 견적 정보 (제품정보) 가져옴
	function get_estimate_result_product_info($estimateId) {
		$sql = "select a.*, b.category_name, b.type, c.product_name, c.image_url, c.price, c.price_standard from est_estimate_product a, est_category b, est_product c where a.category_id = b.category_id and a.product_id = c.product_id and a.estimate_id = '".$estimateId."'" ;		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	// 제품 옵션 정보 전체 리스트 가져옴 (캐싱처리 필요)
	function get_all_product_option_info() {
		$sql = "SELECT * FROM est_product_option";
		$query = $this->db->query($sql);
		return $query->result();
	}
		
}

?>