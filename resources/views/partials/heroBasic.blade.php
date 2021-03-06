<header class="header">
    <div class="wrapper heroBasic{{ $img ? ' heroBasic--banner ' : '' }} heroBasic--{{ $color }}">
        @if($img)
            <figure class="heroBasic__fig">
                <img class="heroBasic__img" src="{{ asset('storage/' . $img) }}" alt="{{ $alt }}">
            </figure>
        @endif
        <h1 class="heroBasic__title">{{ $title }} <span class="sro">- Les Tréteaux</span></h1>
        @if($intro)
            <p class="heroBasic__intro">{{ $intro }}</p>
        @endif
        @if($type)
            <p class="type">{{ $type }}</p>
        @endif
    </div>
    @include('parts.header')
</header>
