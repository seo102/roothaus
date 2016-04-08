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
			<h3>루트주택 견적관리 시스템</h3>
			<a href="estimate/estList">
				<div class="btn-group">
				  <button type="submit" class="btn btn-primary">
				   	저장된 견적 리스트
				  </button>
				</div>				
			</a>
			<a href="estimate/createEst/0/basic">
				<div class="btn-group">
				  <button type="submit" class="btn btn-primary">
				   	신규 견적 생성
				  </button>
				</div>				
			</a>
		</div>
		

		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
