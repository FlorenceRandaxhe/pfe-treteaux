@extends('layout')
@section('title', 'Placement')
@section('main')
    @include('checkout.partials.heroBooking', [
        'back' => route('booking', ['event' => $event->slug]),
    ])

    <main class="main">
        <section class="bSeats">
            <div class="bSeats__container wrapper">
                <h2 class="bSeats__title">Choisissez vos places ({{ Session::get('sum') }})</h2>

                <x-alert type="taken">
                    Oups&nbsp;!! Ce siège est déjà réservé&nbsp;! Choisissez-en un autre.
                </x-alert>

                <x-alert type="total">
                    Vous avez sélectionner {{ Session::get('sum') }} place(s). Si vous souhaitez en ajouter ou en retirer, retourner <a class="alert__link" href="{{ route('booking', ['event' => $event->slug]) }}">au choix du nombre de places</a>.
                </x-alert>

                <form action="{{ route('chooseSeats', ['event' => $event->slug]) }}" method="post">
                    @csrf
                    <div class="bSeats__content">

                        @include('svg.seating')

                        <div class="bSeats__legend">
                            <ul class="bSeats__list">
                                <li class="bSeats__item">
                                    <span class="bSeats__status bSeats__status--occupied">Occupé</span></li>
                                <li class="bSeats__item">
                                    <span class="bSeats__status bSeats__status--available">Libre</span></li>
                                <li class="bSeats__item">
                                    <span class="bSeats__status bSeats__status--selected">Sélection</span>
                                </li>
                            </ul>

                        </div>
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
        </section>
    </main>
@endsection
