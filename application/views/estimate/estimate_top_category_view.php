<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	
	<div class="category">
		
		<?php 
		foreach($categoryList as $var=>$val) {	
		?>
		<a href="/roothaus/index.php/estimateMain/createEst/<?= $estimateId?>/<?= $val->category_id?>">
			 <span
				id="category_<?= $val->category_id?>">
					<img src="/roothaus/resource/image/estimate/category/manu_<?= $val->category_id?>.jpg" title="<?= $val->category_name?>" width="60" height="30" />
			</span>
		</a>
 		<?php
 			if ($var == 9) {
 				?><img alt="" src="/roothaus/resource/image/common/line_002.gif" /><br/><?php 
 			} else if ($var == 19) {
 				?><img alt="" src="/roothaus/resource/image/common/line_003.gif" /><?php
 			} else {
 				echo " | ";
 			}
		}
		?>
	</div>
	