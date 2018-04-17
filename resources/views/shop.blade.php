@extends("layout")

@section('title',"Shop")

@section('content')
@include("search-area")

<?php $pageHead = "Shop"; ?>
@include("page-head")

@include("shop-content")
@stop