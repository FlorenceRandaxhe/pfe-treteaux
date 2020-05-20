@extends('layout')
@section('title', Page::title())
@section('main')
    @include('partials.heroEvents', [
        'title' => Page::title()
    ])
    <main class="main">
        @include('partials.allEvents')
        @include('partials.latestNews', [
            'class' => '',
        ])
    </main>
@endsection
