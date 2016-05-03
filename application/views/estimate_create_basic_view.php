<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<!DOCTYPE html>
<html>

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
	<?php include 'common/gnb.php';?>

	<div class="main-contents">

		<!-- 좌측 카테고리 영역 -->
		<?php include 'common/left_category_list.php';?>		
		<!-- // 좌측 카테고리 영역 -->



		<!-- 우측 리스트 영역 -->
		<div class="right-contents-list">
		
		
		<br/><br/><br/>
		
			<div class="spot">
			
			<div style="background-color: blue;">
			<?php 
				if ($categoryId == 'basic') {
				?>					
					<a href="/roothaus/estimate/createEst/<?= $estimateId?>/<?= $categoryList[0]->category_id?>"><span>다음으로</span></a>
				<?php 
				}
			?>
			</div>
			
			<form name="saveEstInfo" method="post" action="/roothaus/estimate/saveEstimateInfo">	
				<input type="hidden" name="estimate_id" value="<?= $estimateId?>">	
				<div class="" style="text-align:left;padding: 0 0 0 10%;">
				본 예상견적서는 루트 건축물에 도움이 되고자 만든 것입니다.<br/>
				귀하의 주택의 참고자료 일뿐 정확한 견적이 아니며 정확한 견적은 설계미팅이 끝난 후에 결정됨을 알려드립니다.<br/>
				최대한 자세하게 그리고 신중하게 선택하시면 좋은 참고자료가 될 수 있습니다.<br/>
				</div>
			
				<div class="" style="text-align:left;padding: 0 0 0 10%;">
					<h3>예상면적( 공통사항- 면적을 통하여 기본적인 견적이 결정됩니다. )</h3>
					<h4>견적 제목</h4> <input type="text" name="title" value="<?= $estimateInfoList->title?>"/>
					<h4>전체 평수</h4> <input type="text" name="total_area" value="<?= $estimateInfoList->total_area?>"/> * 평수를 입력하면 아래의 면적은 자동으로 입력됩니다. ( 아래값은 미리설정 또는 상담자 입력) 
					<h4>지붕 면적</h4> <input type="text" name="roof_area" value="<?= $estimateInfoList->roof_area?>"/>
					<h4>외부 면적</h4> <input type="text" name="outer_area" value="<?= $estimateInfoList->outer_area?>"/>
					<h4>내부 면적</h4> <input type="text" name="inner_area" value="<?= $estimateInfoList->inner_area?>"/>
					<h4>바닥 면적</h4> <input type="text" name="floor_area" value="<?= $estimateInfoList->floor_area?>"/>
					
					<br/><br/><br/>
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary" onclick="saveEstInfo();">
					    기본 정보 저장
					  </button>
					</div>
				</div>
			</form>					
			</div>
			
		</div>
		<!-- // 우측 리스트 영역 -->
		
		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
