<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page-title'){{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
    <style>
    body {
        color: #848585;
        font-family: 'Roboto';
    }
    </style>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('static/icons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('static/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('static/icons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('static/icons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('static/icons/safari-pinned-tab.svg') }}" color="#ffd100">
    <link rel="shortcut icon" href="{{ asset('static/icons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="{{ asset('static/icons/browserconfig.xml') }}">
    <meta name="theme-color" content="#ffffff">

</head>

<body>
    <main>
        <div class="grid-container" style="max-width: 600px;">
            <div class="grid-y text-center grid-margin-y">
                <div class="cell" style="padding: 0;">
                    <img src="{{ url('storage/logo_atelier_dynamis.svg') }}" width=100% style="max-width:450px;" />
                </div>
                <div class="cell">
                    unsere website ist bald bereit, besuche uns im märz wieder | notre site internet est bientôt prêt, n'hésite pas à revenir en mars
                </div>
                <div class="cell">
                    <div class="grid-x align-center grid-margin-x grid-margin-y grid-padding-x grid-padding-y medium-up-2">
                        <div class="cell text-left" style="color: #ffffff; border: none; background-color: #E50695; box-shadow: 4px 4px 6px 1px #848585;">
                            sarah meier<br />
                            craniosacraltherapie<br />
                            <a href="tel:+41763288990" style="color: inherit">+41 76 328 89 90</a>
                        </div>
                        <div class="cell text-left" style="color: #ffffff; border: none; background-color: #FFD100; box-shadow: 4px 4px 6px 1px #848585;">
                            sophie charrière<br />
                            physiothérapie pédiatrique<br />
                            <a href="tel:+41774569616" style="color: inherit">+41 77 456 96 16</a>
                        </div>
                    </div>
                </div>
                <div class="cell">
                    <span style="font-weight: bold;">atelier dynamis</span><br />
                    bahnhofplatz 1 | place de la gare 1<br />
                    2502 biel/bienne<br />
                </div>
            </div>
        </div>
    </main>
</body>

</html>
