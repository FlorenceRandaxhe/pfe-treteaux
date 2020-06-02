@extends('layout')
@section('title', 'Confirmation')
@section('main')
    <header class="header">
        <h1 class="sro">Confirmation de votre commande - les Tréteaux</h1>
        @include('parts.header')
    </header>
    <main class="main" id="main">
        <section class="bConfirm">
            <div class="bConfirm__container wrapper">
                <h2 class="bConfirm__title">Votre réservation est complète</h2>
                <div class="bConfirm__content">
                    <p class="bConfirm__text bConfirm__text--bold">Vous allez recevoir un email de confirmation avec vos ticket</p>
                    <p class="bConfirm__text">La présentation de l’E-ticket devra se faire à l’entrée sous la forme d’une impression de qualité suffisante ou via smartphone sous réserve d’un écran en bon état</p>
                <a class="btn btn--primary" href="{{ route('home') }}">Retour à l'acceuil</a>
                </div>
            </div>
        </section>
    </main>
@endsection
