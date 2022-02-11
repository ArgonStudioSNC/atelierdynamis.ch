<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title'){{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('storage/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('storage/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('storage/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('storage/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('storage/icons/safari-pinned-tab.svg') }}" color="#ffd100">
    <link rel="shortcut icon" href="{{ asset('storage/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="{{ asset('storage/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <main>
        <div id="app">
            <router-view></router-view>
        </div>
    </main>

    <script>
    window.locale = "{{ App::getLocale() }}";
    window.default_locale = "{{ config('app.locale') }}";
    window.fallback_locale = "{{ config('app.fallback_locale') }}";
    window.messages = @json($messages);
    </script>
</body>

</html>
