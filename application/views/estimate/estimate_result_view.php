<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ko">

<head>
	<?php include 'common/head.php';?>	
	<title>루트주택 :: 견적결과</title>	
	
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
	
	<div class="content" id="result_list">
		<div class="title">
			<img style="float:left;" alt="" src="/roothaus/resource/image/common/bar_002.gif" />
			<span style="float:left;font-weight:bold;">예상견적 리스트 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img style="" alt="" src="/roothaus/resource/image/common/line_100.gif" /></span>			
			<span style="">본 예상견적서는 루트 건축물에 도움이 되고자 만든 것입니다.<br/>
				귀하의 주택의 참고자료 일뿐 정확한 견적이 아니며 정확한 견적은 설계미팅이 끝난 후에 결정됨을 알려드립니다.<br/>
				더욱더 많은 자료와 자세히 반영되지 못한 부분은 설계미팅에서 다루겠습니다. 예상견적에 참여해 주셔서 감사합니다.
				</span>			
		</div>
		
		<br/><br/><br/>
		
		<div style="font-size: xx-large;">
			<?= $estimateResultBasic->title?>    |   합계   <span id="total_price"><?= number_format($totalPrice)?></span> 원
		</div>
		
		<div>
			<img alt="" src="/roothaus/resource/image/common/line_001.gif" />
		</div>	
		
		<div class="result_list">
			<table cellspacing="0" border="0" summary="">
				<colgroup><col width="100"><col width="*"><col width="200"></colgroup>
				<tbody>
				<tr>
						<th scope="col"><span class="">No.</span></th>
						<th scope="col">공사명</th>
						<th scope="col">예상 시공비</th>
				</tr>
				
				<?php
				$count = 0;
				foreach ($estimateResultProduct as $var) {
					$count++;
				?>
					<tr class="<?php if($count % 2 == 0) {echo "result_list_odd";}?>">
					<td><em><?= $count?></em></td>
					<td style="padding: 0 0 0 40px;"><span><?= $var->category_name?> : <?= $var->product_name?>
					<?php if ($var->option_enable == 'Y') {?>
					 (옵션 : <?= $var->option_name?>)
					<?php }?>
					<?php if ($var->use_count == 'Y') {?>
					 (갯수 : <?= $var->product_count?>개)
					<?php }?>
					</span></td>
					<td style="text-align:center;"><span><?= number_format($var->price)?>원</span></td>
					</tr>
				<?php 					
				}
				?>
				
				
				</tbody>
				</table>
				
				<div class="result-sum"><span>합계</span><span style="margin: 0 0 0 100px;"><?= number_format($totalPrice)?>원</span></div>
				
		</div>
			
	</div>
	
	<div class="category_paging">
					
		<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/<?= $categoryList[0]->category_id?>"><img alt="" src="/roothaus/resource/image/common/prev.jpg" /></a>
		<img alt="" src="/roothaus/resource/image/common/bar_001.gif" />		
		<span onclick="printResult();"><img alt="" src="/roothaus/resource/image/common/print.jpg" /></span>
		
	</div>

	<script>
	var estType = '<?php echo $type;?>';
	$("#category_" + estType).addClass("category-selected");

	var originalArea;
	function printResult() {
		beforePrint();
		window.print();
		afterPrint();
	}
	function beforePrint() {
		originalArea = document.body.innerHTML;
		document.body.innerHTML = result_list.innerHTML; 
	}
	function afterPrint() {
		document.body.innerHTML = originalArea;
	}
	</script>
	
	<?php include 'common/footer.php';?>


</body>


</html>