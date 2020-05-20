<header class="header">
    <div class="hero hero--{{ $class }}">
        <figure class="hero__fig">
            <img class="hero__img" src="{{ asset('storage/' . $img) }}" alt="{{ $alt }}">
        </figure>
        <div class="hero__container hero__container--{{ $color }}">

            <div class="hero__content">
                @if($type)
                    <p class="hero__type type type--outline-red type--big">{{ $type }}</p>
                @endif
                <h1 class="hero__title">
                    {{ $title }} <span class="sro">- les Tréteaux</span>
                </h1>

                <div class="hero__text wysiwyg">
                    @markdown {{ $text }} @endmarkdown
                </div>

                @if($isEvent)
                    @if($event && $event->date > now())
                        <a class="hero__link btn btn--{{ $btnType }}" href="{{ $url }}">{{ $label }}</a>
                    @elseif($event && $event->date <= now())
                        <p>Le {{ $event->date->isoFormat('DD MMM YY \à HH\hMM') }}</p>

                    @endif
                @else
                    <a data-scroll @if($file) download @endif class="hero__link btn{{$icon ? ' btn--' . $icon : '' }} btn--{{ $btnType }}" href="{{ $file ? asset('storage/' . $url) : $url }}">{{ $label }}</a>
                @endif
            </div>
        </div>
    </div>
    @include('parts.header')
</header>