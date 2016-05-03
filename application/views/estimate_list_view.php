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

			<div>
				<br/>
				<h3>xxx 님이 저장한 견적 리스트 입니다.</h3>
								
				<?php
				foreach ($estimateResultList as $var) {
					?>
					<a href="/roothaus/estimate/result/<?= $var->estimate_id?>"><h6>견적제목 : <?= $var->title?></h6></a>
					<?php 
				}
				?>
				
			</div>


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
