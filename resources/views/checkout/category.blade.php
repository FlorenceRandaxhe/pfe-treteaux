@extends('layout')
@section('title', 'Réservation')
@section('main')
    @include('checkout.partials.heroBooking', [
        'back' => route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]),
    ])

    <main class="main" id="main">
        <section class="bCat">
            <div class="bCat__container wrapper">
                <div class="bCat__heading">
                    <h2 class="bCat__title">Choisissez le nombre de places et leur catégorie</h2>
                    @if($seatsLeft < 15)
                        <p class="bCat__text"><em class="bCat__bold">Attention&nbsp;!</em> Il ne reste plus que <em class="bCat__bold">{{ $seatsLeft }} place(s)</em> pour ce spectacle</p>
                    @endif
                </div>

                <x-alert>
                    Veuillez sélectionner au moins une place
                </x-alert>

                <div class="bCat__content">
                    <form class="form" action="{{ route('category', ['event' => $event->slug]) }}" method="post">
                        @csrf
                        <div class="bCat__head">
                            <p>Tarif</p>
                            <p>Place(s)</p>
                        </div>
                        @foreach($event->prices as $key => $value)
                        @if($value)
                            <div class="bCat__control">
                                <div class="bCat__label">
                                    <label for="{{ Str::snake($key) }}">{{ $key }}</label>
                                     @if($key === 'enfant')
                                        <x-tooltip>
                                            Moins de 18 ans
                                        </x-tooltip>
                                    @elseif($key === 'senior')
                                        <x-tooltip>
                                            Plus de 60 ans, votre carte d'identité pourra vous être demandée à l'entrée de la salle
                                        </x-tooltip>
                                    @elseif($key === 'etudiant')
                                        <x-tooltip>
                                            Votre carte d'étudiant pourra vous être demandée à l'entrée de la salle
                                        </x-tooltip>
                                    @endif
                                </div>
                                <p class="bCat__bold">{{ $value }}€</p>
                                <div class="form__select_wrapper">
                                    <select class="bCat__select form__select" name="{{ Str::snake($key) }}" id="{{ Str::snake($key) }}">
                                        <option value="0"> - </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                        @endif
                        @endforeach

                        <div class="bCat__btn">
                            <a class="btn btn--booking btn--back" href="{{ route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]) }}">Retour</a>
                            <button class="btn btn--booking btn--next" type="submit">Suivant</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
