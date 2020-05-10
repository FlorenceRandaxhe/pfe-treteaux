@extends('layout')
@section('title', 'Contact')
@section('main')
    @include('partials.heroBasic', [
        'color' => 'grey',
        'title' => 'Abonnements',
        'intro' => 'Choisissez une de nos formules abonnements, et réservez plusieurs spectacles sur la saison',
        'img' => '',
        'type' => ''
    ])
    <!-- @include('partials.subscriptionSection') -->
    @include('partials.latestEvents', [
        'class' => 'footer',
    ])
@endsection
