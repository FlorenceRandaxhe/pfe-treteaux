@extends('layout')
@section('title', 'Accueil')
@section('main')
    @include('partials.latestEvents', [
        'class' => 'home',
    ])
    @include('partials.newsletter', [
        'color' => 'blue'
    ])
    @include('partials.latestNews', [
        'class' => 'home',
    ])
@endsection
