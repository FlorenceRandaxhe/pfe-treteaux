@extends('layout')
@section('title', 'Accueil')
@section('main')
    @include('partials.latestEvents', [
        'class' => 'home',
    ])
@endsection
