		<!-- cart-main-area start -->
		<div class="cart-main-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
					    @if(isset($cart) && count($cart) > 0)
							<?php $ct = 0; ?>
						<form action="{{url('update-cart')}}" method="post">		
                           {{ csrf_field() }}						
						   <input type="hidden" name="op" value="update"/>
						   
							<div class="table-content table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-thumbnail">Image</th>
											<th class="product-name">Product</th>
											<th class="product-price">Price</th>
											<th class="product-quantity">Quantity</th>
											<th class="product-subtotal">Total</th>
											<th class="product-remove">Remove</th>
										</tr>
									</thead>
									<tbody>
									@foreach($cart as $c)
									<?php
									   $p = $c['product'];
								        $images = $p['images'];
										$rm_url = url('remove-from-cart')."/".$c['id'];
										$ct += ($c['qty'] * $p['price']);
										$cname = "ccd-".$c['id'];
										$nqt = "nqt-".$c['id'];
							           ?>
									   <input type="hidden" name="{{$cname}}" value="ccd"/>
										<tr>
											<td class="product-thumbnail"><a href="#"><img src="{{$images[0]}}" alt="" /></a></td>
											<td class="product-name"><a href="#">{{$p['name']}}</a></td>
											<td class="product-price"><span class="amount">&#8358;{{$p['price']}}</span></td>
											<td class="product-quantity"><input name="{{$nqt}}" type="number" value="{{$c['qty']}}" /></td>
											<td class="product-subtotal">&#8358;{{$c['qty'] * $p['price']}}</td>
											<td class="product-remove"><a href="{{$rm_url}}"><i class="fa fa-times"></i></a></td>
										</tr>
									@endforeach
									</tbody>
								</table>
							</div>
							<div class="row">
								<div class="col-md-8 col-sm-7 col-xs-12">
									<div class="buttons-cart">
										<input type="submit" value="Update Cart" />
										<a href="#cart-totals">Continue Shopping</a>
									</div>
									<div class="coupon">
										<h3>Coupon</h3>
										<p>Enter your coupon code if you have one.</p>
										<input type="text" placeholder="Coupon code" />
										<input type="submit" value="Apply Coupon" />
									</div>
								</div>
								<div class="col-md-4 col-sm-5 col-xs-12">
									<div class="cart_totals">
										<h2>Cart Totals</h2>
										<table id="cart-totals">
											<tbody>
												<tr class="cart-subtotal">
													<th>Subtotal</th>
													<td><span class="amount">">&#8358;{{$ct}}.00</span></td>
												</tr>
												<tr class="shipping">
													<th>Shipping</th>
													<td>
														<ul id="shipping_method">
															<li>
																<input type="radio" name="with-shipping" id = "with-shipping" checked/> 
																<label>
																	Flat Rate: <span class="amount">&#8358;1500.00</span>
																</label>
															</li>
															<li></li>
														</ul>
													</td>
												</tr>
												<tr class="order-total">
													<th>Total</th>
													<td>
														<strong><span class="amount" id="yuu">&#8358;{{$ct + 1500}}.00</span></strong>
													</td>
												</tr>											
											</tbody>
										</table>
										<div class="wc-proceed-to-checkout">
											<a href="{{url('checkout')}}">Proceed to Checkout</a>
										</div>
									</div>
								</div>
							</div>
						</form>	
						@endif
					</div>
				</div>
			</div>
		</div>
		<!-- cart-main-area end -->	
		<!-- Main content end -->