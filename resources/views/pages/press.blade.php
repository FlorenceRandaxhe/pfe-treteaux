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
        'file' => true,
        'url' => Page::get('file'),
        'icon' => 'download',
        'label' => Page::get('label')
    ])
    <main class="main">
        @include('partials.allPress')
        @include('partials.newsletter', [
            'color' => 'blue'
        ])
        @include('partials.latestNews', [
            'class' => '',
        ])
    </main>
@endsection
