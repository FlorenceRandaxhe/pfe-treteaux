<nav class="nav">
    <h2 class="sro">Navigation principale</h2>
    <ul class="nav__list">
        <li class="nav__item">
            <a class="nav__link" href="{{ route('home') }}">Accueil</a>
        </li>
        <li aria-haspopup="true" class="nav__item nav__item--dropdown">
            <p class="nav__link nav__link--dropdown">Agenda</p>
            <ul aria-label="submenu" class="nav__list_sub">
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('agenda', ['season' => $latestSeason]) }}">La saison</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('subscription') }}">Abonnements</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('resto') }}">Offre resto</a>
                </li>
            </ul>
        </li>
        <li aria-haspopup="true" class="nav__item nav__item--dropdown">
            <p class="nav__link nav__link--dropdown">La salle</p>
            <ul aria-label="submenu" class="nav__list_sub">
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('post') }}">Actualités</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('about') }}">À Propos</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('media') }}">Presse</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('renting') }}">Location</a>
                </li>
            </ul>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="{{ route('contact') }}">Contact</a>
        </li>
    </ul>
</nav>

