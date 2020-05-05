<div class="nav">
    <ul class="nav__list">
        <li class="nav__item nav__item--dropdown">
            <a class="nav__link nav__link--dropdown" href="#">Agenda</a>
            <ul class="nav__list_sub">
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="/agenda/{{ $season->year }}">La saison</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="#">Abonnements</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="#">Offre resto</a>
                </li>
            </ul>
        </li>
        <li class="nav__item nav__item--dropdown">
            <a class="nav__link nav__link--dropdown" href="#">La salle</a>
            <ul class="nav__list_sub">
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('news') }}">Actualités</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="#">À Propos</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="{{ route('media') }}">Presse</a>
                </li>
                <li class="nav__item_sub">
                    <a class="nav__link_sub" href="#">Location</a>
                </li>
            </ul>
        </li>
        <li class="nav__item">
            <a class="nav__link" href="#">Contact</a>
        </li>
    </ul>
</div>