<footer class="footer">
    <div class="footer__top wrapper">
        <div class="footer__newsletter">
            @if(session('success'))
                <p class="footer__success">Merci pour votre inscription!</p>
            @endif
            <h2 class="footer__title">Newsletter</h2>
            <form class="form footer__form" action="{{ route('newsletterFooter') }}" method="POST">
                @csrf
                {!! Honeypot::generate('my_name', 'my_time') !!}
                <div class="form__control form__control--white">
                    <label class="form__label form__label--white" for="nlf_email">Email</label>
                    <input type="email" id="nlf_email" name="nlf_email" class="form__input form__input--white form__input--small">
                    <button type="submit" class="btn btn--arrow btn--white"><span class="sro">Envoyer</span></button>
                    @error('nlf_email')
                        <p class="form__error form__error--white">{{ $message }}</p>
                    @enderror
                </div>
            </form>

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
            <ul class="footer__list" itemscope itemtype="https://schema.org/Place">
                <li class="footer__item" itemprop="address"><a target="_blank" class="footer__link" href="https://maps.google.com/?ll={{ Page::option('contact')->lat }},{{ Page::option('contact')->lng }}">{{ Page::option('contact')->address }}</a></li>
                <li class="footer__item" itemprop="email"><a class="footer__link" href="mailto:{{ Page::option('contact')->email }}">{{ Page::option('contact')->email }}</a></li>
                <li class="footer__item" itemprop="telephone"><a class="footer__link" href="tel:{{ phone(Page::option('contact')->phone) }}">{{ Page::option('contact')->phone }}</a></li>
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
        <div class="footer__legals">
            <a class="footer__legal" href="{{ route('legal') }}">Conditions générales de vente</a>
            <a class="footer__legal" href="{{ route('rgpd') }}">Politique de confidentialité</a>
        </div>
       <div class="footer__credit">
            <a target="_blank" href="https://florence-randaxhe.com/">
                <span class="sro">Design et développement par Florence Randaxhe</span>
                <svg class="footer__logo" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 125 190" width="15" height="22">
                    <g><g><path d="M44,113.9c0,10,0,24.73,0,34.78L7,185.66V113.9H44L78.82,77.81H7V41.33L44,6h70.35L79.46,41.07H44c0,17.36,0,19.38,0,36.74Z"/></g></g>
                </svg>
            </a>
       </div>
    </div>
</footer>