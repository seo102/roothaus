<?php

class Product_option_model extends CI_Model {
	
	var $option_id = '';
	var $option_type_id = '';
	var $option_type = '';
	var $option_name = '';
	
			
	function __construct() {
		parent::__construct();
	}
	
	function get_product_option_list_by_type($queryString)
	{
		/*
		$query = $this->db->get('user', 10);
		*/
		/*
		$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";		
		$this->db->query($sql, array(3, 'live', 'Rick'));
		*/
		//$sql = "select * from est_category where depth = '".$this->db->escape_str($queryString)."'";
		$sql = "select * from est_product_option where option_type_id = '".$this->db->escape_str($queryString)."' order by option_id";
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
}

?>