@extends('layout')
@section('title', 'Accueil')
@section('main')
    @include('partials.latestEvents', [
        'class' => 'home',
    ])
    @include('partials.latestNews', [
        'class' => 'home',
    ])
@endsection
