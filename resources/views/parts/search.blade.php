<div class="search">
    <a class="search__link" href="#search_modal"><span class="sro">Rechercher</span></a>
    <span class="search__icon"></span>
    <div id="search_modal" class="search__container">
        <a href="#" class="search__hide"><span class="sro">Fermer</span></a>
        <div class="search__modal">
            <div class="search__wrapper wrapper">
                <form class="search__form form" method="GET" action="/search">
                    <div class="form__control">
                        <label class="sro" for="q">Que cherchez-vous ?</label>
                        <input type="search" name="q" id="q" class="form__input form__input--small" placeholder="Que cherchez-vous ?">
                        <button type="submit" class="btn btn--arrow"><span class="sro">Rechercher</span></button>
                    </div>
                </form>
                <a class="search__close" href="#">Fermer</a>
            </div>
        </div>
    </div>
</div>