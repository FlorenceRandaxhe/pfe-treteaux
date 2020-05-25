@extends('layout')
@section('title', 'Payement')
@section('main')
    @include('booking.heroBooking', [
        'back' => route('seating', ['event' => $event->slug]),
    ])

    <main class="main">
        <section class="bPay">
            <div class="wrapper">
                <div class="bPay__heading">
                    <h2 class="bPay__title">Payement</h2>
                </div>

                <div class="bPay__content">
                    <p class="bPay__subtitle">Votre panier</p>
                    @foreach(Session::get('category') as $key => $value)
                        @if($value != 0)
                        <div class="bPay__control">
                            <p class="bPay__label">{{ Str::ucfirst($key) }} (x{{ $value }})</p>
                            <p>{{ $event->prices[$key] * $value }}€</p>
                        </div>
                        @endif
                    @endforeach
                    <div class="bPay__total">
                        <p class="bPay__sum">Total&nbsp;: {{ Session::get('total') }}€</p>
                    </div>
                </div>

                <div class="bPay__btn">
                    <a class="btn btn--booking btn--back" href="{{ route('cart', ['event' => $event->slug ]) }}">Retour</a>
                    <a class="btn btn--booking btn--next" href="{{ route('payment', ['event' => $event->slug ]) }}">Suivant</a>
                </div>
            </div>
        </section>
    </main>
@endsection
