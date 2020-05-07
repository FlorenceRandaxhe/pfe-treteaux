<header class="header">
    <div class="hero hero--{{ $class }}">
        <figure class="hero__fig">
            <img class="hero__img" src="{{ asset('img/' . $img) }}" alt="{{ $alt }}">
        </figure>
        <div class="hero__container hero__container--{{ $color }}">

            <div class="hero__content">
                <h1 class="hero__title">
                    {{ $title}} <span class="sro">- les Tréteaux</span>
                </h1>

                <p class="hero__text">
                    {{ $text }}
                </p>

                @if($url)
                    <a class="hero__link btn btn--primary @if($icon) btn--{{ $icon }} @endif" href="{{ $url }}">{{ $label }}</a>
                @endif
            </div>


        </div>
    </div>
    @include('parts.header')
</header>