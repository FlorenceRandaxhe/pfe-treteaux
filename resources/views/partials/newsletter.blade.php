<section class="newsletter newsletter--{{$color}}" id="newsletter">
    <div class="newsletter__container wrapper">
        <div class="newsletter__content">
            <h2 class="newsletter__title">Restez-en contact</h2>
            <p class="newsletter__text">
                Une fois par mois, découvrez nos nouveaux spectacles, actualité, concours en vous abonnant à notre newsletter
            </p>
        </div>
        <form class="newsletter__form form" method="POST" action="{{ route('newsletter') }}">
            @csrf
            <div class="form__control @error('email') form__control--error @enderror">
                <label class="form__label" for="email">Email</label>
                <input type="email" name="email" id="email" class="form__input" placeholder="Votre email">
                <button type="submit" class="btn btn--arrow"><span class="sro">Envoyer</span></button>
                @error('email')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
        </form>
    </div>
</section>