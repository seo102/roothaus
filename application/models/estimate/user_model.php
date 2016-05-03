<?php

class User_model extends CI_Model {
	
	var $id   = '';
	var $name = '';
	var $type = '';
	
	function __construct() {
		parent::__construct();
	}
	
	function get_login_info($userId, $password)
	{		
		$sql = "select id, name, type from user where id = '".$this->db->escape_str($userId)."' and password = password('".$this->db->escape_str($password)."')";
		$query = $this->db->query($sql);
		
		if ($query->num_rows() > 0) {			
			return $query->row(); // 로그인 성공시 회원정보 반환
		} else {
			return false;
		}
	}
	
	function insert_login_info($userId, $password, $name) 
	{
		$sql = "insert into user set id = '".$this->db->escape_str($userId)."', password = password('".$this->db->escape_str($password)."'), name = '".$this->db->escape_str($name)."', type = '1'";
		
		$query = $this->db->query($sql);
		
		if ($query) {			
			return true; // insert 쿼리 성공
		} else {
			//print_r($this->db->error()); // 에러확인
			return false;
		}
	}
}

?>