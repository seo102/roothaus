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
	
	private function getLeftCategoryData($estimateId) {
		// 좌측 카테고리 데이터 가져오기
		$this->load->model('Category_model', '', TRUE); // 모델 호출
		$this->data['categoryList'] = $this->Category_model->get_category_list_by_depth("1");
		
		// 카테고리 아이디를 키로 하고 카테고리 오더값을 가지는 배열 생성
		$categoryByOrder = array(
		);
		foreach ($this->data['categoryList'] as $var) {
			$categoryByOrder[$var->category_id] = $var->order_seq;
		}
		
		$this->data['categoryByOrder'] = $categoryByOrder;
		$this->data['estimateId'] = $estimateId;
	}
	
	// 견적 생성 / 조회 / 수정
	public function createEst($estimateId, $infoType)
	{		
		$this->load->helper('url'); // url 헬퍼 로드
		//$this->load->view('errors/error_page');
		$this->data['type'] = $infoType;
		$this->data['estimateId'] = $estimateId;
		// 좌측 카테고리 데이터 가져오기
		$this->getLeftCategoryData($estimateId);
		
		// 우측 컨텐츠 데이터 가져오기
		$this->load->model('Product_model', '', TRUE); // 모델 호출
		$this->data['productList'] = $this->Product_model->get_product_list_by_category($infoType, $estimateId);
		
		$this->load->model('Estimate_model', '', TRUE); // 모델 호출
		if ($estimateId == null || $estimateId == 0) {
			// 건젹서 신규 생성
			
			// 견적서 데이터 추가
			$createId = "admin"; // 세션에 저장되어 있는 로그인 한 아이디 값을 넣어야 함 //asdf
			
			$lastInsertId = $this->Estimate_model->insert_estimate_info($createId);
			//$this->data['estimateId'] = $lastInsertId->estimate_id; // 새로 생성된 견적서 ID값
			
			redirect('/estimate/createEst/'.$lastInsertId->estimate_id.'/basic', 'refresh'); // 리다이렉트			
		} else {
			// 기존 견적서 조회 / 수정			
			$this->data['categoryId'] = $infoType;
			
			// 기본 정보 입력인 경우 파라미터 있음
			if ($infoType != null && $infoType == 'basic') {
				
				$this->data['estimateInfoList'] = $this->Estimate_model->get_estimate_info($estimateId);
				
				$this->load->view('estimate_create_basic_view', $this->data);
				return;
			} else {			
				$this->load->view('estimate_create_view', $this->data);
				return;
			}
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
			//견적서 아이디를 파라미터로 받음.
		}		
		$createId = "admin"; // 세션에 저장되어 있는 로그인 한 아이디 값을 넣어야 함 //asdf
		
		// 좌측 카테고리 데이터 가져오기
		$this->getLeftCategoryData();
	
		$this->load->model('Estimate_result_model', '', TRUE);
		$this->data['estimateResultBasic'] = $this->Estimate_result_model->get_estimate_result_basic_info($estimateId, $createId);
		$this->data['estimateResultProduct'] = $this->Estimate_result_model->get_estimate_result_product_info($estimateId);
		
		$this->load->view('estimate_result_view', $this->data);
	}
	
	// 제품 옵션 가져오기
	public function getProductOption($optionId, $productId, $estimateId, $categoryId, $isSelectedProduct) {
		$this->load->model('Product_option_model', '', TRUE); // 모델 호출
		$this->data['productOptionList'] = $this->Product_option_model->get_product_option_list_by_type($optionId,$estimateId);
		$this->data['optionTypeId'] = $optionId;
		$this->data['productId'] = $productId;
		$this->data['estimateId'] = $estimateId;
		$this->data['categoryId'] = $categoryId;
		$this->data['isSelectedProduct'] = $isSelectedProduct;
		
		$this->load->view('product_option_view', $this->data);
	}
	
	// 견적서 기본정보 저장
	public function saveEstimateInfo() {
		$this->load->helper('url'); // url 헬퍼 로드
		$estimateId = $this->input->post('estimate_id', true);
				
		if ($estimateId == null || $estimateId == 0) {
			// 오류
		} else {
			// update
			
			$createId = "admin"; // 세션에 저장되어 있는 로그인 한 아이디 값을 넣어야 함 //asdf
			// $estimateId 와 $createId를 where문에 넣어서 비교 후 update 한다.
				
			$this->load->model('Estimate_model', '', TRUE); // 모델 호출
			$lastInsertId = $this->Estimate_model->update_estimate_info($estimateId, $createId, $this->input);
						
			redirect('/estimate/createEst/'.$estimateId.'/basic', 'refresh'); // 리다이렉트
			
		}
	}
	
	// 견적서에 제품(옵션) 추가/저장
	public function saveEstimateProduct($isSelectedProduct) {
		// $estimateId, $productId, $optionId
		$this->load->helper('url'); // url 헬퍼 로드
		$estimateId = $this->input->post('estimate_id', true);
		$productId = $this->input->post('product_id', true);
		$productOptionId = $this->input->post('product_option_id', true);
		$categoryId = $this->input->post('category_id', true);
				
		if ($estimateId == null || $estimateId == 0) {
			// 오류
		} else {
			// update
			
			$createId = "admin"; // 세션에 저장되어 있는 로그인 한 아이디 값을 넣어야 함 //asdf
			// $estimateId 와 $createId를 where문에 넣어서 비교 후 update 한다.
			$this->load->model('Estimate_product_model', '', TRUE); // 모델 호출
			if (!$isSelectedProduct) {
				$this->Estimate_product_model->insert_estimate_product($categoryId, $estimateId, $productId, $productOptionId);
			} else {
				$this->Estimate_product_model->update_estimate_product($categoryId, $estimateId, $productId, $productOptionId, $this->input);
			}
			//$this->Estimate_model->update_estimate_product($estimateId, $createId, $this->input);
						
			redirect('/estimate/createEst/'.$estimateId.'/'.$categoryId, 'refresh'); // 리다이렉트
			
		}
	}
	
	// 견적서에 제품(옵션) 삭제
	public function deleteEstimateProduct($isSelectedProduct) {
		// $estimateId, $productId, $optionId
		$this->load->helper('url'); // url 헬퍼 로드
		$estimateId = $this->input->post('estimate_id', true);
		$productId = $this->input->post('product_id', true);
		$productOptionId = $this->input->post('product_option_id', true);
		$categoryId = $this->input->post('category_id', true);
		if ($estimateId == null || $estimateId == 0) {
			// 오류
		} else {	
			// update
				
			$createId = "admin"; // 세션에 저장되어 있는 로그인 한 아이디 값을 넣어야 함 //asdf
			// $estimateId 와 $createId를 where문에 넣어서 비교 후 update 한다.
			$this->load->model('Estimate_product_model', '', TRUE); // 모델 호출
			$this->Estimate_product_model->delete_estimate_product($categoryId, $estimateId, $productId, $productOptionId);
			redirect('/estimate/createEst/'.$estimateId.'/'.$categoryId, 'refresh'); // 리다이렉트				
		}
	}
	
}
