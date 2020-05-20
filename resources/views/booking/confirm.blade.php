@extends('layout')
@section('title', 'Votre panier')
@section('main')
    @include('booking.heroBooking', [
        'back' => route('seating', ['event' => $event->slug]),
    ])

    <main class="main">
        <section class="booking">
            <div class="wrapper">
                <h2 class="booking__title">Votre panier</h2>
                <div class="booking__content">
                    @foreach(Session::get('category') as $key => $value)
                        @if($value != 0)
                        <div class="booking__control">
                            <p>{{ Str::ucfirst($key) }} (x{{ $value }})</p>
                            <p>{{ $event->prices[$key] * $value }}€</p>
                        </div>
                        @endif
                    @endforeach
                    <div class="booking__total">
                        <p class="booking__sum">Total&nbsp;: {{ $sum }}€</p>
                    </div>
                    <div>
                        @foreach(Session::get('seat') as $key => $value)
                            {{$key}}
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
