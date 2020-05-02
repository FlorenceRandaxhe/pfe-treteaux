<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Les Tréteaux</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="format-detection" content="telephone=no">

        <!-- META -->

        <!-- FAVICON -->

        @if(App::environment('production'))
            <!-- Google Analytics -->
        @else
            <meta name="robots" content="noindex,nofollow">
        @endif
    </head>

    <body>

    </body>
</html>
