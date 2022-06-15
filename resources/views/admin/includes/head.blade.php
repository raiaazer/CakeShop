<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    @if(in_array('datatable',$use))
    {{-- Data Table --}}
    <link href="{{ adminAssets('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    @endif

    @if(in_array('chart',$use))
	<link rel="stylesheet" href="{{ adminassets('vendor/chartist/css/chartist.min.css') }}">
    @endif

    @if(in_array('select',$use))
    <link href="{{ adminAssets('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    @endif

    <link href="{{ adminAssets('css/style.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    @yield('style')
</head>
