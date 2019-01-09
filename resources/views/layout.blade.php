@include("head")
@include("header")

<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif   
                    
     @if(Session::has('signup-status') && Session::get('signup-status') == "success")
			 <center><div class="alert alert-success">Signup successful! <a href="#" class="legbe">Click here</a> to login and verify your account.</div></center>
			@endif
			
     @if(Session::has('login-status') && Session::get('login-status') == "error")
			 <center><div class="alert alert-danger">Invalid username or password. <a href="#" class="legbe">Click here</a> to try again.</div></center>
			@endif
			
    @if(Session::has('cart-status') && Session::get('cart-status') == "new-user")
			 <center><div class="alert alert-success">You must <a href="#" class="legbe">login</a> or <a href="#" class="legbe2">signup</a> to continue.</div></center>
			@endif
	    @if(Session::has('add-to-cart-status') && Session::get('add-to-cart-status') == "success")
			 <center><div class="alert alert-success">Added to cart!</div></center>

     	@elseif(Session::has('remove-from-cart-status') && Session::get('remove-from-cart-status') == "success")
			 <center><div class="alert alert-success">Removed from cart!</div></center>
	    @endif
	
@yield('content') 

@include("footer")
@include("foot")