@extends('theme.layouts.layout')

@section('style')
<style>
    .home-page .product-img img{
        width: 150px;
        height: 250px;
    }
</style>
@endsection

@section('body')

    @include('theme.pages.home.slider')

    @include('theme.pages.home.product_area')

    @include('theme.pages.home.special_products')

    @include('theme.pages.home.products')

    @include('theme.pages.home.about')

    @include('theme.pages.home.ratings')

    @foreach ($products as $product)
        @include('theme.pages.home.product_details_modal')
    @endforeach

@endsection