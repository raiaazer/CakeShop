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

    <script>
        const login = {{ auth()->check() ? 'true' : 'false' }};
        const loginRoute = "{{ route('login') }}";
    </script>
    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="{{ userAssets('assets/js/vendor/vendor.min.js') }}"></script>
    <script src="{{ userAssets('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ userAssets('assets/js/main.js') }}"></script>
    {{-- <script src="{{ userAssets('assets/js/custom.js') }}"></script> --}}
    @yield('script')
</body>
</html>
