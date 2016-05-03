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

<div id="center_top"><img src="/roothaus/resource/image/common/top_01.jpg" width="960" height="300" alt="top" /></div>
<div id="main_space_01"></div>
<div id="main_space_04"></div>

<div id="title_01">
  <p>  
  <div class="title_02">저장된 견적서 (<?= $estimateResultCount->totalCount?>)</div></p>
  <p>&nbsp;</p>
  <p>  <div class="title_03">본견적서는 참고용으로만 쓰는 문서입니다.</div></p>
</div>
<div id="main_space_04">&nbsp;</div>

<?php
$count = 0;
foreach ($estimateResultList as $var) {
	if ($count % 4 == 0) {
		?>
		<div id="main_space_09">
		<?php 		
	}
	$count++;
	?>
	<a href="/roothaus/estimateMain/result/<?= $var->estimate_id?>">
	<div id="save_01">
	  <img src="/roothaus/resource/image/common/list_bar_01.jpg" width="220" height="5" /><?= $var->create_datetime?><br />
	  <br />
	  <br />
	   <p><?= $var->title?><br />
	    <br />
	    Area : <?= $var->total_area?> py <br />
	    <br />
	    cost : __ won
		</p>
	</div>
	</a>
	<?php
		if ($count % 4 == 0 || $count == sizeof($estimateResultList)) {
			?>
			</div>
			<?php 		
		}
}
?>
<div id="main_space_04"></div> 
<!-- 페이징 -->
<div class="list_paging"><?php echo $paging;?></div>
<!-- //페이징 -->
<div id="main_space_04"></div> 
<div id="bot_01"><img src="/roothaus/resource/image/common/bot_01.jpg" width="960" height="104" /></div>

<!-- 
	<div class="main-contents">

			<div>
				<br/>
				<h3>xxx 님이 저장한 견적 리스트 입니다.</h3>
								
				
				
			</div>


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>
 -->
</body>
</html>
