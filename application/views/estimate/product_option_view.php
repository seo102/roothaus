	<div>
	<?php if ($optionTypeId == '0') {?>
		<span class="layer-text"><span id="productName"></span> 항목을 선택합니다.</span>
	<?php } else {?>
		<span class="layer-text"><span id="productName"></span> 항목의 옵션을 선택합니다.</span>
	<?php }?>
	
		<div class="button-area">
		<form name="saveEstInfo" method="post" action="/roothaus/index.php/estimateMain/saveEstimateProduct/<?=$isSelectedProduct?>">	
			<input type="hidden" name="estimate_id" value="<?= $estimateId?>">	
			<input type="hidden" name="product_id" value="<?= $productId?>">
			<input type="hidden" name="category_id" value="<?= $categoryId?>">  
			<div class="zcol-lg-6">
			    <div class="zinput-group">
			      <span class="zinput-group-addon">
			      
			      <?php 
			      	$productCount = 0;
					foreach($productOptionList as $var => $val) {
						if ($val->product_count > 0 ) {
							$productCount = $val->product_count; // 제품 갯수 선택한 경우 제품 갯수 변수에 데이터 넣음. (선택한 옵션 아이디 row에만 product_count가 나오므로)
						}
						if ($val->option_type_id != '0') {
					?>
						<input name="product_option_id" type="radio" aria-label="..." value="<?= $val->option_id?>" <?php if($val->option_id == $val->selected_option) {echo 'checked';}?>><?= $val->option_name?>
					<?php
						}
					}
					?>        
			      </span>
			      <!-- <input type="text" class="form-control" aria-label="..."> -->
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			  
			<br/><br/>
			<?php if ($useCount == 'Y') {?>
			<div>
				제품 갯수 선택 : <input type="text" id="product_count" name="product_count" onKeypress="if(event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" pattern="[0-9]*" style="width:50px;" title="숫자값만 입력 해주세요." value="<?= $productCount?>" />
			</div>
			<?php }?>
			
			<br/><br/>
			<div class="btn-group">
			  <button type="submit" class="btn btn-primary">
			   	저장하기
			  </button>			  
			</div>
			  <?php if($isSelectedProduct) {?>
			<div class="btn-group">	  
			  <div type="submit" class="btn btn-primary" onclick="document.saveEstInfo.action='/roothaus/index.php/estimateMain/deleteEstimateProduct/<?=$isSelectedProduct?>';document.saveEstInfo.submit();">
			   	삭제하기
			  </div>
			</div>
			  <?php }?>
			<div class="btn-group" onclick="close_divpop('divpop_frm', 'divpop');">
			  <button type="reset" class="btn btn-danger">
			   	닫기
			  </button>
			</div>
		</form>
		</div>	
					
	</div>
	<form name="divpop_frm" method="post" action="">
	</form>