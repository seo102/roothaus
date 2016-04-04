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
				
				<a href="/roothaus/index.php/estimate/createEst"><h6>루트 1호 견적 (A타입)</h6></a>
				<a href="/roothaus/index.php/estimate/createEst"><h6>루트 1호 견적 (B타입)</h6></a>
				<a href="/roothaus/index.php/estimate/createEst"><h6>루트 2호 견적 (A타입)</h6></a>
				<a href="/roothaus/index.php/estimate/createEst"><h6>루트 2호 견적 (B타입)</h6></a>
			</div>


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
