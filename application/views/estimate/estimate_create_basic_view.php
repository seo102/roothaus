<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 견적관리</title>	
	
	<script>
	// 견적서 기본정보 저장
	function saveEstInfo() {
		document.saveEstInfo.submit();
	}
	</script>
	
</head>

<body>

	<div class="top">
		<img alt="" src="/roothaus/resource/image/common/top_01.jpg" />
	</div>
	
	<div style="margin-top: 30px;">
		<img alt="" src="/roothaus/resource/image/common/line_001.gif" />
	</div>
	
	<?php include 'estimate_top_category_view.php';?>
	
	<div>
		<img alt="" src="/roothaus/resource/image/common/line_002.gif" />
	</div>
	
	<div class="content">
		<div class="title">
			<img style="float:left;" alt="" src="/roothaus/resource/image/common/bar_002.gif" />
			<span style="float:left;font-weight:bold;">예상면적 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="" alt="" src="/roothaus/resource/image/common/line_100.gif" /></span>			
			<span style="">본 예상견적서는 루트 건축물에 도움이 되고자 만든 것입니다.<br/>
				귀하의 주택의 참고자료 일뿐 정확한 견적이 아니며 정확한 견적은 설계미팅이 끝난 후에 결정됨을 알려드립니다.<br/>
				최대한 자세하게 그리고 신중하게 선택하시면 좋은 참고자료가 될 수 있습니다.</span>			
		</div>
		
		<br/><br/><br/>
		<form name="saveEstInfo" method="post" action="/roothaus/estimateMain/saveEstimateInfo">	
			<input type="hidden" name="estimate_id" value="<?= $estimateId?>">	
					
			<div class="product_list">
							
				<div class="basic-info">				
					<div class="product_title">견적제목</div><br/>				
					<hr style="border: 3px solid;">	
					<div class="basic-input-area">			
						<input class="basic-need-input" type="text" name="title" value="<?= $estimateInfoList->title?>"/>
						<br/><br/>
					</div>
					<hr style="border: 1px solid;">
				</div>
				<div class="basic-info">				
					<div class="product_title">토지면적</div><br/>				
					<hr style="border: 3px solid;">
					<div class="basic-input-area">							
						<input class="basic-need-input" type="text" name="land_area" value="<?= $estimateInfoList->land_area?>" onKeyUp="document.getElementById('land_area_calc').value=Math.round(this.value * 3.3058);"/> py
						<br/><br/>
						<input class="basic-input" style="margin: 0 0 0 -6px;" type="text" id="land_area_calc" name="" value="<?= round(($estimateInfoList->land_area)*3.3058)?>" disabled/> m<sup>3</sup>
					</div>
					<hr style="border: 1px solid;">
				</div>
				<div class="basic-info">				
					<div class="product_title">예상연면적</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-need-input" type="text" name="total_area" value="<?= $estimateInfoList->total_area?>" onKeyUp="inputTotalArea(this);"/> py
						<br/><br/>
						<input class="basic-input" style="margin: 0 0 0 -6px;" type="text" id="total_area_calc" name="" value="<?= round(($estimateInfoList->total_area)*3.3058)?>" disabled/> m<sup>3</sup>
					</div>
					<hr style="border: 1px solid;">
				</div>
				<div class="basic-info">				
					<div class="product_title">바닥면적</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-need-input" type="text" name="floor_area" value="<?= $estimateInfoList->floor_area?>" onKeyUp="inputFloorArea(this);"/> py
						<br/><br/>
						<input class="basic-input" style="margin: 0 0 0 -6px;" type="text" id="floor_area_calc" name="" value="<?= round(($estimateInfoList->floor_area)*3.3058)?>" disabled/> m<sup>3</sup>
					</div>
					<hr style="border: 1px solid;">
				</div>
				
				<div class="basic-info">				
					<div class="product_title">예상층수</div><br/>				
					<hr style="border: 3px solid;">
					<div class="basic-input-area">							
						<input class="basic-need-input" type="text" name="floor_count" value="<?= $estimateInfoList->floor_count?>"/> 층
						<br/><br/>
					</div>
					<hr style="border: 1px solid;">
				</div>
				<div class="basic-info">				
					<div class="product_title">외부면적</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-input" type="text" id="outer_area" name="outer_area" value="<?= $estimateInfoList->outer_area?>" readonly/> py
						<br/><br/>
						<input class="basic-input" style="margin: 0 0 0 -6px;" type="text" id="outer_area_calc" name="" value="<?= round(($estimateInfoList->outer_area)*3.3058)?>" disabled/> m<sup>3</sup>
					</div>
					<hr style="border: 1px solid;">
				</div>
				<div class="basic-info">				
					<div class="product_title">내부면적</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-input" type="text" id="inner_area" name="inner_area" value="<?= $estimateInfoList->inner_area?>" readonly/> py
						<br/><br/>
						<input class="basic-input" style="margin: 0 0 0 -6px;" type="text" id="inner_area_calc" name="" value="<?= round(($estimateInfoList->inner_area)*3.3058)?>" disabled/> m<sup>3</sup>
					</div>
					<hr style="border: 1px solid;">
				</div>			
				<div class="basic-info">				
					<div class="product_title">지붕면적</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-input" type="text" id="roof_area" name="roof_area" value="<?= $estimateInfoList->roof_area?>" readonly/> py
						<br/><br/>
						<input class="basic-input" style="margin: 0 0 0 -6px;" type="text" id="roof_area_calc" name="" value="<?= round(($estimateInfoList->roof_area)*3.3058)?>" disabled/> m<sup>3</sup>
					</div>
					<hr style="border: 1px solid;">
				</div>
				
				<div class="basic-info">				
					<div class="product_title">방의갯수</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-need-input" type="text" name="room_count" value="<?= $estimateInfoList->room_count?>"/> 개
						<br/><br/>
					</div>
					<hr style="border: 1px solid;">
				</div>			
				<div class="basic-info">				
					<div class="product_title">가구수</div><br/>				
					<hr style="border: 3px solid;">				
					<div class="basic-input-area">							
						<input class="basic-need-input" type="text" name="family_count" value="<?= $estimateInfoList->family_count?>"/> 가구
						<br/><br/>
					</div>
					<hr style="border: 1px solid;">
				</div>
				
			</div>
			
			<br/><br/><br/>
				<div class="" style="clear:both;display:block;">
				  <button type="submit" class="btn btn-primary" onclick="saveEstInfo();">
				    기본 정보 저장
				  </button>
				  <a href="/roothaus/estimateMain/result/<?= $estimateId?>">
			  	      <div class="btn btn-primary">
					    견적 결과 보기
					  </div>
				  </a>
				</div>
			</form>	
			
	</div>
	
	<div class="category_paging">
	
	<?php 
	    $arrSize = sizeof($categoryList);
		if ($categoryId == 'basic') {
		?>					
		<img alt="" src="/roothaus/resource/image/common/prev.jpg" />
		<img alt="" src="/roothaus/resource/image/common/bar_001.gif" />		
			<a href="/roothaus/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[1]->category_id?>"><img alt="" src="/roothaus/resource/image/common/next.jpg" /></a>
		<?php 
		} else {
			if ($categoryByOrder[$categoryId] > 1) {
		?>
			<a href="/roothaus/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[$categoryByOrder[$categoryId]-2]->category_id?>"><img alt="" src="/roothaus/resource/image/common/prev.jpg" /></a><img alt="" src="/roothaus/resource/image/common/bar_001.gif" />
			<?php 
			} else {
			?>
				<a href="/roothaus/estimateMain/createEst/<?= $estimateId?>/basic"><img alt="" src="/roothaus/resource/image/common/prev.jpg" /></a><img alt="" src="/roothaus/resource/image/common/bar_001.gif" />
			<?php
			}					
			if ($categoryByOrder[$categoryId] < $arrSize) {?>
				<a href="/roothaus/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[$categoryByOrder[$categoryId]]->category_id?>"><img alt="" src="/roothaus/resource/image/common/next.jpg" /></a>
		<?php
			} else {
			?>
				<img alt="" src="/roothaus/resource/image/common/next.jpg" />
			<?php 
			}
		}
	?>
	</div>


		<!-- 레이어 내용 -->
		<div id="divpop" style="display:none;">
			<div>
				<span class="layer-text"><span id="productName"></span>을(를) 선택합니다. 제품 갯수를 선택해주세요.</span>	
				
				<div class="button-area">
					<div class="btn-group">
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   <span id="countObj">갯수 선택</span> <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" style="line-height:20px;">
					    <li onclick="document.getElementById('countObj').innerHTML = '1개';">1개</li>
					  </ul>
					</div>
					<br/><br/>
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary">
					   	저장하기
					  </button>
					</div>
					<div class="btn-group" onclick="close_divpop('divpop_frm', 'divpop');">
					  <button type="reset" class="btn btn-danger">
					   	닫기
					  </button>
					</div>
				</div>	
							
			</div>
			<form name="divpop_frm" method="post" action="">
			</form>
		</div>
		<!-- 엔터로 레이어 닫기 -->
		<script language="javascript">
		function inputTotalArea(obj) {
			var totalAreaM2 = Math.round(obj.value * 3.3058);
			var outerAreaM2 = totalAreaM2 * 5;
			var outerAreaPy = Math.round(outerAreaM2 * 0.3025);
			var innerAreaM2 = totalAreaM2 * 9;
			var innerAreaPy = Math.round(innerAreaM2 * 0.3025);
			document.getElementById('total_area_calc').value = totalAreaM2; // 예상연면적 m2 계산
			document.getElementById('outer_area_calc').value = outerAreaM2; // 외부면적 m2 계산
			document.getElementById('outer_area').value = outerAreaPy; // 외부면적 py 계산
			document.getElementById('inner_area_calc').value = innerAreaM2; // 내부면적 m2 계산
			document.getElementById('inner_area').value = innerAreaPy; // 내부면적 py 계산
		}

		function inputFloorArea(obj) {
			var floorAreaM2 = Math.round(obj.value * 3.3058);
			var roofAreaPy = Math.round(obj.value * 1.1);
			var roofAreaM2 = Math.round(roofAreaPy * 3.3058);
			document.getElementById('floor_area_calc').value = floorAreaM2; // 바닥면적 m2 계산
			document.getElementById('roof_area').value = roofAreaPy; // 지붕면적 py 계산
			document.getElementById('roof_area_calc').value = roofAreaM2; // 지붕면적 m2 계산
			
		}

		var estType = '<?php echo $type;?>';
		$("#category_" + estType).addClass("category-selected");
		</script>
	
	<?php include 'common/footer.php';?>


</body>


</html>