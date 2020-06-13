@extends('layout')
@section('title', 'Vos infos')
@section('main')
    @include('checkout.partials.heroBooking', [
        'step' => 'Vos informations',
        'back' => route('cart', ['event' => $event->slug]),
    ])

    <main class="main">
        <section class="bInfo">
            <div class="wrapper">
                <div class="bInfo__heading">
                    <h2 class="bInfo__title">Vos informations</h2>
                </div>
                <form class="form" method="post" action="{{ route('validateInfo', ['event' => $event->slug]) }}">
                    @csrf
                    {!! Honeypot::generate('my_name', 'my_time') !!}
                    <div class="bInfo__container">
                         @include('checkout.partials.cartSmall')

                        <div class="form__chekoutContent">
                            <div class="form__checkoutControl">
                                <label class="form__label" for="email">Email</label>
                                <input class="form__checkoutInput @error('email') form__checkoutInput--error @enderror" placeholder="Email" type="email" name="email" id="email" value="@if(Session::get('client')['email']) {{ Session::get('client')['email'] }} @else {{old('email')}} @endif">
                                <p>Cette adresse sera utilisée pour vous envoyer vos tickets</p>

                                @error('email')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form__checkoutControl form__checkoutControl--small">
                                <label class="form__label" for="firstName">Prénom</label>
                                <input class="form__checkoutInput @error('firstName') form__checkoutInput--error @enderror" placeholder="Prénom" type="text" name="firstName" id="firstName" value="{{Session::get('client')['firstName'] ? Session::get('client')['firstName'] : old('firstName')}}">
                                @error('firstName')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form__checkoutControl form__checkoutControl--small">
                                <label class="form__label" for="lastName">Nom</label>
                                <input class="form__checkoutInput @error('lastName') form__checkoutInput--error @enderror" placeholder="Nom" type="text" name="lastName" id="lastName" value="{{Session::get('client')['lastName'] ? Session::get('client')['lastName'] : old('lastName')}}">
                                @error('lastName')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form__checkoutControl">
                                <label class="form__label" for="phone">Téléphone</label>
                                <input class="form__checkoutInput @error('phone') form__checkoutInput--error @enderror" placeholder="Téléphone" type="tel" name="phone" id="phone" value="{{Session::get('client')['phone'] ? Session::get('client')['phone'] : old('phone')}}">
                                @error('phone')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form__checkoutControl">
                                <label class="form__label" for="address">Adresse</label>
                                <input class="form__checkoutInput @error('address') form__checkoutInput--error @enderror" placeholder="Adresse" type="text" name="address" id="address" value="{{Session::get('client')['address'] ? Session::get('client')['address'] : old('address')}}">
                                @error('address')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form__checkoutControl form__checkoutControl--small">
                                <label class="form__label" for="town">Ville</label>
                                <input class="form__checkoutInput @error('town') form__checkoutInput--error @enderror" placeholder="Ville" type="text" name="town" id="town" value="{{Session::get('client')['town'] ? Session::get('client')['town'] : old('town')}}">
                                @error('town')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form__checkoutControl form__checkoutControl--small">
                                <label class="form__label" for="cp">Code postal</label>
                                <input class="form__checkoutInput @error('cp') form__checkoutInput--error @enderror" placeholder="Code postal" type="text" name="cp" id="cp" value="{{Session::get('client')['cp'] ? Session::get('client')['cp'] : old('cp')}}">
                                @error('cp')
                                    <p class="form__checkoutError">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="bInfo__btn">
                        <a class="btn btn--booking btn--back" href="{{ route('cart', ['event' => $event->slug ]) }}">Retour</a>
                        <button type="submit" class="btn btn--booking btn--next">Suivant</a>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection