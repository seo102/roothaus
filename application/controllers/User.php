<?php

class User extends CI_Controller {
	
	var $data = array(
	);
	
	public function index() {
		
	}
	
	public function login() {			
		$this->load->helper('url'); // url 헬퍼 로드
		$userId = $this->input->post('user_id', true);
		$password = $this->input->post('user_password', true);
		$referer = $this->input->post('referer', true); // 레퍼러
		
		if (strpos($referer, "user/login") != false || strpos($referer, "user/join") != false) {
			$referer = '/';
		}
				
		if ($userId == null || $password == null) {
			// 로그인 하려고 들어온 경우 로그인 페이지 출력
			$this->load->view('estimate/login_view');
		} else {
			//$this->load->library('session'); //세션초기화
			$this->load->model('estimate/User_model', '', TRUE); // 모델 호출
			$result = $this->User_model->get_login_info($userId, $password);
			
			if ($result) {
				$sessiondata = array(
						'id' => $result->id,
						'name' => $result->name,
						'type' => $result->type,
						'isLogin' => TRUE
				);
				$this->session->set_userdata($sessiondata);
				
				redirect($referer, 'refresh'); // 레퍼러 url로 리다이렉트
			} else {
				$data['msg'] = '로그인 실패. 아이디와 비밀번호를 확인하세요.';
				$this->load->view('estimate/login_view', $data);
			}
							
		}
	}
		
	public function logout() {
		$this->load->helper('url'); // url 헬퍼 로드
		$this->session->sess_destroy(); // 세션 파괴
		redirect('/', 'refresh'); // 메인으로 리다이렉트
	}
	
	public function join() {
		$this->load->helper('url'); // url 헬퍼 로드
		$userId = $this->input->post('user_id', true);
		$password = $this->input->post('user_password', true);
		$name = $this->input->post('user_name', true);
		$referer = $this->input->post('referer', true); // 레퍼러
		
		if ($userId == null || $password == null) {
			$this->load->view('estimate/join_view', $data);			
		} else {
			$this->load->model('estimate/User_model', '', TRUE); // 모델 호출
			$result = $this->User_model->insert_login_info($userId, $password, $name);
			
			if ($result) {			
				redirect('/user/login', 'refresh'); // 메인으로 리다이렉트
			} else {
				$data['msg'] = '회원 가입 실패. 아이디와 비밀번호를 확인하세요.';
				$this->load->view('estimate/join_view', $data);
			}
		}		
	}
	
}
?>
