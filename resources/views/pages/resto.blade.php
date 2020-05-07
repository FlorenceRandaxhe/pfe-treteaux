@extends('layout')
@section('title', 'Offre resto')
@section('main')
    @include('partials.hero', [
        'class' => 'left',
        'color' => 'blue',
        'title' => 'Profitez d\'un  repas avant votre spectacle',
        'text' => 'Profitez d\'un succulent repas dans les restaurants du centre de Visé, à deux pas de la salle de spectacle, avant de venir apprécier l\'un de nos spectacles à prix réduit.',
        'img' => 'img.jpg',
        'url' => '',
        'icon' => '',
        'label' => ''
    ])
    @include('partials.allRestos')
    @include('partials.info', [
        'class' => '',
        'title' => 'Intéressé par nos formules de repas-spectacle',
        'text' => 'Vous possédez un restaurant à Visé ? Si vous êtes intéressé par nos formules de repas-spectacle n’hésiter pas à nous contacter',
        'url' => '#',
        'label' => 'Nous contacter'
    ])
@endsection
