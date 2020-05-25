@extends('layout')
@section('title', 'Placement')
@section('main')
    @include('booking.heroBooking', [
        'back' => route('booking', ['event' => $event->slug]),
    ])

    <main class="main">
        <section class="bSeats bookingSeats">
            <div class="bSeats__container wrapper">
                <h2 class="bSeats__title">Choisissez vos places ({{ Session::get('sum') }})</h2>
                <div class="bSeats__content">

                    <div class="alert alert__taken">
                        <div class="alert__content">
                            <a class="alert__close alert__close--taken" href="#">Fermer</a>
                            <p class="alert__text">Oups&nbsp;!! Ce siège est déjà réservé&nbsp;! Choisissez-en un autre</p>
                        </div>
                    </div>

                    <div class="alert alert__total">
                        <div class="alert__content">
                            <a class="alert__close alert__close--total" href="#">Fermer</a>
                            <p class="alert__text">Vous avez sélectionner {{ Session::get('sum') }} place(s). Si vous souhaitez en ajouter ou en retirer, retourner <a class="alert__link" href="{{ route('booking', ['event' => $event->slug]) }}">au choix du nombre de places</a>.</p>
                        </div>
                    </div>

                    <form action="{{ route('chooseSeats', ['event' => $event->slug]) }}" method="post">
                        @csrf
                        <div class="bSeats__svg" data-max="{{ Session::get('sum') }}">
                            @include('svg.seating')
                        </div>
                        <div class="bSeats__check">
                            @foreach($event->seats as $key => $value)
                                <label for="{{ $key }}">{{ $key }}</label>
                                <input class="seat__checkbox" type="checkbox" {{ $value == '1' ? 'checked disabled ' : '' }} name="seats[{{$key}}]" id="{{ $key }}" value="1" @if(array_key_exists($key, Session::get('seat'))) checked @endif>
                            @endforeach
                        </div>

                        <div class="bSeats__btn">
                            <a class="btn btn--booking btn--back" href="{{ route('booking', ['event' => $event->slug]) }}">Retour</a>
                            <button class="btn btn--booking btn--next bSeats__next" type="submit">Suivant</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
