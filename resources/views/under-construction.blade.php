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
    .fullscreen:after {
        z-index: -100;
        content: '';
        opacity : 0.6;
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        background: url('/storage/shutterstock_1646599021.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-color: transparent;
        -webkit-background-size :cover;
        -moz-background-size :cover;
        -o-background-size :cover;
        background-size :cover;
    }
    </style>

    <!-- Favicon -->

</head>

<body>
    <main>
        <div class="grid-y grid-frame fullscreen">
            <h1 class="text-center">atelier dynamis biel/bienne</h1>
            <div class="grid-x align-middle align-center" style="height:100%;">
                <div class="cell medium-5 text-center">
                    <h2>bienvenue</h2>
                    <p>quelque chose se prépare ici... n'hésite pas à revenir nous rendre visite prochainement</p>
                </div>
                <div class="cell small-1"></div>
                <div class="cell medium-5 text-center">
                    <h2>willkommen</h2>
                    <p>hier wird etwas vorbereitet... zögere nicht, uns bald wieder zu besuchen</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
