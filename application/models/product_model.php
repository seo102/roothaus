<?php

class Product_model extends CI_Model {
	
	var $product_id = '';
	var $category_id = '';
	var $option_id = '';
	var $product_name = '';
	var $image_url = '';
	var $grade = '';
	var $desc = '';
	var $price = '';
	var $price_standard = '';
	var $option_enable = '';
	var $enable = '';
	
			
	function __construct() {
		parent::__construct();
	}
	
	function get_product_list_by_category($queryString)
	{
		/*
		$query = $this->db->get('user', 10);
		*/
		/*
		$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";		
		$this->db->query($sql, array(3, 'live', 'Rick'));
		*/
		//$sql = "select * from est_category where depth = '".$this->db->escape_str($queryString)."'";
		$sql = "select * from est_product where enable = 'Y' and category_id = '".$this->db->escape_str($queryString)."' ";
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
}

?>