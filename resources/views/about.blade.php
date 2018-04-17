@extends("layout")

@section('title',"About Us")

@section('content')
@include("search-area")

<?php $pageHead = "About"; ?>
@include("page-head")

@include("about-content")
@stop