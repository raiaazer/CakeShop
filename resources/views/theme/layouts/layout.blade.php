<!doctype html>
<html class="no-js" lang="en">
@include('theme.includes.head')
<body>
    <div class="main-wrapper main-wrapper-3">
        @include('theme.includes.header')

        @include('theme.includes.side_cart')
        @include('theme.includes.mobile-menu')
        @yield('body')

        @include('theme.includes.footer')
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-6">
                                <div class="quickview-img">
                                    <img src="assets/images/product/product-3.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-6">
                                <div class="product-details-content quickview-content">
                                    <h2>Cupcake</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-star-empty"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>4.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>242 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process
                                        improvements.</p>
                                    <div class="pro-details-price">
                                        <span>US $75.72</span>
                                        <span class="old-price">US $95.72</span>
                                    </div>
                                    <!-- <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="white" href="#">Black</a></li>
                                                <li><a class="azalea" href="#">Blue</a></li>
                                                <li><a class="dolly" href="#">Green</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">Pink</a></li>
                                                <li><a class="cupid" href="#">gray</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <!-- <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">XS</a></li>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                                <li><a href="#">XXL</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="product-details-meta">
                                        <ul>
                                            <li><span>Model:</span> <a href="#">Odsy-1000</a></li>
                                            <li><span>Ship To</span> <a href="#">2834 Laurel Lane</a>, <a
                                                    href="#">Mentone</a> , <a href="#">Texas</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-buy-now">
                                            <a href="#">Buy Now</a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i
                                                        class="icon-social-facebook-square"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i
                                                        class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i
                                                        class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i
                                                        class="icon-social-pinterest"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" id="logout" action="{{ route('logout') }}">
            @csrf
        </form>
    </div>

    <!-- All JS is here
============================================ -->
    <!-- <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="assets/js/plugins/slick.js"></script>
<script src="assets/js/plugins/countdown.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/instafeed.js"></script>
<script src="assets/js/plugins/svg-injector.min.js"></script>
<script src="assets/js/plugins/jquery.nice-select.min.js"></script>
<script src="assets/js/plugins/mouse-parallax.js"></script>
<script src="assets/js/plugins/images-loaded.js"></script>
<script src="assets/js/plugins/isotope.js"></script>
<script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
<script src="assets/js/plugins/jquery-ui.js"></script>
<script src="assets/js/plugins/magnific-popup.js"></script>
<script src="assets/js/plugins/easyzoom.js"></script>
<script src="assets/js/plugins/scrollup.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ userAssets('assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ userAssets('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ userAssets('assets/js/main.js') }}"></script>
    @yield('script')
</body>
</html>
