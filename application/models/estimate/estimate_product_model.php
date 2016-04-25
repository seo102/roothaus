<?php

class Estimate_product_model extends CI_Model {
	
	var $category_id = '';
	var $estimate_id = '';
	var $product_id = '';
	var $product_option_id = '';
	var $product_count = '';
			
	function __construct() {
		parent::__construct();
	}
	
	function get_estimate_product_by_category($estimateId, $categoryId)
	{
		$sql = "SELECT * FROM est_estimate_product WHERE estimate_id = '".$estimateId."' and category_id = '".$categoryId."'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function insert_estimate_product($categoryId, $estimateId, $productId, $productOptionId, $productCount)
	{
		$sql = "insert into est_estimate_product set category_id = '".$this->db->escape_str($categoryId)."', estimate_id = '".$this->db->escape_str($estimateId)."', product_id = '".$this->db->escape_str($productId)."', product_option_id = '".$this->db->escape_str($productOptionId)."', product_count = '".$this->db->escape_str($productCount)."'";	
		
		$query = $this->db->query($sql);
				
		return;
	}
	
	function update_estimate_product($categoryId, $estimateId, $productId, $productOptionId, $productCount, $inputArray)
	{				
		$updateArray = array(			
			"product_option_id" => $productOptionId,
			"product_count" => $productCount
		);
		$whereArray = array (
			"category_id" => $inputArray->post('category_id', true),
			"estimate_id" => $inputArray->post('estimate_id', true),
			"product_id" => $inputArray->post('product_id', true)
		);
		
		$this->db->update(est_estimate_product, $updateArray, $whereArray);				
	}	
	
	function delete_estimate_product($categoryId, $estimateId, $productId, $productOptionId)
	{
		$whereArray = array (
				"category_id" => $categoryId,
				"estimate_id" => $estimateId,
				"product_id" => $productId
		);
	
		$this->db->delete(est_estimate_product, $whereArray);
	}
	
}
?>