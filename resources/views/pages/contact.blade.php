@extends('layout')
@section('extra-style')
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet'>
@endsection
@section('title', Page::title())
@section('main')
    @include('partials.heroBasic', [
        'color' => 'grey',
        'title' => Page::title(),
        'intro' => Page::get('heroIntro'),
        'img' => '',
        'type' => ''
    ])
    <main class="main">
        @include('partials.contact')
        @include('partials.contactInfo')
        @include('partials.map')
        @include('partials.latestEvents', [
            'class' => 'footer',
        ])
    </main>
@endsection
