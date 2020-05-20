<header class="header">
    <div class="heroAbout wrapper reveal">
        <h1 class="heroAbout__title">{{ $title }} <span class="sro">- Les Tréteaux</span></h1>

        <figure class="heroAbout__fig">
            <img class="heroAbout__img" src="{{ asset('storage/' . $img) }}" alt="{{ $alt }}">
        </figure>
    </div>
    @include('parts.header')
</header>