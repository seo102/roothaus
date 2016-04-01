<?php

class User_model extends CI_Model {
	
	var $title   = '';
	var $content = '';
	var $date    = '';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_last_ten_entries()
	{
		/*
		$query = $this->db->get('user', 10);
		*/
		/*
		$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";		
		$this->db->query($sql, array(3, 'live', 'Rick'));
		*/
		$sql = "select * from user where id != '".$this->db->escape_str($this->title)."' limit 10";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	function insert_entry()
	{
		$this->title   = $_POST['title']; // please read the below note
		$this->content = $_POST['content'];
		$this->date    = time();
	
		$this->db->insert('entries', $this);
	}
	
	function update_entry()
	{
		$this->title   = $_POST['title'];
		$this->content = $_POST['content'];
		$this->date    = time();
	
		$this->db->update('entries', $this, array('id' => $_POST['id']));
	}
}

?>