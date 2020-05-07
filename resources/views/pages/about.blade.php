@extends('layout')
@section('title', 'La salle')
@section('main')
    @include('partials.heroAbout')
    @include('partials.newsletter', [
        'color' => 'blue'
    ])
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
