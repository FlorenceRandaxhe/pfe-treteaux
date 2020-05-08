@extends('layout')
@section('title', 'Location des Tréteaux')
@section('main')
    @include('partials.hero', [
        'class' => 'left',
        'color' => 'blue',
        'title' => 'Location des Tréteaux',
        'text' => 'Envie d\'organiser une activité chez nous ? Il est possible de louer notre salle. Pour toute information, prenez contact avec nous via le formulaire ci-dessous.',
        'img' => 'foyer.jpg',
        'alt' => 'renting',
        'url' => '#form',
        'icon' => '',
        'label' => 'Réserver les Tréteaux'
    ])
    @include('partials.renting')
    @include('partials.latestNews', [
        'class' => '',
    ])
@endsection
