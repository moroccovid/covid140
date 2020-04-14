<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<title>Covid19 114 </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<li><a href="{{ url('locale/fr') }}" ><i class="fa fa-language"></i> FR</a></li>

<li><a href="{{ url('locale/ar') }}" ><i class="fa fa-language"></i> AR</a></li>

    <h1>Covid 2019</h1>

    <h1>{{ __('messages.welcome') }}</h1>

</body>
</html>
