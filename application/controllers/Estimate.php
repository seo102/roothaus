<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estimate extends CI_Controller {

	// 견적 main
	public function index()
	{
		$this->load->view('estimateview');
	}
	
	// 견적 생성 / 조회 / 수정
	public function createEst($estimateId, $infoType)
	{				
		/*
		if ($estimateId == null) {
			//echo $estimateId;
			//견적서 아이디를 파라미터로 받음.
			$this->load->view('errors/error_page');
			return false;
		}
		*/
		$data = array(
			'type' => $infoType
		);
		
		// 좌측 카테고리 데이터 가져오기
		$this->load->model('Category_model', '', TRUE); // 모델 호출
		$data['categoryList'] = $this->Category_model->get_category_list_by_depth("1");
		
		// 우측 컨텐츠 데이터 가져오기
		$this->load->model('Product_model', '', TRUE); // 모델 호출
		$data['productList'] = $this->Product_model->get_product_list_by_category($infoType);
		
		
		// 기본 정보 입력인 경우 파라미터 있음
		if ($infoType != null && $infoType == 'basic') {
			$this->load->view('estimate_create_basic_view', $data);
			return;
		}
		
		if ($estimateId == null || $estimateId == 0) {
			// 건젹서 신규 생성
			$this->load->view('estimate_create_view', $data);
			return;
		} else {
			// 기존 견적서 조회 / 수정
			$this->load->view('estimate_create_view', $data);
			return;
		}
		
	}
	
	// 견적 리스트 조회
	public function estList()
	{
		$this->load->view('estimate_list_view');
	}
	
	// 견적 결과
	public function result($estimateId)
	{
		if ($estimateId == null) {
			//echo $estimateId;
			//견적서 아이디를 파라미터로 받음.
		}
		
		$this->load->view('estimate_result_view');
	}
}
