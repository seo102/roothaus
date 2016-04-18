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
			<br/>
			<div style="background-color: blue;">
			<?php 
			    $arrSize = sizeof($categoryList);
				if ($categoryId == 'basic') {
				?>					
					<a href="/roothaus/index.php/estimate/createEst/<?= $estimateId?>/<?= $categoryList[0]->category_id?>"><span>다음으로</span></a>
				<?php 
				} else {
					if ($categoryByOrder[$categoryId] > 1) {
				?>
					<a href="/roothaus/index.php/estimate/createEst/<?= $estimateId?>/<?= $categoryList[$categoryByOrder[$categoryId]-2]->category_id?>"><span>이전으로</span></a>&nbsp;&nbsp;&nbsp;
					<?php 
					} else {
					?>
						<a href="/roothaus/index.php/estimate/createEst/<?= $estimateId?>/basic"><span>이전으로</span></a>&nbsp;&nbsp;&nbsp;
					<?php
					}					
					if ($categoryByOrder[$categoryId] < $arrSize) {?>
						<a href="/roothaus/index.php/estimate/createEst/<?= $estimateId?>/<?= $categoryList[$categoryByOrder[$categoryId]]->category_id?>"><span>다음으로</span></a>
				<?php
					}
				}
			?>
			</div>
		
			<div>
				<br/>	
				<h3></h3>
				<a href="/roothaus/index.php/estimate/result/<?= $estimateId?>">
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary">
					   	견적 내역 확인
					  </button>
					</div>				
				</a>				
			</div>
		
			<div class="spot">
				
				<ul class="card_lst">			
				
				<?php 
				$isSelectedProduct = 0;
				foreach($productList as $var=>$val) {
					if($val->selected_product == $val->product_id) {
						// 선택한 제품인 경우 선택됨 표시, update나 delete 가능함
						$isSelectedProduct = 1;
					} else {
						$isSelectedProduct = 0;
					}
				?>
					<li style="display: list-item;">
						<div class="card_w">
							<span id="product_id_<?= $val->product_id?>" onclick="confirm('product_id_<?= $val->product_id?>', '<?= $val->product_name?>', event, '<?= $val->option_type_id?>', '<?= $val->product_id?>', '<?= $estimateId?>', '<?= $categoryId ?>','<?= $isSelectedProduct?>');" class="card<?if($isSelectedProduct){?> selected<?}?>">
							<span class="inner">
								<span class="thmb">
									<span class="mask"></span>
									<img src="<?= $val->image_url?>" width="240px" height="185px" class="_thumnail" alt="">
								</span>
								<span class="info">
									<strong><?= $val->product_name?></strong><span alt="" title="<?=$val->desc?>"><?= mb_strimwidth($val->desc, 0, 270, "...", "UTF-8");?></span>
								</span>
								<span class="star-rating">
									<span style="width:<?= $val->grade?>%;"></span>
								</span>
								<span class="opinion on"><span class="tit">등급</span><strong><?= $val->grade?> / 100</strong></span>
							</span>		
							</span>
							<span class="info2">
								<strong class="tit">								
									<a href="#"><?= $val->price?>원 (<?= $val->price_standard?>)</a>								
								</strong>
							</span>
						</div>
					</li>
				 	
			 	<?php
				}
				?>
											
				</ul>
			
		</div>
		<!-- // 우측 리스트 영역 -->


		
		<!-- 레이어 내용 -->
		<div id="divpop" style="display:none;">
			<div>
				<span class="layer-text"><span id="productName"></span>을(를) 선택합니다. 제품 갯수를 선택해주세요.</span>	
				
				<div class="button-area">
					<div class="btn-group">
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   <span id="countObj">갯수 선택</span> <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" style="line-height:20px;">
					    <li onclick="document.getElementById('countObj').innerHTML = '1개';">1개</li>
					  </ul>
					</div>
					<br/><br/>
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary">
					   	저장하기
					  </button>
					</div>
					<div class="btn-group" onclick="close_divpop('divpop_frm', 'divpop');">
					  <button type="reset" class="btn btn-danger">
					   	닫기
					  </button>
					</div>
				</div>	
							
			</div>
			<form name="divpop_frm" method="post" action="">
			</form>
		</div>
		<!-- 엔터로 레이어 닫기 -->
		<script language="javascript">
		document.onkeydown = function()
		{
		   var iTemp;
		   if (event.keyCode == 13) 
		     close_divpop('divpop_frm', 'divpop'); 
		}
		
		function close_divpop(frm, div){
			document.getElementById(div).style.display='none';
		}

		function confirm(element_id, element_name, event, option_id, product_id, estimate_id, category_id, is_selected_product) {
			if (option_id == 0) {
				//return false;
			}
			// 제품의 옵션 데이터 레이어 ajax call 
			var linkUrl = '/roothaus/index.php/estimate/getProductOption/' + option_id + '/' + product_id + '/' + estimate_id + '/' + category_id + '/' + is_selected_product;

			$.ajax({
		        type: 'POST',
		        url: linkUrl,
		        dataType: 'text',
		        timeout: 5000,
		        error: function () {
		            //alert('error');
		        },
		        success: function (data) {
					document.getElementById('divpop').innerHTML = data;

					var lpos = event.clientX + document.body.scrollLeft;
					var tpos = event.clientY + document.body.scrollTop;

					var layerObj = document.getElementById('divpop');
					layerObj.style.top = tpos + "px";
					layerObj.style.left = lpos / 1.5 + "px";			
					document.getElementById('productName').innerHTML = element_name;
					layerObj.style.display='block';
		       }
		    });		
		}
		</script>


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>
	
	
	<script>
function getAjaxCall(type) {
	
	var linkUrl = '/roothaus/index.php/estimate/getProductOption/' + type;

	$.ajax({
        type: 'POST',
        url: linkUrl,
        dataType: 'text',
        timeout: 5000,
        error: function () {
            //alert('error');
        },
        success: function (data) {
			document.getElementById('divpop').innerHTML = data;
       }
    });
}
</script>


</body>
</html>
