<footer class="footer">
    <div class="footer__top wrapper">
        <div class="footer__newsletter">
            @if(session('success'))
                <p class="footer__success">Merci pour votre inscription!</p>
            @else
            <h2 class="footer__title">Newsletter</h2>
            <form class="form footer__form" action="{{ route('newsletter') }}" method="POST">
                @csrf
                <div class="form__control form__control--white">
                    <label class="form__label form__label--white" for="nl_email">Email</label>
                    <input type="search" name="email" class="form__input form__input--white form__input--small">
                    <button class="btn btn--arrow btn--white"><span class="sro">Envoyer</span></button>
                    @error('email')
                        <p class="form__error form__error--white">{{ $message }}</p>
                    @enderror
                </div>
            </form>
            @endif
        </div>

        <div class="footer__content">
            <h2 class="footer__title">Réservation</h2>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link" href="{{ route('agenda', ['season' => $latestSeason]) }}">Agenda</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('subscription') }}">Abonnements</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('resto') }}">Offre resto</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">À Propos</h2>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link" href="{{ route('post') }}">Actualités</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('about') }}">La salle</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('media') }}">Presse</a></li>
                <li class="footer__item"><a class="footer__link" href="{{route('renting') }}">Location</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">Contact</h2>
            <ul class="footer__list">
                <li class="footer__item"><a target="_blank" class="footer__link" href="https://maps.google.com/?ll={{ Page::get('lat') }},{{ Page::get('lng') }}">{{ Page::option('contact')->address }}</a></li>
                <li class="footer__item"><a class="footer__link" href="mailto:{{ Page::option('contact')->email }}">{{ Page::option('contact')->email }}</a></li>
                <li class="footer__item"><a class="footer__link" href="tel:{{ phone(Page::option('contact')->phone) }}">{{ Page::option('contact')->phone }}</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">Social</h2>
            <ul class="footer__list">
                @if(Page::option('social')->facebook)
                <li class="footer__item"><a target="_blank" class="footer__link" href="{{ Page::option('social')->facebook }}">Facebook</a></li>
                @endif
                @if(Page::option('social')->insta)
                <li class="footer__item"><a target="_blank" class="footer__link" href="{{ Page::option('social')->insta }}">Instagram</a></li>
                @endif
            </ul>
        </div>
    </div>
    <div class="footer__bottom wrapper">
        <a class="footer__legal" href="{{ route('legal') }}">Conditions générales de vente</a>
        <a class="footer__legal" href="{{ route('rgpd') }}">Politique de confidentialité</a>
    </div>
</footer>