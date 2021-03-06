@extends('layout')
@section('extra-style')
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet'>
@endsection
@section('title',Page::title())
@section('main')
    @include('partials.hero', [
        'class' => 'left',
        'color' => 'blue',
        'type' => '',
        'title' => Page::title(),
        'text' => Page::get('heroIntro'),
        'img' => Page::get('image'),
        'isEvent' => false,
        'btnType' => '',
        'alt' => Page::get('heroAlt'),
        'file' => false,
        'url' => '',
        'icon' => '',
        'label' => ''
    ])
    <main>
        @include('partials.allRestos')
        @include('partials.info', [
            'class' => '',
            'title' => Page::get('infoTitle'),
            'text' => Page::get('infoContent'),
            'url' => 'contact',
            'label' => Page::get('infoLabel')
        ])
    </main>
@endsection
