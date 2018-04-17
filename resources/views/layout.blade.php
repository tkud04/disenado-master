@include("head")
@include("header")

<!--------- Input errors -------------->
                    @if (count($errors) > 0)
                          @include('input-errors', ["errors" => $errors])
                     @endif   
                     
@yield('content') 

@include("footer")
@include("foot")