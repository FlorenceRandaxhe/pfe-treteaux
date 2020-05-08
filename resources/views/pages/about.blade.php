@extends('layout')
@section('title', 'La salle')
@section('main')
    @include('partials.heroAbout', [
        'alt' => 'Facade des Tréteaux'
    ])
    @include('partials.aboutSections')
    @include('partials.newsletter', [
        'color' => 'blue'
    ])
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
