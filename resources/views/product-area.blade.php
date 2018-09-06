		<!-- product area  -->
		<div class="product-list-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-list">
							<h3>Best Selling</h3>
							@if(isset($bs) && count($bs) > 0)
							@foreach($bs as $b)
						      <?php
								$url = url("products/".$b['id']);
								$cart_url = "bag/".$b['id']."/qty/1";
								$images = $b['images'];
							  ?>
							<div class="single-product-list">
								<div class="product-image">
									<a href="{{$url}}">
										<img class="primary-1" src="{{asset($images[0])}}" alt="">
										<img class="primary-2" src="{{asset($images[1])}}" alt="">
									</a>
								</div>
								<div class="product-desc">
									<h4 class="name"><a href="{{$url}}">{{$b['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">&#8358;{{$b['price'] + rand(2000,5000)}}</span></del>
										&#8358;{{$b['price']}}
									</span>
									<div class="add-to-cart">
										<a href="{{$cart_url}}" data-toggle="tooltip"  title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<div class="pro-more-option">
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-list">
							<h3>On Sale</h3>
							@if(isset($os) && count($os) > 0)
							@foreach($os as $o)
						      <?php
								$url = url("products/".$o['id']);
								$cart_url = "bag/".$o['id']."/qty/1";
								$images = $o['images'];
							  ?>							
							<div class="single-product-list">
								<div class="product-image">
									<a href="{{$url}}">
										<img class="primary-1" src="{{asset($images[0])}}" alt="">
										<img class="primary-2" src="{{asset($images[1])}}" alt="">
									</a>
								</div>
								<div class="product-desc">
									<h4 class="name"><a href="{{$url}}">{{$o['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">&#8358;{{$o['price'] + rand(2000,5000)}}</span></del>
										&#8358;{{$o['price']}}
									</span>
									<div class="add-to-cart">
										<a href="{{$cart_url}}" data-toggle="tooltip"  title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<div class="pro-more-option">
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm col-xs-12">
						<div class="product-list last">
							<h3>Special</h3>
							@if(isset($ss) && count($ss) > 0)
							@foreach($ss as $s)
						      <?php
								$url = url("products/".$s['id']);
								$cart_url = "bag/".$s['id']."/qty/1";
								$images = $s['images'];
							  ?>
							<div class="single-product-list">
								<div class="product-image">
									<a href="{{$url}}">
										<img class="primary-1" src="{{asset($images[0])}}" alt="">
										<img class="primary-2" src="{{asset($images[1])}}" alt="">
									</a>
								</div>
								<div class="product-desc">
									<h4 class="name"><a href="{{$url}}">{{$s['name']}}</a></h4>
									<span class="amount">
										<del><span class="amount-del">&#8358;{{$s['price'] + rand(2000,5000)}}</span></del>
										&#8358;{{$s['price']}}
									</span>
									<div class="add-to-cart">
										<a href="{{$cart_url}}" data-toggle="tooltip"  title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
									</div>
								</div>
							</div>
							@endforeach
							@endif
							<div class="pro-more-option">
								<a href="{{url('/')}}">Go to homepage<i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product area end -->