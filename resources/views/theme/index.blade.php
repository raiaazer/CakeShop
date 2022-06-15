@extends('theme.layouts.layout')
@section('body')

<div class="slider-area slider-mt-2">
    <div class="slider-active-1 nav-style-1 dot-style-1">
        <div class="single-slider slider-height-6 custom-d-flex custom-align-item-center bg-img"
            style="background-image:url('{{ asset('theme_asset') }}/assets/images/slider/cake-slider-bg.png');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-content-4 slider-animated-1">
                            <h1 class="animated">Delicious Cakes</h1>
                            <h3 class="animated">For all occasions</h3>
                            <div class="btn-style-3 btn-hover mt-2">
                                <a class="btn3-ptb-2 btn3-bg-chocolate animated" href="products.html">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img-4 slider-animated-1">
                            <a href="#"><img class="animated" src="{{ asset('theme_asset') }}/assets/images/slider/cakes.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slider-height-6 custom-d-flex custom-align-item-center bg-img"
            style="background-image:url('{{ asset('theme_asset') }}/assets/images/slider/cake-slider-bg.png');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-content-4 slider-animated-1">
                            <h3 class="animated">sprinkle happiness</h3>
                            <h1 class="animated">Delicious Cupcakes</h1>
                            <div class="btn-style-3 btn-hover">
                                <a class="btn3-ptb-2 btn3-bg-chocolate animated" href="products.html">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 col-sm-6">
                        <div class="slider-single-img-4 slider-animated-1">
                            <a href="#"><img class="animated" src="{{ asset('theme_asset') }}/assets/images/slider/cake-2-slider-1.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-cake-fixed-img">
        <img src="{{ asset('theme_asset') }}/assets/images/slider/cake-fixed-img.png" alt="">
    </div>
