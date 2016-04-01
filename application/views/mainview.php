<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<?php include 'common/head.php';?>	
	<title>쇼프라이스 :: 메인</title>
</head>

<body>
	<?php include 'common/gnb.php';?>

	<div class="main-contents">
		<div class="main-center-image">
            <div class="inner">
            	<div class="main-center-text">
	                <h1>Showprice</h1>
	                <h4>쇼프라이스 <br>공연은 쇼프와 함께</h4>
	               
					<div class="button-area">      
	                <a href="#" class="btn btn-primary btn-xl collapsed" aria-expanded="false">공연 찾기</a>
	                 &nbsp; <a href="#" class="btn btn-primary btn-xl page-scroll">행사 기획 하기</a>
	                 &nbsp; <a href="#" class="btn btn-primary btn-xl page-scroll">공연 섭외 요청</a>
	                 </div>
	                
                </div>
            </div>
        </div>
        
        <!-- 카테고리 아이콘 리스트 영역 -->
        <div class=""><h3>추천 카테고리</h3></div>
        <div class="main-category_list">
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/cmyk.png"><h6>버블쇼</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/gamecontroller.png"><h6>레크리에이션</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/heart.png"><h6>프로포즈</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/magicwand.png"><h6>매직쇼</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/microphone.png"><h6>사회/MC</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/star.png"><h6>연예인</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/videocameraclassic.png"><h6>영상/조명/무대</h6></span></a>
        </div>
        <!-- // 카테고리 아이콘 리스트 영역 -->
        
        <!-- 추천 공연 리스트 영역 -->
        <!-- 체육대회, 송년회, 회사홍보 :: 쇼프에서 추천하는 공연 리스트 페이지로 링크 -->
        <div class="more-margin"><h3>쇼프가 추천하는 행사</h3></div>
        <div class="main-category_list">
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/caviar-1108562_960_720.jpg" width="300px"><h6>기업행사</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/cheers-839865_960_720.jpg" width="300px"><h6>송년회</h6></span></a>
        	<a href="#"><span class="main-category-icon"><img src="/sshowprice/resource/image/cooks-842244_960_720.jpg" width="300px"><h6>파티</h6></span></a>
        </div>
        <!-- // 추천 공연 리스트 영역 -->
        
        <hr class="page-line-red">
        
        <!-- 하단 영역 -->
        <div class="main-bottom-area">
        	<div class="notice">        		
        		<h3>공지사항</h3>
        	</div>
        	<div class="c-center">
        		<h3>고객센터</h3>
        	</div>
        </div>
        <!-- // 하단 영역 -->
		
		<br/>	
		<br/>	
		<br/>	
		<br/>	
		<?php include 'common/footer.php';?>
	</div>
		
</body>
</html>
