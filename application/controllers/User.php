<?php

class User extends CI_Controller {
	
	public function index() {
				
		$data = array(
			'title' => 'title'	
		);
		
		$this->load->model('User_model', '', TRUE); // 모델 호출
		$data['db'] = $this->User_model->get_last_ten_entries();
		
		$this->load->view('userview', $data);
		//$string = $this->load->view('userview', $data, true);
		
	}
	
}
?>
