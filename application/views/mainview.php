<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택</title>
</head>

<body>
	<?php include 'common/gnb.php';?>

	<div class="main-contents">
		<div class="main-center-image">
            <div class="inner">
            	<div class="main-center-text">
	                <h1>RootHaus</h1>
	                <h4>루트주택의 서비스</h4>
	               
					<div class="button-area">      
				        <div class="main-category_list">
				        	<a href="estimate"><span class="main-category-icon" style="color:white;"><img src="/roothaus/resource/image/cmyk.png"><h6>견적관리</h6></span></a>
				        	<a href="javascript:alert('준비중입니다.');"><span class="main-category-icon" style="color:white;"><img src="/roothaus/resource/image/gamecontroller.png"><h6>시공 현황</h6></span></a>
				        	<a href="javascript:alert('준비중입니다.');"><span class="main-category-icon" style="color:white;"><img src="/roothaus/resource/image/heart.png"><h6>입주 체크리스트</h6></span></a>
				        	<a href="javascript:alert('준비중입니다.');"><span class="main-category-icon" style="color:white;"><img src="/roothaus/resource/image/magicwand.png"><h6>사후관리</h6></span></a>
				        </div>
	                 </div>
	                
                </div>
            </div>
        </div>
        
        	
		<?php include 'common/footer.php';?>
	</div>
		
</body>
</html>
