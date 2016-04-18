<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 견적관리</title>	
</head>

<body>
	<?php include 'common/gnb.php';?>

	<div class="main-contents">

		<!-- 좌측 카테고리 영역 -->
		<?php include 'common/left_category_list.php';?>
		<!-- // 좌측 카테고리 영역 -->




		<!-- 우측 리스트 영역 -->
		<div class="right-contents-list">
		
			<div>
				<br/>
				<h3>현재 저장된 총 견적 : 1000 원</h3>
				<div class="btn-group">
				  <?php print_r($data)?>
				  <h4>지붕 300000 원</h4>
				</div>				
			</div>
		
			
		</div>
		<!-- // 우측 리스트 영역 -->
		

		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
