		<!-- Main content  -->
		<div class="prodect-details-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
						<?php
						  $url = "products/".$p['id'];
						  $images = $p['images'];
						  $cart_url = url("bag/".$p['id']);
						?>
							<div class="col-md-5 col-sm-6 col-xs-12 ">
								<div class="main-img">
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home2">
											<div class="zoom">
												<a class="zoom_01" rel="group" href="{{asset($images[0])}}">
													<img class="" src="{{asset($images[1])}}"  alt="" />
												</a>
											</div>
										</div>
									</div>
									<div class="" role="tablist">
										<div class="magnifier-gallery ind-style">
											<div class="img-gallary">
												<div role="presentation" class="active"><a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">
													<img  src="{{asset($images[0])}}"  alt="" /></a>
												</div>
											</div>
											@for($i = 0; $i < count($images); $i++)
											<div class="img-gallary">
												<div role="presentation"><a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">
													<img  src="{{asset($images[$i])}}" alt=""  /></a>
												</div>
											</div>
											@endfor
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7 col-sm-6 col-xs-12">
								<div class="single-pro-details">
									<div class="product-details-shop ">
										<h4 class="name">{{$p['name']}}</h4>
										<div class="reating">
											<span class="star-reating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <a href="#">0 Review(s) / Add Your Review </a>
											</span>
										</div>
										<span class="amount">
											&#8358;{{$p['price']}}
										</span>
										<p>{{$p['description']}}</p>
										<div id=field1>
											<span>Qty</span>
											<button type="button" id="sub" class="sub">-</button>
											<input type="text" id="qty" value="1" class="field">
											<button type="button" id="add" class="add">+</button>
										</div>
										<div class="product-action">
											<a class="add-tocart" id="atc" href="#" data-lef="{{$cart_url}}" data-toggle="tooltip" data-placement="top" title="Add To Cart" >Add To Cart</a>
										</div>	
									</div>
								</div>
								<div class="product-meta">
									<div class="posted-in">
										Category:
										<a href="#"> {{$p['category']}}</a>
									</div>
									<div class="tagged-as">
										Tags: 
										<a href="#">Laptops</a>,
										<a href="#"> Electronic</a>,
										<a href="#"> Tablets</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="product-info">
									<!-- Nav tabs -->
									<ul class="info-tab" role="tablist">
										<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
										<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Information</a></li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content">
										<div role="tabpanel" class="tab-pane active" id="home">
											<h2>Product Description</h2>
											{{$p['description']}}
										</div>
										<div role="tabpanel" class="tab-pane" id="profile">
											<h2>Additional Information</h2>
											<table>
												<tr>
													<th>Brand</th>
													<td>{{$p['brand']}}</td>
												</tr>
												<tr> 	
													<th>Colors</th>
													<td>{{$p['colors']}}</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="row">
									<div class="related-product">
										<h1>Related Products</h1>
										<div class="pr-crosel related-style">
										    @foreach($related_products as $rp)
										<?php
										   $rpurl = url("products")."/".$rp['id'];
										   $rpimages = $rp['images'];
										   $cart_url = url("bag")."/".$rp['id'];
										 ?>
											<div class="col-md-4">
												<div class="single-product">
													<div class="product-image fix">
														<a href="{{$rpurl}}">
															<img  src="{{asset($rpimages[0])}}" alt="">
															<img class="primary-2" src="{{asset($rpimages[1])}}" alt="">
														</a>
														<div class="product-action">
															<a href="#" data-toggle="tooltip"   title="Quick view"><i class="fa fa-eye"></i></a>
														</div>
														<div class="new-area">
															<div class="new">
																<span class="text-new"><span>new</span></span>
															</div>
														</div>
													</div>
													<h4 class="name"><a href="#">{{$rp['name']}}</a></h4>
													<span class="amount">
														<del><span class="amount-del">&#8358;{{$rp['price'] + 200}}</span></del>
														&#8358;{{$rp['price']}}
													</span>
													<div class="add-to-cart">
														<a href="{{$cart_url}}"><i class="fa fa-shopping-cart"></i></a>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main content end -->