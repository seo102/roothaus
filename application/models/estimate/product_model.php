<?php

class Product_model extends CI_Model {
	
	var $product_id = '';
	var $category_id = '';
	var $option_type_id = '';
	var $product_name = '';
	var $image_url = '';
	var $grade_price = '';
	var $grade_performance = '';	
	var $desc = '';
	var $price = '';
	var $price_standard = '';
	var $use_reserve_fund = '';
	var $use_count = '';
	var $default_count = '';
	var $option_enable = '';
	var $enable = '';
	var $selected_product = '';
	var $selected_product_option = '';
	
			
	function __construct() {
		parent::__construct();
	}
	
	function get_product_list_by_category($categoryId, $estimateId)
	{
		/*
		$query = $this->db->get('user', 10);
		*/
		/*
		$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";		
		$this->db->query($sql, array(3, 'live', 'Rick'));
		*/
		//$sql = "select * from est_category where depth = '".$this->db->escape_str($queryString)."'";
		//$sql = "select * from est_product where enable = 'Y' and category_id = '".$this->db->escape_str($queryString)."' ";
		$sql = "select a.*, b.product_id as 'selected_product' , b.product_option_id as 'selected_product_option' from est_product a left join est_estimate_product b
		on a.category_id = b.category_id and a.product_id = b.product_id and b.estimate_id = '".$this->db->escape_str($estimateId)."' where  a.enable = 'Y' and a.category_id = '".$this->db->escape_str($categoryId)."'";
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
}

?>