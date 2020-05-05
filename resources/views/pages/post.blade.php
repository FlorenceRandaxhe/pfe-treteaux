@extends('layout')
@section('title', 'Actualités')
@section('main')
    @include('partials.allPosts')
    @include('partials.newsletter', [
        'color' => 'green'
    ])
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
