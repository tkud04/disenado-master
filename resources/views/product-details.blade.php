@extends("layout")

@section('title',$p['name'])

@section('content')
@include("search-area")

<?php $pageHead = $p['name']; ?>
@include("page-head")

@include("product-details-content")
@stop