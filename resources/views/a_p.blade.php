@extends("layout")

@section('title',"Add Product")

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
	    @if(Session::has('add-product-status') && Session::get('add-product-status') == "success")
			 <center><div class="alert alert-success">Product added successfully!</div></center>
	    @endif
						<form action="{{url('a-p')}}" method="post">
							{!! csrf_field() !!}
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="field">
									Name*<br/>
									<input name="name" type="text" value="{{old('name')}}">
									Price**<br/>
									<input name="price" type="text" value="{{old('price')}}">
									Brand***<br/>
									<input name="brand" type="text" value="{{old('brand')}}">									
									Category****<br/>
									<select name="category">
									  <option value="clothes">CLOTHES</option>
									  <option value="shoes">SHOES</option>
									  <option value="bags">BAGS</option>
									  <option value="jewellery">JEWELLERY</option>
									  <option value="watches">WATCHES</option>
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="field">
									Colors*<br/>
									<input name="colors" type="text" placeholder="Colors separated by commas" value="{{old('colors')}}">
									Images**<br/>
									<input name="images" type="text" placeholder="Images separated by commas" value="{{old('images')}}">
									Description*
									<br/>
									<textarea name="description"  aria-required="true" aria-invalid="true" spellcheck="false" value="{{old('description')}}"></textarea>
									<input type="submit" name="submit" Value="Add Product">
								</div>
							</div>
						</form>
	</div>
  </div>
</div>
@stop