</div>
<div class="product-area pt-160 pb-160">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-12 col-sm-5">
                <div class="cake-product-img">
                    <a href="#"><img src="{{ asset('theme_asset') }}/assets/images/product/product-42.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-12 col-sm-7">
                <div class="arrival-product-details ml-50">
                    <h4>New Arrival</h4>
                    <h3><a href="#">lemon raspberry</a></h3>
                    <h4>lemon cake layered with raspberry compote, filled with tart lemon curd and lemon cream
                        cheese buttercream</h4>
                    <div class="product-action-wrap-2">
                        <div class="btn-style-3 btn-hover">
                            <a class="btn3-ptb-4 btn3-bg-chocolate animated" href="{{ route('product-detail') }}">Pre
                                Order</a>
                        </div>
                        <div class="product-action-wrap-2-right">
                            <button data-toggle="modal" data-target="#exampleModal"><i
                                    class="icon-zoom"></i></button>
                            <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="products.html">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img">
                            <a href="products.html"><img src="{{ asset('theme_asset') }}/assets/images/banner/banner-15.png" alt=""></a>
                        </div>
                        <div class="banner-content-8 banner-position-9">
                            <h3><a href="products.html">Kids Favourite </a></h3>
                            <span>50% off</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="products.html">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img">
                                    <a href="products.html"><img src="{{ asset('theme_asset') }}/assets/images/banner/banner-16.png"
                                            alt=""></a>
                                </div>
                                <div class="banner-content-9 banner-position-10">
                                    <h3><a href="products.html">Chocolate Cake</a></h3>
                                    <div class="banner-btn-4">
                                        <a href="shop.html">View Collection <img class="inject-me"
                                                src="{{ asset('theme_asset') }}/assets/images/icon-img/right-arrow-banner.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <a href="products.html">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img">
                                    <a href="products.html"><img src="{{ asset('theme_asset') }}/assets/images/banner/banner-17.png"
                                            alt=""></a>
                                </div>
                                <div class="banner-content-9 banner-position-11">
                                    <h3><a href="products.html">Special Cake</a></h3>
                                    <div class="banner-btn-4">
                                        <a href="shop.html">View Collection <img class="inject-me"
                                                src="{{ asset('theme_asset') }}/assets/images/icon-img/right-arrow-banner.svg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-area pt-130 gradient-bg-2" id="shopess">
    <div class="container">
        <div class="section-title-4 mb-35 text-center">
            <span>Today’s Special</span>
            <h2>New Arrival </h2>
        </div>
        <div class="product-tab-list-1 tab-list-1-modify nav mb-50">
            <a class="active" href="#product-1" data-toggle="tab">
                Cakes
            </a>
            <a href="#product-2" data-toggle="tab">
                Cupcakes
            </a>

        </div>
        <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-43.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 100</span>
                                    <span class="old-price">$ 110</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-44.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 120</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-45.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-46.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 130</span>
                                    <span class="old-price">$ 140</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-47.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-48.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 135</span>
                                    <span class="old-price">$ 145</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="product-2" class="tab-pane">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-48.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 100</span>
                                    <span class="old-price">$ 110</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-47.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 120</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-46.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 150</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-45.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 130</span>
                                    <span class="old-price">$ 140</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-44.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-detail') }}">
                                    <img src="{{ asset('theme_asset') }}/assets/images/product/product-43.png" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">

                                        <button class="cart-active" title="Add to cart"><i
                                                class="icofont-shopping-cart"></i></button>
                                        <button data-toggle="modal" data-target="#exampleModal"><i
                                                class="icon-zoom"></i></button>
                                        <!-- <button title="Add to Compare"><i class="icon-compare"></i></button> -->
                                        <button title="Add to Wishlist"><i
                                                class="icon-heart-empty"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-detail') }}">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 135</span>
                                    <span class="old-price">$ 145</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="about-area pt-250 pb-160">
    <div class="product-bg-shape">
        <img src="{{ asset('theme_asset') }}/assets/images/icon-img/product-bg-shape.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="about-img">
                    <img src="{{ asset('theme_asset') }}/assets/images/about/about-1.png" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6 align-self-center">
                <div class="about-content">
                    <span>Our Story</span>
                    <h2>We are old but test is new <br>& Delicious </h2>
                    <p>Conveniently repurpose web-enabled supply chains after technically sound action items.
                        Progressively implement granular e-markets whereas customized niches.</p>
                    <div class="btn-style-3 btn-hover">
                        <a class="btn3-ptb-5 btn3-bg-chocolate animated" href="about-us.html">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-area position-relative bg-light-orange pt-150 pb-250">
    <div class="container-fluid p-0">
        <div class="testimonial-active-5">
            <div class="single-testimonial">
                <div class="testi-rating-quotes-icon">
                    <div class="testi-rating">
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                    </div>
                    <div class="testi-quotes-icon">
                        <img class="inject-me" src="{{ asset('theme_asset') }}/assets/images/icon-img/quotes-icon.png" alt="">
                    </div>
                </div>
                <p>Quickly iterate superior manufactured products with long-term <span>high impact niche
                        markets</span>. Rapidiously synergize revolutionary data after tactical technology.</p>
                <div class="client-info-wrap">
                    <div class="client-img">
                        <img src="{{ asset('theme_asset') }}/assets/images/testimonial/client-1.png" alt="">
                    </div>
                    <div class="client-info">
                        <h3>Binte Chuka</h3>
                        <span>Google, CEO</span>
                    </div>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="testi-rating-quotes-icon">
                    <div class="testi-rating">
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                    </div>
                    <div class="testi-quotes-icon">
                        <img class="inject-me" src="{{ asset('theme_asset') }}/assets/images/icon-img/quotes-icon.png" alt="">
                    </div>
                </div>
                <p>Quickly iterate superior manufactured products with long-term <span>high impact niche
                        markets</span>. Rapidiously synergize revolutionary data after tactical technology.</p>
                <div class="client-info-wrap">
                    <div class="client-img">
                        <img src="{{ asset('theme_asset') }}/assets/images/testimonial/client-1.png" alt="">
                    </div>
                    <div class="client-info">
                        <h3>Ronald Blake</h3>
                        <span>Google, CEO</span>
                    </div>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="testi-rating-quotes-icon">
                    <div class="testi-rating">
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                    </div>
                    <div class="testi-quotes-icon">
                        <img class="inject-me" src="{{ asset('theme_asset') }}/assets/images/icon-img/quotes-icon.png" alt="">
                    </div>
                </div>
                <p>Quickly iterate superior manufactured products with long-term <span>high impact niche
                        markets</span>. Rapidiously synergize revolutionary data after tactical technology.</p>
                <div class="client-info-wrap">
                    <div class="client-img">
                        <img src="{{ asset('theme_asset') }}/assets/images/testimonial/client-1.png" alt="">
                    </div>
                    <div class="client-info">
                        <h3>Binte Chuka</h3>
                        <span>Google, CEO</span>
                    </div>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="testi-rating-quotes-icon">
                    <div class="testi-rating">
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                        <i class="icon-rating"></i>
                    </div>
                    <div class="testi-quotes-icon">
                        <img class="inject-me" src="{{ asset('theme_asset') }}/assets/images/icon-img/quotes-icon.png" alt="">
                    </div>
                </div>
                <p>Quickly iterate superior manufactured products with long-term <span>high impact niche
                        markets</span>. Rapidiously synergize revolutionary data after tactical technology.</p>
                <div class="client-info-wrap">
                    <div class="client-img">
                        <img src="{{ asset('theme_asset') }}/assets/images/testimonial/client-1.png" alt="">
                    </div>
                    <div class="client-info">
                        <h3>Binte Chuka</h3>
                        <span>Google, CEO</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial-bg-shape">
        <img src="{{ asset('theme_asset') }}/assets/images/icon-img/testimonial-shape.png" alt="">
    </div>
</div>
@endsection
