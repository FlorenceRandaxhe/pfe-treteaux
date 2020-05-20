@extends('layout')
@section('title', Page::title())
@section('main')
    @include('partials.heroAbout', [
        'title' => Page::title(),
        'img' => Page::get('heroBanner'),
        'alt' => Page::title()
    ])
    <main class="main">
        @include('partials.aboutSections')
        @include('partials.newsletter', [
            'color' => 'blue'
        ])
        @include('partials.latestEvents', [
            'class' => 'footer',
        ])
    </main>

@endsection
