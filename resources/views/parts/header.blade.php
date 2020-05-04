<header class="header header--show">
    <div class="header__container wrapper">
        <div class="header__logo">
            <a href="{{ route('home') }}">Les Tréteaux</a>
        </div>

        <div class="header__responsive">
            <a href="#" class="header__burger">
                <span class="sro">Navigation</span>
                <span class="header__lines"></span>
            </a>
        </div>

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
</header>