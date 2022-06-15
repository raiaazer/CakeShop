<header class="header-area section-padding-1 transparent-bar">
    <div class="header-large-device">
        <div class="header-bottom sticky-bar">
            <div class="container-fluid">
                <div class="header-bottom-flex">
                    <div class="logo-menu-wrap">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{ asset('theme_asset') }}/assets/images/logo/logo-4.png" alt="logo">
                            </a>
                        </div>
                        <div class="main-menu menu-lh-1 main-menu-padding-1 menu-mrg-1">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="{{ route('products') }}">Shop</a>
                                    </li>
                                    @auth
                                    <li><a href="{{ '' }}">Profile</a></li>
                                    <li><a onclick="$('#logout').submit();" href="javascript:void(0);">Logout</a></li>
                                    @endauth
                                    @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-action-wrap header-action-flex header-action-width">
                        <div class="categories-dropdown">
                            <select class="nice-select nice-select-style-1">

                                <option>Cakes</option>
                                <option>Cupcakes </option>

                            </select>
                        </div>
                        <div class="search-style-2 mr-20">
                            <form>
                                <div class="form-search-2">
                                    <input class="input-text" value="" placeholder="Search" type="search">
                                    <button>
                                        <i class="icofont-search-1"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="same-style header-cart">
                            <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device header-small-ptb sticky-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo mobile-logo-width">
                        <a href="index.html">
                            <img alt="" src="{{ asset('theme_asset') }}/assets/images/logo/logo-4.png">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-action-wrap header-action-flex header-action-mrg-1">
                        <div class="same-style header-cart">
                            <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                        </div>
                        <div class="same-style header-info">
                            <button class="mobile-menu-button-active">
                                <span class="info-width-1"></span>
                                <span class="info-width-2"></span>
                                <span class="info-width-3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
