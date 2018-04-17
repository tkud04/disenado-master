@extends("layout")

@section('title',"Checkout")

@section('content')
@include("search-area")

<?php $pageHead = "Checkout"; ?>
@include("entry-head")

@include("checkout-content")
@stop