 <div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
			<?php
                  if (count($this->arrProduct) > 0) {
                    foreach ($this->arrProduct as $key => $value) {
                    		echo '			
                    		<div class="grid1_of_3">
							<a href="'.URL_BASE."index/detail?id=".$value['id'].'">
							<img src="'.URL_BASE .'templates/' . DEFAULT_TEMPLATE . DS . $value['image'].'" alt=""/>
							<h3>'. $value['productName'].'</h3>
							<div class="price">
							<h4>'. $value['unitPrice'].'<span>indulge</span></h4>
							</div>
							<span class="b_btm"></span>
							</a>
							</div>';	
                         }
                    }
			?>
		<div class="clear"></div>


	</div>
</div>
    </div>