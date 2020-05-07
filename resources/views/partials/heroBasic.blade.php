<header class="header">
    <div class="wrapper heroBasic heroBasic--{{ $color }} @if($img) heroBasic--banner @endif">
        @if($img)
            <figure class="heroBasic__fig">
                <img class="heroBasic__img" src="{{ asset('img/' . $img) }}">
            </figure>
        @endif
        <h1 class="heroBasic__title">{{ $title }}</h1>
        @if($intro)
            <p class="heroBasic__intro">{{ $intro }}</p>
        @endif
        @if($type)
            <p class="type">{{ $type }}</p>
        @endif
    </div>
    @include('parts.header')
</header>
