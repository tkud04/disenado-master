		<!-- search area -->
						<div class="search-area">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="search-catagory">
							<form action="{{url('search')}}" method="post">
								{!! csrf_field() !!}
								<div class="select-style">
									<select class="select-optn" name="opt">
										<option class="first-option">all</option>
										<option class="">laptops</option>
										<option class="">fashion</option>
										<option class="">tablets</option>
										<option class="">electronics</option>
										<option class="">fragrances</option>
									</select>
								</div>
								<input class="input-text-box" name="term" spellcheck="false" value="" placeholder="Search product...">
								<button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
							</form>
								</div>
							</div>
						</div>
		<!-- search area  end-->