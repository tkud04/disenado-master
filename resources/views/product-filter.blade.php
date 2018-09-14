		<!-- product filter area -->
		<div class="trendy-area pad-70">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-title">
							<h4>Trending Now</h4>
						</div> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="filter-mnu">
							<div class="filter" data-filter="all">all</div>
							<div class="filter" data-filter=".laptops">Laptops</div>
							<div class="filter" data-filter=".fashion">Fashion</div>
							<div class="filter" data-filter=".tablets">Tablets</div>
							<div class="filter" data-filter=".electronics">Electronics</div>
							<div class="filter" data-filter=".fragrances">Fragrances</div>
						</div>
					</div>
					<div id="Container">
					    @if(isset($trending) && count($trending) > 0)
						 <?php $itemCount = 0; $total = count($trending); $counter = 0;?>
				    	@foreach($trending as $t)
				
				 		<?php ++$itemCount; ++$counter; if($itemCount >= ($displaySize + 1)) $itemCount = 1;?>
	                    @if($itemCount % $displaySize == 0)
                         <div class="row">
	                    @endif
					    <?php
						  $url = url("products/".$t['id']);
						  $images = $t['images'];
						  $category = $t['category'];
						  $categoryClass = "";
						  $cart_url = "bag/".$t['id']."/qty/1";						  
						 ?>
						<div class="mix {{$category}}">
							<div class="col-md-3 col-sm-4">
								<div class="single-product">
									<div class="product-image fix">
										<a href="{{$url}}">
											<img  src="{{asset($images[0])}}" alt="">
											<img class="primary-2" src="{{asset($images[1])}}" alt="">
										</a>
										<div class="product-action">
											<a href="#" data-toggle="modal" data-target="#myModal"  title="Quick view"><i class="fa fa-eye"></i></a>
										</div>
										<div class="new-area sell-area">
											<div class="new">
												<span class="text-new"><span>sell</span></span>
											</div>
										</div>
										<div class="color">
											<ul class="color-list">
												<li class="bk"><span>bk</span></li>
												<li class="rd"><span>rd</span></li>
												<li class="yl"><span>yl</span></li>
											</ul>
										</div>
									</div>
									<h4 class="name"><a href="{{$url}}">{{$t['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">&#8358;{{$t['price'] + rand(2000,5000)}}</span></del>
										&#8358;{{$t['price']}}
									</span>
									<div class="add-to-cart">
										<a href="{{$cart_url}}"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
						</div>
						@--if($itemCount % $displaySize == 0 || $counter == $total)
                         </div> 
	                    @endif
						@endforeach
						@endif
					</div>
				</div>
				<div class="row">
					<div class="more-option">
						<span class="border-icon">
							<span class="border-icon-bg">
								<span class="plus-icon">+</span>
							</span>
						</span>
					</div> 
				</div>
			</div>
		</div>
		<!-- product filter area -->