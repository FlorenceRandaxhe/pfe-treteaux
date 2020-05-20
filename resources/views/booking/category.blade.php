@extends('layout')
@section('title', 'Réservation')
@section('main')
    @include('booking.heroBooking', [
        'back' => route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]),
    ])
    <main class="main" id="main">
        <section class="booking">
            <div class="booking__container wrapper">
                <h2 class="booking__title">Choisissez le nombre de places et leur catégorie</h2>
                @if(session('status'))
                    <div class="alert alert__error">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="booking__content">
                    <form class="booking__form" action="{{ route('category', ['event' => $event->slug]) }}" method="post">
                        @csrf
                        <div class="booking__heading">
                            <p>Tarif</p>
                            <p>Place(s)</p>
                        </div>
                        @foreach($event->prices as $key => $value)
                        @if($value)
                            <div class="booking__control">
                                <div class="booking__label">
                                    <label for="{{ Str::snake($key) }}">{{ $key }}</label>
                                     @if($key === 'enfant')
                                        @include('parts.tooltip', ['text' => 'Moins de 18 ans'])
                                    @elseif($key === 'senior')
                                        @include('parts.tooltip', ['text' => 'Plus de 65 ans, votre carte d\'identité pourra vous être demandée à l\'entrée de la salle'])
                                    @elseif($key === 'etudiant')
                                        @include('parts.tooltip', ['text' => 'Votre carte d\'étudiant pourra vous être demandée à l\'entrée de la salle'])
                                    @endif
                                </div>
                                <p class="booking__price">{{ $value }}€</p>
                                <div class="form__select_wrapper">
                                    <select class="booking__select form__select" name="{{ Str::snake($key) }}" id="{{ Str::snake($key) }}">
                                        <option value=""> - </option>
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

                        <div class="booking__btn">
                            <a class="btn btn--booking btn--back" href="{{ route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]) }}">Retour</a>
                            <button class="btn btn--booking btn--next" type="submit">Suivant</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
