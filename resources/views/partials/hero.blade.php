<header class="header">
    <div class="hero hero--{{ $class }}">
        <figure class="hero__fig">
            <img class="hero__img" src="{{ asset('img/' . $img) }}">
        </figure>
        <div class="hero__content hero__content--{{ $color }}">

            <h1 class="hero__title">
                {{ $title}} <span class="sro">- les Tréteaux</span>
            </h1>

            <p class="hero__text">
                {{ $text }}
            </p>

            @if($url)
                <a class="hero__link btn btn--primary btn--{{ $icon }}" href="{{ $url }}">{{ $label }}</a>
            @endif
        </div>
    </div>
    @include('parts.header')
</header>