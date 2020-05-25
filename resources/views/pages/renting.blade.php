@extends('layout')
@section('title', Page::title())
@section('main')
    @include('partials.hero', [
        'class' => 'left',
        'color' => 'blue',
        'type' => '',
        'title' => Page::title(),
        'text' => Page::get('heroIntro'),
        'img' => Page::get('image'),
        'isEvent' => false,
        'btnType' => 'primary',
        'alt' => Page::get('heroAlt'),
        'file' => false,
        'url' => '#form',
        'icon' => '',
        'label' => 'Réserver les Tréteaux'
    ])
    <main class="main">
        @include('partials.renting')
        @include('partials.latestNews', [
            'class' => '',
        ])
    </main>
@endsection
