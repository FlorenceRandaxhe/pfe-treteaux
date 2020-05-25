<section class="wrapper newsletter newsletter--{{$color}}" id="newsletter">
    <div class="newsletter__container">
        <div class="newsletter__content">
            <h2 class="newsletter__title">Restez-en contact</h2>
            <p class="newsletter__text">
                Une fois par mois, découvrez nos nouveaux spectacles, actualité, concours en vous abonnant à notre newsletter
            </p>
        </div>
        @if(session('success'))
                <p class="newsletter__success">Merci pour votre inscription!</p>
        @else
        <form class="newsletter__form form" method="POST" action="{{ route('newsletter') }}">
            @csrf
            {!! Honeypot::generate('my_name', 'my_time') !!}
            <div class="form__control @error('nl_email')form__control--error @enderror">
                <label class="form__label" for="nl_email">Email</label>
                <input type="email" name="nl_email" id="nl_email" class="form__input" placeholder="Votre email">
                <button type="submit" class="btn btn--arrow"><span class="sro">Envoyer</span></button>
                @error('nl_email')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
        </form>
        @endif
    </div>
</section>