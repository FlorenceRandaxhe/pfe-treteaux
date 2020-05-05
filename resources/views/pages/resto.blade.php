@extends('layout')
@section('title', 'Offre resto')
@section('main')
    @include('partials.allRestos')
    @include('partials.info', [
        'class' => '',
        'title' => 'Intéressé par nos formules de repas-spectacle',
        'text' => 'Vous possédez un restaurant à Visé ? Si vous êtes intéressé par nos formules de repas-spectacle n’hésiter pas à nous contacter',
        'url' => '#',
        'label' => 'Nous contacter'
    ])
@endsection
