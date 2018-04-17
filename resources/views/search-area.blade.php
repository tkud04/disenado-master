		<!-- search area -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="search-catagory">
							<form action="{{url('search')}}" method="post">
								{!! csrf_field() !!}
								<div class="select-style">
									<select class="select-optn ">
										<option class="first-option">all category</option>
									</select>
								</div>
								<input class="input-text-box" name="term" spellcheck="false" value="" placeholder="Search product...">
								<button class="btn search-button"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- search area  end-->