	<div>
	<?php if ($optionTypeId == '0') {?>
		<span class="layer-text"><span id="productName"></span> 항목을 선택합니다.</span>
	<?php } else {?>
		<span class="layer-text"><span id="productName"></span> 항목의 옵션을 선택합니다.</span>
	<?php }?>
		
		<div class="button-area">
			  
			<div class="zcol-lg-6">
			    <div class="zinput-group">
			      <span class="zinput-group-addon">
			      <?php 
					foreach($productOptionList as $var => $val) {
						if ($val->option_type_id != '0') {
					?>
						<input name="product_option" type="radio" aria-label="..."><?= $val->option_name?>
					<?php
						}
					}
					?>        
			      </span>
			      <!-- <input type="text" class="form-control" aria-label="..."> -->
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			
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