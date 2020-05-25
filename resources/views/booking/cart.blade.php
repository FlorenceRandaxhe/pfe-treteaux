@extends('layout')
@section('title', 'Votre panier')
@section('main')
    @if($event->seating === 1)
    @include('booking.heroBooking', [
        'back' => route('seating', ['event' => $event->slug]),
    ])
    @else
    @include('booking.heroBooking', [
        'back' => route('booking', ['event' => $event->slug]),
    ])
    @endif

    <main class="main">
        <section class="bCart">
            <div class="wrapper">
                <div class="bCart__heading">
                    <h2 class="bCart__title">Votre panier</h2>
                </div>
                <div class="bCart__content">
                    <div class="bCart__control">
                        <p class="bCart__sum">{{ Session::get('sum') }} places(s) @if($event->seating === 0) - Placement libre @endif</p>
                        <form class="bCart__form" method="post" action="{{ route('emptyCart', ['event' => $event->slug]) }}">
                        @csrf
                        <button class="btn bCart__empty">Vider mon panier</button>
                    </form>
                    </div>
                    @foreach(Session::get('category') as $key => $value)
                        @if($value != 0)
                        <div class="bCart__control">
                            <p class="bCart__label">{{ Str::ucfirst($key) }} (x{{ $value }})</p>
                            <p>{{ $event->prices[$key] * $value }}€</p>
                        </div>
                        @endif
                    @endforeach
                    <p class="bCart__total">Total&nbsp;: {{ Session::get('total') }}€</p>
                </div>

                <div class="bCart__btn">
                    @if($event->seating == 1)
                    <a class="btn btn--booking btn--back" href="{{ route('seating', ['event' => $event->slug]) }}">Retour</a>
                    @else
                    <a class="btn btn--booking btn--back" href="{{ route('booking', ['event' => $event->slug]) }}">Retour</a>
                    @endif
                    <a class="btn btn--booking btn--next" href="{{ route('payment', ['event' => $event->slug]) }}">Suivant</a>
                </div>
            </div>
        </section>
    </main>
@endsection
