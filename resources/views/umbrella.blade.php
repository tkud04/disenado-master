@include("head")

@section('title',"Welcome")

		<!-- Main content  -->
		<div class="contact-body">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-title">
							<h4>WELCOME TO DISENADO NG</h4>
						</div> 
					</div>
					<div class="about-area">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="content">
								<div class="card bg-dark text-white">
  <img src="img/nebe/it.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <a class="btn btn-primary btn-lg" href="{{url('software')}}">Go to IT Services</a>
  </div>
</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="content">
								<div class="card bg-dark text-white">
  <img src="img/nebe/shop.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    <a class="btn btn-primary btn-lg" href="{{url('store')}}">Go to Online Store</a>
  </div>
</div>
							</div>
						</div>
					</div>
				</div>
		  </div>
      </div>
		<!-- Main content end -->

@include("foot")