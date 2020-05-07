@extends('layout')
@section('title', 'Accueil')
@section('main')
    @include('partials.heroHome')
    @include('partials.featuredEvents')
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
        'title' => 'Les Tréteaux',
        'text' => 'Ancienne salle de gymnastique de l’Athénée de Visé, la salle de spectacle Les Tréteaux a accueilli pendant près de 30 ans un grand nombre de manifestations dans une salle vétuste, à peine aménagée pour le milieu du spectacle.',
        'url' => 'about',
        'label' => 'Plus d’info',
    ])
@endsection
