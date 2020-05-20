<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') - Les Tréteaux</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="format-detection" content="telephone=no">

        <!-- META -->
        <meta name="description" content="{{ $meta_description }}">
        <meta property="og:description" content="{{ $meta_og_description }}">
        <meta property="og:image" content="{{ $meta_image }}">
        <meta property="og:site_name" content="Les Tréteaux">
        <meta property="og:title" content="{{ $meta_og_title }}">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ URL::current() }}">
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:creator" content="Florence Randaxhe">
        <meta property="twitter:description" content="{{ $meta_twitter_description }}">
        <meta property="twitter:title" content="{{ $meta_twitter_title }}">

        <!-- FAVICON -->

        @if(App::environment('production'))
            <!-- Google Analytics -->
        @else
            <meta name="robots" content="noindex,nofollow">
        @endif
    </head>

    <body class="body body--nojs">
        @yield('main')
        @include('parts.cookies')
        @include('parts.footer')
    </body>
</html>
