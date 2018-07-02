<div class="main_bg">
<div class="wrap">	
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views" style="float:left;">
				        <div class="more-views-container">
				        <ul>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>            
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a> 
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>  
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li>
				          </ul>
				        </div>
				    </div>
				    <div class="product-image"> 
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="<?php echo URL_BASE.'templates/default';?>images/0001-2.jpg" title="Women Shorts" alt="Women Shorts">
						<?php echo '<img src="'. URL_BASE . DS . 'templates/' . DEFAULT_TEMPLATE . DS . $this->itemProduct['image'] .'" alt="dellN7557" width="200px" height="200px"/> ';?>
				        </a>
				   </div>
				</div>
				</div>
				</div>
				<!-- end product_slider -->
			</div>
			<!-- start span1_of_1 -->
			<div class="span1_of_1_des">
				  <div class="desc1">
					<?php echo'<h3>'.$this->itemProduct['productName'].'</h3>';?>
					<?php echo'<p>'.$this->itemProduct['description'].'</p>';?>
					<?php echo'<h5>$'.$this->itemProduct['unitPrice'].'</h5>';?>
					<div class="available">
						<h4>Available Options :</h4>
						<ul>
							<li>Quality:
								<select>
									<?php 
										for($i=1;$i<$this->itemProduct['quantity'];$i++){
											echo '<option>'.$i.'</option>';
										}
									?>
								</select>
							</li>
						</ul>
						<div class="btn_form">
							<form>
								<input type="submit" value="add to cart" title="" />
							</form>
						</div>
						<span class="span_right"><a href="#">login to save in wishlist </a></span>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share">
							<h4>Share Product :</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="<?php echo URL_BASE.'templates/default';?>/images/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="<?php echo URL_BASE.'templates/default';?>/images/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="<?php echo URL_BASE.'templates/default';?>/images/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="<?php echo URL_BASE.'templates/default';?>/images/gpluse.png" title="Google+"></a></li>
				    		</ul>
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>Best Sellers</h4>
						  <div class="banner-wrap bottom_banner color_link">
								<a href="#" class="main_link">
								<figure><img src="<?php echo URL_BASE.'templates/default';?>/images/delivery.png" alt=""></figure>
								<h5><span>Free Shipping</span><br> on orders over $99.</h5><p>This offer is valid on all our store items.</p></a>
						 </div>
						 <div class="brands">
							 <h1>Brands</h1>
					  		 <div class="field">
				                 <select class="select1">
				                   <option>Please Select</option>
				                   <?php 
				                   	if (count($this->itemSupplier) > 0) {
                    				foreach ($this->itemSupplier as $key => $value) {
                    		echo '<option>'.$value['companyName'].'</option>';	
                         }
                    }
				                   ?>
				                  </select>
				            </div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>	
	<!-- end content -->
	</div>
</div>
</div>		