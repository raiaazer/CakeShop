<div class="product-area pt-130 gradient-bg-2" id="shopess">
    <div class="container">
        <div class="section-title-4 mb-35 text-center">
            <span>Today’s Special</span>
            <h2>New Arrival </h2>
        </div>
        <div class="product-tab-list-1 tab-list-1-modify nav mb-50">
            @foreach($categories as $category)
            <a class="{{ $loop->first ? 'active' : '' }}" href="#product-{{$category->id}}" data-toggle="tab">
                {{ $category->name }}
            </a>
            @endforeach
        </div>
        <div class="tab-content jump home-page">
            @foreach($categories as $category)
            <div id="product-{{$category->id}}" class="tab-pane {{ $loop->first ? 'active' : '' }}">
                <div class="row">
                    @foreach($products->where('category_id',$category->id) as $product)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-90">
                            <div class="product-img position-relative product-img-zoom mb-30">
                                <a href="{{ route('product-details',$product->slug) }}">
                                    <img src="{{ $product->getImages()->first() }}" alt="">
                                </a>
                                <div class="product-action-2">
                                    <div class="product-action-2-style">
                                        <button class="cart-active" title="Add to cart">
                                            <i class="icofont-shopping-cart"></i>
                                        </button>
                                        <button data-toggle="modal" data-target="#product-{{ $product->id }}-details">
                                            <i class="icon-zoom"></i>
                                        </button>
                                        {{-- <button title="Add to Compare">
                                            <i class="icon-compare"></i>
                                        </button> --}}
                                        <button title="Add to Wishlist">
                                            <i class="icon-heart-empty"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h4><a href="{{ route('product-details',$product->slug) }}">{{ $product->name }}</a></h4>
                                <div class="product-price">
                                    @if($product->discount_type)
                                    <span>{{ priceFormat($product->actualPrice()) }}</span>
                                    <span class="old-price">{{ priceFormat($product->price) }}</span>
                                    @else
                                    <span>{{ priceFormat($product->price) }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>