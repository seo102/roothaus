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
		
		
		<br/><br/><br/>
		
			<div class="spot">
				<div class="" style="text-align:left;padding: 0 0 0 10%;">
				본 예상견적서는 루트 건축물에 도움이 되고자 만든 것입니다.<br/>
				귀하의 주택의 참고자료 일뿐 정확한 견적이 아니며 정확한 견적은 설계미팅이 끝난 후에 결정됨을 알려드립니다.<br/>
				최대한 자세하게 그리고 신중하게 선택하시면 좋은 참고자료가 될 수 있습니다.<br/>
				</div>
			
				<div class="" style="text-align:left;padding: 0 0 0 10%;">
					<h3>예상면적( 공통사항- 면적을 통하여 기본적인 견적이 결정됩니다. )</h3>
					<h4>전체 평수</h4> <input type="text" /> * 평수를 입력하면 아래의 면적은 자동으로 입력됩니다. ( 아래값은 미리설정 또는 상담자 입력) 
					<h4>지붕 면적</h4> <input type="text" />
					<h4>외부 면적</h4> <input type="text" />
					<h4>내부 면적</h4> <input type="text" />
					<h4>바닥 면적</h4> <input type="text" />
					
					<br/><br/><br/>
					<div class="btn-group">
					  <button type="submit" class="btn btn-primary">
					    기본 정보 저장
					  </button>
					</div>
				</div>
								
			</div>
			
		</div>
		<!-- // 우측 리스트 영역 -->
		
		<!-- 레이어 내용 -->
		<div id="divpop" style="display:none;">
			<div>
				<span class="layer-text"><span id="productName"></span>을(를) 선택합니다. 추가되는 제품 갯수를 선택해주세요.</span>	
				
				<div class="button-area">
					<div class="btn-group">
					  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					   <span id="countObj">갯수 선택</span> <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" style="line-height:20px;">
					    <li onclick="document.getElementById('countObj').innerHTML = '1개';">1개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '2개';">2개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '3개';">3개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '4개';">4개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '5개';">5개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '6개';">6개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '7개';">7개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '8개';">8개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '9개';">9개</li>
					    <li onclick="document.getElementById('countObj').innerHTML = '10개';">10개</li>
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

		function confirm(element_id, element_name, event) {
			var lpos = event.clientX + document.body.scrollLeft;
			var tpos = event.clientY + document.body.scrollTop;
			console.log(document.body.style.width);

			var layerObj = document.getElementById('divpop');
			layerObj.style.top = tpos + "px";
			layerObj.style.left = lpos / 1.5 + "px";			
			document.getElementById('productName').innerHTML = element_name;
			layerObj.style.display='block';		
		}
		</script>


		<br /> <br /> <br /> <br />	
		<?php include 'common/footer.php';?>
	</div>

</body>
</html>
