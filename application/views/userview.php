<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 마이페이지</title>
</head>

<body>
	<?php include 'common/gnb.php';?>

	<div class="main-contents">
		<h1><?php echo $title?></h1>
		<div><?php
			foreach ($db as $var) {
				echo "<br>"; 
				foreach ($var as $var2=>$val) {
					echo $val." : ";
				}
			}
		?></div>
			
		<?php include 'common/footer.php';?>
	</div>
		
</body>
</html>
