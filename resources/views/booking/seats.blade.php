@extends('layout')
@section('title', 'Placement')
@section('main')
    @include('booking.heroBooking', [
        'back' => route('booking', ['event' => $event->slug]),
    ])

    <main class="main">
        <section class="booking bookingSeats">
            <div class="booking__container wrapper">
                <h2 class="booking__title">Choisissez vos places ({{ $sum }})</h2>
                <div class="booking__content">

                    <div class="alert alert__takenSeat">
                        <div class="alert__content">
                            <a class="alert__close alert__close--taken" href="#">Fermer</a>
                            <p class="alert__text">Oups&nbsp;!! Ce siège est déjà réservé&nbsp;! Choisissez-en un autre</p>
                        </div>
                    </div>

                    <div class="alert alert__totalSeat">
                        <div class="alert__content">
                            <a class="alert__close alert__close--total" href="#">Fermer</a>
                            <p class="alert__text">Vous avez sélectionner {{ $sum }} place. Si vous souhaitez en ajouter, retourner sur la page précédente et sélectionner plus de place</p>
                            <a class="" href="{{ route('booking', ['event' => $event->slug]) }}">Ajouter des places</a>
                        </div>
                    </div>


                    <div class="alert alert__amountSeat">
                        <div class="alert__content">
                            <a class="alert__close alert__close--amount" href="#">Fermer</a>
                            <p class="alert__text">Vous devez sélectionner {{ $sum }} place. Si vous souhaitez en retirer, retourner sur la page précédente et sélectionner moins de place</p>
                            <a class="" href="{{ route('booking', ['event' => $event->slug]) }}">Retirer des places</a>
                        </div>
                    </div>

                    <div class="booking__plan">
                        <div class="booking__svg" data-max="{{ $sum }}">
                            @include('svg.seating')
                        </div>
                        <!-- <div class="booking__info">
                            <h3 class="booking__subtitle">Sièges sélectionnés</h3>
                            <ul class="booking__list">

                            </ul>
                        </div> -->
                    </div>
                    <form action="{{ route('chooseSeats', ['event' => $event->slug]) }}" method="post">
                        @csrf
                        <div class="booking__check">

                        @foreach($event->seats as $key => $value)
                            <label for="{{ $key }}">{{ $key }}</label>
                            <input class="seat__checkbox" type="checkbox" {{ $value == '1' ? 'checked disabled ' : '' }} name="seats[{{$key}}]" id="{{ $key }}" value="1" @if(array_key_exists($key, Session::get('seat'))) checked @endif>
                        @endforeach
                        </div>
                        <div class="booking__btn">
                            <a class="btn btn--booking btn--back" href="{{ route('booking', ['event' => $event->slug]) }}">Retour</a>
                            <button class="btn btn--booking btn--next booking__next" type="submit">Suivant</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
