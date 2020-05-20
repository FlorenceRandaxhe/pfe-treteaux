@extends('layout')
@section('title', Page::title())
@section('main')
    @include('partials.heroHome')
    <main class="main">
        @include('partials.featuredEvents')
        @include('partials.infoSection')
        @include('partials.latestEvents', [
            'class' => 'home',
        ])
        @include('partials.newsletter', [
            'color' => 'blue'
        ])
        @include('partials.latestNews', [
            'class' => 'home',
        ])
        @include('partials.info', [
            'class' => 'home',
            'title' => Page::get('infoTitle'),
            'text' => Page::get('infoContent'),
            'url' => 'about',
            'label' => Page::get('infoLabel'),
        ])
    </main>
@endsection
