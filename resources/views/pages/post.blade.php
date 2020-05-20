@extends('layout')
@section('title', Page::title())
@section('main')
    @include('partials.heroBasic', [
        'color' => 'green',
        'title' => Page::title(),
        'intro' => Page::get('heroIntro'),
        'type' => '',
        'img' => '',
        'alt' => ''
    ])
    <main class="main">
        @include('partials.allPosts')
        @include('partials.newsletter', [
            'color' => 'green'
        ])
        @include('partials.latestEvents', [
            'class' => 'footer',
        ])
    </main>
@endsection
