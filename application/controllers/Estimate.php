<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estimate extends CI_Controller {

	public function index()
	{
		$this->load->view('estimateview');
	}
	
	public function result($estimateId)
	{
		if ($estimateId == null) {
			//echo $estimateId;
			//견적서 아이디를 파라미터로 받음.
		}
		$this->load->view('estimate_result_view');
	}
}
