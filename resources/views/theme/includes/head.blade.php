<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ userAssets('assets/images/favicon.png') }}">

    <!-- All CSS is here
	============================================ -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/vandella.css">
    <link rel="stylesheet" href="assets/css/vendor/jellybelly.css">
    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontello.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="{{ userAssets('assets/css/vendor/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ userAssets('assets/css/plugins/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ userAssets('assets/css/style.min.css') }}">
    @yield('style')
</head>

