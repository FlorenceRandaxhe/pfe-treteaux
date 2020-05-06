<section class="newsletter newsletter--{{$color}}">
    <div class="newsletter__container wrapper">
        <div class="newsletter__content">
            <h2 class="newsletter__title">Restez-en contact</h2>
            <p class="newsletter__text">
                Une fois par mois, découvrez nos nouveaux spectacles, actualité, concours en vous abonnant à notre newsletter
            </p>
        </div>
        <form class="newsletter__form form" method="POST" action="#">
            <div class="form__control @error('name') form__control--error @enderror">
                <label class="form__label" for="nl_email">Email</label>
                <input type="search" name="nl_email" id="nl_email" class="form__input" placeholder="Votre email">
                <button class="btn btn--arrow"><span class="sro">Envoyer</span></button>
                @error('email')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
        </form>
    </div>
</section>