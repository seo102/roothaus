<?php

class Category_model extends CI_Model {
	
	var $category_id = '';
	var $depth = '';
	var $category_name = '';
	var $up_category_id = '';
	var $is_leaf = '';
	var $type = '';
			
	function __construct() {
		parent::__construct();
	}
	
	function get_category_list_by_depth($queryString)
	{
		/*
		$query = $this->db->get('user', 10);
		*/
		/*
		$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";		
		$this->db->query($sql, array(3, 'live', 'Rick'));
		*/
		$sql = "select * from est_category where depth = '".$this->db->escape_str($queryString)."'";
		
		$query = $this->db->query($sql);
		return $query->result();
	}
	
}

?>