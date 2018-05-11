		<!-- product area  -->
		<div class="product-list-area ptb-70">
			<div class="container">
				<div class="row">
				    @if(isset($searchResults) && count($searchResults) > 0)
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-list">
							<h3>Results</h3>
							@if(count($searchResults[0]) > 0)
							@foreach($searchResults[0] as $b)
						      <?php
								$url = url("products/".$b['id']);
								$cart_url = "bag/".$b['id'];
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
							<h3>Results</h3>
							@if(count($searchResults[1]) > 0)
							@foreach($searchResults[1] as $o)
						      <?php
								$url = url("products/".$o['id']);
								$cart_url = "bag/".$o['id'];
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
							<h3>Results</h3>
							@if(count($searchResults[2]) > 0)
							@foreach($searchResults[2] as $s)
						      <?php
								$url = url("products/".$s['id']);
								$cart_url = "bag/".$s['id'];
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
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					@else
					<div class="col-md-7 col-sm-6 col-xs-12">
						<div class="testnimonial-area ptb-70">
						 <div class="container">
						     <div class="row">
					             <div class="col-md-12">
						             <div class="heading-title">
										 <h4>Oops! We couldn't find that.</h4>
									 </div> 
								 </div>
							 </div>
							 <div class="row">
					             <div class="col-md-12">
						             <div class="testimonial">
										 <div class="tstmnil-content">
										 <p>We couldn't find anything that matches your search. but here are a few products we think you might be interested in.</p>
										 </div>
									 </div>
								 </div>
							 </div>
						 </div>
						</div>
					</div>					
					<div class="col-md-5 col-sm-6 col-xs-12">
						<div class="product-list">
							<h3>Results</h3>
							@if(isset($bs) && count($bs) > 0)
							@foreach($bs as $b)
						      <?php
								$url = url("products/".$b['id']);
								$cart_url = "bag/".$b['id'];
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
										<del><span class="amount-del">&#8358;{{$b['price'] + 200}}</span></del>
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
					@endif
				</div>
			</div>
		</div>
		<!-- product area end -->