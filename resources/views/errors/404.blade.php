<?php
$cart = []; 
$bs = []; 
?>
@extends("layout")

@section('title',"Not Found")

@section('content')
		<!-- product area  -->
		<div class="product-list-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
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
							<div class="pro-more-option">
								<a href="{{url('shop')}}">View more <i class="vc_btn3-icon fa fa-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- product area end -->
@stop