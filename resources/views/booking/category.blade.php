@extends('layout')
@section('title', 'Réservation')
@section('main')
    @include('booking.heroBooking', [
        'back' => route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]),
    ])
    <main class="main" id="main">
        <section class="bCat">
            <div class="bCat__container wrapper">
                <div class="bCat__head">
                    <h2 class="bCat__title">Choisissez le nombre de places et leur catégorie</h2>
                    @if($seatsLeft < 402)
                        <p class="bCat__text"><em class="bCat__bold">Attention&nbsp;!</em> Il ne reste plus que <em class="bCat__bold">{{ $seatsLeft }} place(s)</em> pour ce spectacle</p>
                    @endif
                </div>

                @if(session('status'))
                    <div class="alert alert__error">
                        {{ session('status') }}
                    </div>
                @endif


                <div class="bCat__content">
                    <form class="bCat__form" action="{{ route('category', ['event' => $event->slug]) }}" method="post">
                        @csrf
                        <div class="bCat__heading">
                            <p>Tarif</p>
                            <p>Place(s)</p>
                        </div>
                        @foreach($event->prices as $key => $value)
                        @if($value)
                            <div class="bCat__control">
                                <div class="bCat__label">
                                    <label for="{{ Str::snake($key) }}">{{ $key }}</label>
                                     @if($key === 'enfant')
                                        @include('parts.tooltip', ['text' => 'Moins de 18 ans'])
                                    @elseif($key === 'senior')
                                        @include('parts.tooltip', ['text' => 'Plus de 65 ans, votre carte d\'identité pourra vous être demandée à l\'entrée de la salle'])
                                    @elseif($key === 'etudiant')
                                        @include('parts.tooltip', ['text' => 'Votre carte d\'étudiant pourra vous être demandée à l\'entrée de la salle'])
                                    @endif
                                </div>
                                <p class="bCat__price">{{ $value }}€</p>
                                <div class="form__select_wrapper">
                                    <select class="bCat__select form__select" name="{{ Str::snake($key) }}" id="{{ Str::snake($key) }}">
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
