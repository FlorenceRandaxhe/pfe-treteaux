<div class="search">
    <a class="search__link" href="#search_modal"><span class="sro">Rechercher un spectacle ou une actualités</span></a>
    <span class="search__icon"></span>
    <div id="search_modal" class="search__container">
        <a href="#" class="search__hide"><span class="sro">Fermer le modal de recherche</span></a>
        <div class="search__modal">
            <div class="search__wrapper wrapper">
                <form class="search__form form" method="GET" action="{{ route('search') }}">
                    <div class="form__control">
                        <label class="form__label" for="q">Recherche</label>
                        <input type="search" name="q" id="q" class="form__input form__input--small" placeholder="Que cherchez-vous ?" value="{{ old('q') }}">
                        <button type="submit" class="btn btn--arrow"><span class="sro">Rechercher</span></button>
                    </div>
                </form>
                <a class="search__close" href="#">Fermer <span class="sro">Le modal de recherche</span></a>
            </div>
        </div>
    </div>
</div>