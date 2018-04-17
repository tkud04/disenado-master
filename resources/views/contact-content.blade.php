		<!-- Main content  -->
		<div class="contact-body">
			<div class="container">
				<div class="row">
					<div class="contect-from">
						<form id="contact-form" action="{{url('contact')}}" method="post">
							{!! csrf_field() !!}
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="field">
									Name*<br/>
									<input name="name" type="text">
									Email**<br/>
									<input name="email" type="email">
									Website<br/>
									<input name="website" type="text">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="field">
									Content*
									<br/>
									<textarea name="message"  aria-required="true" aria-invalid="true" spellcheck="false"></textarea>
									<input type="submit" name="submit" Value="Send Messages">
								</div>
							</div>
						</form>
						<p class="form-messege"></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Main content end -->