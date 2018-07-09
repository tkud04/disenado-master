		<!-- Brand  area  -->
		<div class="brand">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="br-corosel ptb-70 ind-style">
						    @foreach($brands as $b)
							 <?php $ass = asset("img/brand/".$b); ?>
							<div class="brnd-logo">
								<img src="{{$ass}}" alt="">
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Brand  area end -->