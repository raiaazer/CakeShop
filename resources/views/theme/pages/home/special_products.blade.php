<div class="banner-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <a href="{{ route('products',['category'=>$categoryOne->slug]) }}">
                    <div class="banner-wrap mb-30">
                        <div class="banner-img">
                            <a href="{{ route('products',['category'=>$categoryOne->slug]) }}">
                                <img src="{{ $categoryOne->thumbnail }}" alt="">
                            </a>
                        </div>
                        <div class="banner-content-8 banner-position-9">
                            <h3><a href="{{ route('products',['category'=>$categoryOne->slug]) }}">{{ $categoryOne->name }}</a></h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('products',['category'=>$categoryTwo->slug]) }}">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img">
                                    <a href="{{ route('products',['category'=>$categoryTwo->slug]) }}"><img src="{{ $categoryTwo->thumbnail }}" alt=""></a>
                                </div>
                                <div class="banner-content-9 banner-position-10">
                                    <h3><a href="{{ route('products',['category'=>$categoryTwo->slug]) }}">{{ $categoryTwo->name }}</a></h3>
                                    <div class="banner-btn-4">
                                        <a href="shop.html">View Collection 
                                            <img class="inject-me" src="{{ userAssets('assets/images/icon-img/right-arrow-banner.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-12">
                        <a href="{{ route('products',['category'=>$categoryThree->slug]) }}">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img">
                                    <a href="{{ route('products',['category'=>$categoryThree->slug]) }}"><img src="{{ $categoryThree->thumbnail }}" alt=""></a>
                                </div>
                                <div class="banner-content-9 banner-position-11">
                                    <h3><a href="{{ route('products',['category'=>$categoryThree->slug]) }}">{{ $categoryThree->name }}</a></h3>
                                    <div class="banner-btn-4">
                                        <a href="shop.html">View Collection 
                                            <img class="inject-me" src="{{ userAssets('assets/images/icon-img/right-arrow-banner.svg') }}" alt="">
                                        </a>
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