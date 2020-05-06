@extends('layout')
@section('title', 'Location des Tréteaux')
@section('main')
    @include('partials.renting')
    @include('partials.latestNews', [
        'class' => '',
    ])
@endsection
