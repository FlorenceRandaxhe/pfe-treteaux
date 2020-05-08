@extends('layout')
@section('title', 'Presse et média')
@section('main')
    @include('partials.hero', [
        'class' => 'left',
        'color' => 'blue',
        'title' => 'Presse & média',
        'text' => 'Vous trouverez ici toutes les infos relatives à la salle des Tréteaux.
                    Pour toute question concernant la salle et/ou la programmation, vous pouvez nous contacter au +32(0)4 374 85 50 ou par mail via notre formulaire de contact ou à l’adresse suivante : culture@vise.be',
        'img' => 'press.jpg',
        'alt' => 'press',
        'url' => '#',
        'icon' => 'download',
        'label' => 'Télécharger le programme 2029-2020'
    ])
    @include('partials.allPress')
    @include('partials.newsletter', [
        'color' => 'blue'
    ])
    @include('partials.latestNews', [
        'class' => '',
    ])
@endsection
