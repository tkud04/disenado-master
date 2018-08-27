		<!-- slider area -->
		<div class="wplane-area  pad-70">
			<div class="container">
				<div class="wplane-bg">
					<div class="row">
						<!-- search area -->
						<div class="search-area">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="search-catagory">
							<form action="{{url('search')}}" method="post">
								{!! csrf_field() !!}
								<div class="select-style">
									<select class="select-optn ">
										<option class="first-option">all</option>
										<option class="">laptops</option>
										<option class="">fashion</option>
										<option class="">tablets</option>
										<option class="">electronics</option>
										<option class="">fragrances</option>
									</select>
								</div>
								<input class="input-text-box" name="term" spellcheck="false" value="" placeholder="Search product...">
								<button class="btn search-button"><i class="fa fa-search"></i></button>
							</form>
								</div>
							</div>
						</div>
						<!-- search area  end-->
					</div>
					<div class="lane-slide-banar ">
						<div class="row">
							<div class="slider-banner">
								<div class="col-md-8 col-sm-8 col-xs-12">
									<div class="slider-5">
										<div class="slider-area">
											<div class="slider-container theme-default">
												<!-- Slider Image -->
												<div id="mainSlider" class="nivoSlider slider-image">
													<img src="{{asset('img/slider/nn/slide-mini-1.png')}}" alt="main slider"  title="#htmlcaption1"/>
													<img src="{{asset('img/slider/nn/slide-mini-2.png')}}" alt="main slider"  title="#htmlcaption2"/>
													<img src="{{asset('img/slider/nn/slide-mini-3.png')}}" alt="main slider"  title="#htmlcaption3"/>
													<img src="{{asset('img/slider/nn/slide-mini-4.png')}}" alt="main slider"  title="#htmlcaption3"/>
												</div>
												<!-- Slider Caption 1 -->
												<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
													<div class="slider-progress"></div> 
													<div class="slide1-text " >
														<div class="middle-text ">
															<div class="cap-dec " >
																<div class="first-f">
																	<h3 class="first">BEST DEALS </h3>
																</div>
															</div>   
															<div class="cap-title ">
																<div class="first-f">
																	<h3 class="decond">FOR THE TECH SAVVY</h3>
																</div>
															</div> 
															<div class="sl-shop-link ">
																<div class="slide-lixury-btn">
																	<a class="s" href="{{url('shop')}}">shop now</a>
																</div>
															</div>  
														</div>   
													</div>                  
												</div>
												<!-- Slider Caption 2 -->
												<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
													<div class="slider-progress"></div> 
													<div class="slide2-text " >
														<div class="middle-text " style="color: #fff !important;">
															<div class="cap-dec " >
																<div class="first-f">
																	<h3 class="first">BEST DEALS </h3>
																</div>
															</div>   
															<div class="cap-title ">
																<div class="first-f">
																	<h3 class="decond">FOR THE TECH SAVVY</h3>
																</div>
															</div> 
															<div class="sl-shop-link ">
																<div class="slide-lixury-btn">
																	<a class="s" href="{{url('shop')}}">shop now</a>
																</div>
															</div>  
														</div>   
													</div>
												</div>
												<!-- Slider Caption 3 -->
												<div id="htmlcaption3" class="nivo-html-caption slider-caption-3">
													<div class="slider-progress"></div> 
													<div class="slide3-text wow zoomIn " data-wow-duration="0.1s" data-wow-delay="0.3s">
														<div class="middle-text " style="color: #fff !important;">
															<div class="cap-dec " >
																<div class="first-f">
																	<h3 class="first">BEST DEALS </h3>
																</div>
															</div>   
															<div class="cap-title ">
																<div class="first-f">
																	<h3 class="decond">FOR THE TECH SAVVY</h3>
																</div>
															</div> 
															<div class="sl-shop-link ">
																<div class="slide-lixury-btn">
																	<a class="s" href="{{url('shop')}}">shop now</a>
																</div>
															</div>  
														</div>    
													</div> 
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="lane-banner">
									    <?php 
										  $topRight = $laneBanner["topRight"];
										  $tr_img = asset($topRight['img']);
										  $tr_url = url($topRight['url']);
										?>										
										<a href="{{$tr_url}}"><img src="{{$tr_img}}" alt=""/></a>
									</div>
									<div class="lane-banner">
									    <?php 
										  $middleRight = $laneBanner["middleRight"];
										  $mr_img = asset($middleRight['img']);
										  $mr_url = url($middleRight['url']);
										?>										
										<a href="{{$mr_url}}"><img src="{{$mr_img}}" alt=""/></a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="slide-banar-5 line-fasion">
									<?php 
								     $bottomLeft = $slideBanner["bottomLeft"];
									 $bl_img = asset($bottomLeft['img']);
									 $bl_url = url($bottomLeft['url']);
									?>										
									<a href="{{$bl_url}}"><img src="{{$bl_img}}" alt=""/></a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="slide-banar-5 line-fasion">
									<?php 
								     $bottomRight = $slideBanner["bottomRight"];
									 $br_img = asset($bottomRight['img']);
									 $br_url = url($bottomRight['url']);
									?>										
									<a href="{{$br_url}}"><img src="{{$br_img}}" alt=""/></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider area end -->