<style type="text/css">
img.logog{
	width: 50px;
	height: 50px;
}
</style>
		<!-- header area -->
		<header class="header-2">
			<div class="header-area menu2">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="logo">
								<a href="{{url('/')}}"><img src="{{asset('img/logo.JPG')}}" class="logog" alt=""><span class="label label-default text-uppercase" style="letter-spacing: 3px;">Online Store</span></a>
							</div>   
						</div>
						<div class="col-md-7 col-sm-4 col-xs-12">
							<div class="main-menu visible-md visible-lg ">
								<nav>
									<ul class="main">
										<li class="active "><a class="main-a" href="{{url('/')}}"><span>Home</span></a></li>
										<li class=""><a class="main-a" href="{{url('shop')}}">Shop</a></li>
										<li><a class="main-a" href="{{url('contact')}}">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
						<div class="col-md-2 col-sm-5 col-xs-12">
							<div class="header-wocom">
								<div class="header-userinfo">
                                    <a class="icon-heaher" href="#"><i class="fa fa-shopping-cart"></i><span>{{count($cart)}}</span></a>
                                    <ul class="shop-cart">
									  @if(isset($cart) && count($cart) > 0)
										<?php $ct = 0; ?>
									
									  @foreach($cart as $c)
								       <?php
									   $p = $c['product'];
								        $images = $p['images'];
										$rm_url = url('remove-from-cart')."/".$c['id'];
										$ct += ($c['qty'] * $p['price']);
							           ?>
                                        <li>
                                            <div class="sop-pro">
                                                <div class="img-cart">
                                                    <a href="#"><img src="{{$images[0]}}" alt=""></a>
                                                </div>
                                                <div class="img-dtil">
                                                    <h4><a href="#">{{$p['name']}}</a></h4>
                                                    <span class="quantity">
													{{$c['qty']}} × 
                                                        <span class="amount">&#8358;{{$p['price']}}</span>
                                                    </span>
                                                </div>
                                                <div class="close-x">
                                                    <a href="{{$rm_url}}">X</a>
                                                </div>
                                            </div>
                                        </li>
									  @endforeach
                                        <li><p class="total">Sub-total: <span class="amount">&#8358;{{$ct}}</span></p></li>
                                        <li>
                                            <div class="view"><a href="{{url('checkout')}}">Checkout</a></div>
                                            <div class="chack-out"><a href="{{url('cart')}}">View Cart</a></div>
                                        </li>
									 @endif
                                    </ul>
								</div>
								<div class="header-language">
									<a class="icon-heaher" href="#"><i class="fa fa-cog"></i></a>
									<ul>
										<li><h3>Languages</h3></li>
										<li><a href="#"><img src="{{asset('img/language/english.png')}}" alt="">english </a></li>
										<li>
											<h3>Currencies</h3>
											<span class="currencies">
												<a href="#"><span>&#8358;</span> - NGN</a>
											</span>
										</li>
									</ul>
								</div>
								<div class="header-cart">
									<a class="icon-heaher" href="#"><i class="fa fa-user"></i></a>
									<ul>
									    @if(isset($user) && $user != null)
										<li><a href="#">Welcome, {{$user->fname}}</a></li>
										<li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i>My Cart</a></li>
										<li><a href="{{url('logout')}}"><i class="fa fa-eye-slash"></i>Sign out</a></li>
										@else
										<li><a href="#" class="legbe"><i class="fa fa-key"></i>Sign in</a></li>
										<li><a href="#" class="legbe2"><i class="fa fa-plug"></i>Sign up</a></li>
									    @endif
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- mobile menu  -->
		<div class="header-mobile-menu visible-xs visible-sm">
			<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-spacing">
                            <div class="mobile-menu-area ">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="main">
										<li class="active "><a class="main-a" href="{{url('/')}}"><span>Home</span></a></li>
										<li class=""><a class="main-a" href="{{url('shop')}}">Shop</a></li>
										<li><a class="main-a" href="{{url('contact')}}">Contact</a></li>
										@if(isset($user) && $user != null)
										<li><a href="#">Welcome, {{$user->fname}}</a></li>
										<li><a class="main-a" href="{{url('cart')}}">My Cart</a></li>
										<li><a class="main-a" href="{{url('logout')}}">Sign out</a></li>
										@else
										<li><a class="main-a legbe" href="#">Sign in</a></li>
										<li><a class="main-a legbe2" href="#">Sign up</a></li>
									    @endif

                                        </ul>
                                    </nav>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>	
			</div>
		</div>
		<!-- Mobile menu end  -->
		<!-- header area end-->