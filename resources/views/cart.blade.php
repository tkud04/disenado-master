@extends("layout")

@section('title',"Cart")

@section('content')
@include("search-area")

<?php $pageHead = "Cart"; ?>
@include("entry-head")

@include("cart-content")
@stop