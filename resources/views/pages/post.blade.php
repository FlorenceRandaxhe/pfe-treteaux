@extends('layout')
@section('title', 'Actualités')
@section('main')
    @include('partials.heroBasic', [
        'color' => 'green',
        'title' => 'Actualités',
        'intro' => 'Retrouver toutes les actualités de la salle des tréteaux, des spectacles et des artistes.',
        'type' => '',
        'img' => '',
        'alt' => ''
    ])
    @include('partials.allPosts')
    @include('partials.newsletter', [
        'color' => 'green'
    ])
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
