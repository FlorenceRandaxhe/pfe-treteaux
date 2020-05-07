<footer class="footer">
    <div class="footer__top wrapper">
        <div class="footer__newsletter" id="newsletter">
            <h2 class="footer__title">Newsletter</h2>
            <form class="form footer__form" action="{{ route('newsletter') }}" method="POST">
                @csrf
                <div class="form__control form__control--white">
                    <label class="form__label form__label--white" for="nl_email">Email</label>
                    <input type="search" name="nl_email" id="nl_email" class="form__input form__input--white form__input--small">
                    <button class="btn btn--arrow btn--white"><span class="sro">Envoyer</span></button>
                    @error('nl_email')
                        <p class="form__error form__error--white">{{ $message }}</p>
                    @enderror
                </div>
            </form>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">Réservation</h2>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link" href="/agenda/{{$latestSeason->year}}">Agenda</a></li>
                <li class="footer__item"><a class="footer__link" href="#">Abonnements</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('resto') }}">Offre resto</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">À Propos</h2>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link" href="{{ route('news') }}">Actualités</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('about') }}">La salle</a></li>
                <li class="footer__item"><a class="footer__link" href="{{ route('media') }}">Presse</a></li>
                <li class="footer__item"><a class="footer__link" href="{{route('renting') }}">Location</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">Contact</h2>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link" href="#">Rue du Collège 31 4600 Visé</a></li>
                <li class="footer__item"><a class="footer__link" href="#">culture@vise.be</a></li>
                <li class="footer__item"><a class="footer__link" href="#">+32(0)4 374 85 50</a></li>
            </ul>
        </div>

        <div class="footer__content">
            <h2 class="footer__title">Social</h2>
            <ul class="footer__list">
                <li class="footer__item"><a class="footer__link" href="#">Facebook</a></li>
                <li class="footer__item"><a class="footer__link" href="#">Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="footer__bottom wrapper">
        <a class="footer__legal" href="">Conditions générales de vente</a>
        <a class="footer__legal" href="">Politique de confidentialité</a>
    </div>
</footer>