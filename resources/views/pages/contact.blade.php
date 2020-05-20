@extends('layout')
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
        @include('partials.latestEvents', [
            'class' => 'footer',
        ])
    </main>
@endsection
