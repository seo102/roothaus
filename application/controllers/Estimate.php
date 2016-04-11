<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estimate extends CI_Controller {
	
	var $data = array(
	);

	// 견적 main
	public function index()
	{
		$this->load->view('estimateview');
	}
	
	private function getLeftCategoryData() {
		// 좌측 카테고리 데이터 가져오기
		$this->load->model('Category_model', '', TRUE); // 모델 호출
		$this->data['categoryList'] = $this->Category_model->get_category_list_by_depth("1");
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
		$this->data['type'] = $infoType;
		// 좌측 카테고리 데이터 가져오기
		$this->getLeftCategoryData();
		
		// 우측 컨텐츠 데이터 가져오기
		$this->load->model('Product_model', '', TRUE); // 모델 호출
		$this->data['productList'] = $this->Product_model->get_product_list_by_category($infoType);
		
		// 기본 정보 입력인 경우 파라미터 있음
		if ($infoType != null && $infoType == 'basic') {
			$this->load->view('estimate_create_basic_view', $this->data);
			return;
		}
		
		if ($estimateId == null || $estimateId == 0) {
			// 건젹서 신규 생성
			$this->load->view('estimate_create_view', $this->data);
			return;
		} else {
			// 기존 견적서 조회 / 수정
			$this->load->view('estimate_create_view', $this->data);
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
		
		// 좌측 카테고리 데이터 가져오기
		$this->getLeftCategoryData();
		
		$this->load->view('estimate_result_view', $this->data);
	}
	
	// 제품 옵션 가져오기
	public function getProductOption($optionId) {
		$this->load->model('Product_option_model', '', TRUE); // 모델 호출
		$this->data['productOptionList'] = $this->Product_option_model->get_product_option_list_by_type($optionId);
		$this->data['optionTypeId'] = $optionId;
		
		$this->load->view('product_option_view', $this->data);
	}
}
