<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 견적관리</title>	
	
	<script>
	// 견적서 기본정보 저장
	function saveEstInfo() {
		document.saveEstInfo.submit();
	}
	</script>
	
</head>

<body>

	<div class="top">
		<img alt="" src="/roothaus/resource/image/common/top_01.jpg" />
	</div>
	
	<div style="margin-top: 30px;">
		<img alt="" src="/roothaus/resource/image/common/line_001.gif" />
	</div>
	
	<div class="category">
		
		<?php 
		foreach($categoryList as $var=>$val) {	
		?>
		<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/<?= $val->category_id?>">
			 <span
				id="category_<?= $val->category_id?>">
					<?= $val->category_name?>
			</span>
		</a>
 		<?php
 			if ($var == 10) {
 				?><img alt="" src="/roothaus/resource/image/common/line_002.gif" /><br/><?php 
 			} else if ($var == 21) {
 				?><img alt="" src="/roothaus/resource/image/common/line_003.gif" /><?php
 			} else {
 				echo " | ";
 			}
		}
		?>
	</div>
	
	<div>
		<img alt="" src="/roothaus/resource/image/common/line_002.gif" />
	</div>
	
	<div class="content">
		<div class="title">
			<img style="float:left;" alt="" src="/roothaus/resource/image/common/bar_002.gif" />
			<span style="margin: 30px 0 0 20px;"><?= $categoryNameList[$categoryId]?> (<?= $productListSize?>)</span>
			<img style="float: right;" alt="" src="/roothaus/resource/image/common/line_100.gif" />
		</div>
		
		<div class="product_list">
			
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
					<div class="product<?if($isSelectedProduct){?> selected<?}?>" id="product_id_<?= $val->product_id?>" onclick="selectProduct('product_id_<?= $val->product_id?>', '<?= $val->product_name?>', event, '<?= $val->option_type_id?>', '<?= $val->product_id?>', '<?= $estimateId?>', '<?= $categoryId ?>','<?= $isSelectedProduct?>', '<?= $val->use_count?>');">
						<hr style="border: 3px solid;">
						<img alt="<?= $val->image_url?>" src="http://www.sebong.co.kr/attach/1/1118312504.jpg" width="220px;">
						<hr style="border: 1px solid;">
						<div class="product_title"><?= $val->product_name?></div>
						<div class="product_desc" alt="" title="<?=$val->desc?>"><?= mb_strimwidth($val->desc, 0, 270, "...", "UTF-8");?></div>
						<div class="product_option">가격
							<span class="star-rating">
								<span style="width:<?= $val->grade_price?>%;"></span>
							</span> 
						</div>
						<div class="product_option">성능
							<span class="star-rating">
								<span style="width:<?= $val->grade_performance?>%;"></span>
							</span>  
						</div>
					</div>
				 	
			 	<?php
				}
				?>			
		</div>
		
		<br/><br/><br/>
		<div class="" style="clear:both;display:block;">
		  <a href="/roothaus/index.php/estimateMain/result/<?= $estimateId?>">
	  	      <div class="btn btn-primary">
			    견적 결과 보기
			  </div>
		  </a>
		</div>
		
	</div>
	
	<div class="category_paging">
	
	<?php 
	    $arrSize = sizeof($categoryList);
		if ($categoryId == 'basic') {
		?>					
		<img alt="" src="/roothaus/resource/image/common/prev.jpg" />
		<img alt="" src="/roothaus/resource/image/common/bar_001.gif" />		
			<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[0]->category_id?>"><img alt="" src="/roothaus/resource/image/common/next.jpg" /></a>
		<?php 
		} else {
			if ($categoryByOrder[$categoryId] > 1) {
		?>
			<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[$categoryByOrder[$categoryId]-2]->category_id?>"><img alt="" src="/roothaus/resource/image/common/prev.jpg" /></a><img alt="" src="/roothaus/resource/image/common/bar_001.gif" />
			<?php 
			} else {
			?>
				<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/basic"><img alt="" src="/roothaus/resource/image/common/prev.jpg" /></a><img alt="" src="/roothaus/resource/image/common/bar_001.gif" />
			<?php
			}					
			if ($categoryByOrder[$categoryId] < $arrSize) {?>
				<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[$categoryByOrder[$categoryId]]->category_id?>"><img alt="" src="/roothaus/resource/image/common/next.jpg" /></a>
		<?php
			} else {
			?>
				<img alt="" src="/roothaus/resource/image/common/next.jpg" />
			<?php 
			}
		}
	?>
	</div>


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

		function selectProduct(element_id, element_name, event, option_id, product_id, estimate_id, category_id, is_selected_product, use_count) { // use_count :: 제품 갯수 선택여부
			if (option_id == 0) {
				//return false;
			}
			// 제품의 옵션 데이터 레이어 ajax call 
			var linkUrl = '/roothaus/index.php/estimateMain/getProductOption/' + option_id + '/' + product_id + '/' + estimate_id + '/' + category_id + '/' + is_selected_product + '/' + use_count;

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

		// 카테고리 선택표시
		var estType = '<?php echo $type;?>';
		$("#category_" + estType).addClass("category-selected");
		
		</script>
	
	<?php include 'common/footer.php';?>


</body>


</html>