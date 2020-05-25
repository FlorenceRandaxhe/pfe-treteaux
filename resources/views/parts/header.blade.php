<div class="header__container wrapper">
    <div class="header__logo">
        <a class="header__link" href="{{ route('home') }}"><span class="sro">Accueil</span></a>
        @include('svg.logo')
    </div>

    <input type="checkbox" name="menu" id="menu" class="header__input">
    <label class="header__label" for="menu"><span class="sro">Menu</span></label>

    <div class="header__responsive">
        <div class="header__nav">
            @include('parts.nav')
        </div>

        <div class="header__icons">
            <div class="header__search">
                @include('parts.search')
            </div>

            <div class="header__social">
                @include('parts.social')
            </div>
        </div>
    </div>

</div>
