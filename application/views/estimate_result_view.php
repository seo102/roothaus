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
				<h3>견적 제목 : <?= $estimateResultBasic->title?></h3>
				<div class="btn-group">
	<!-- 
	<pre>
	  <?php print_r($estimateResultProduct)?>
	</pre>
	 -->
				<?php
				$totalAmount = 0; // 전체 견적 금액
				foreach ($estimateResultProduct as $var) {
					$totalAmount = $totalAmount + $var->price; 
				?>
					<h4><?= $var->category_name?> : <?= $var->product_name?> (가격 : <?= $var->price?>)</h4>
				<?php 					
				}
				?>
					<h3>전체금액 : <?= $totalAmount?>원</h3>
				</div>				
			</div>
		
			
		</div>
		<!-- // 우측 리스트 영역 -->
		

		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
