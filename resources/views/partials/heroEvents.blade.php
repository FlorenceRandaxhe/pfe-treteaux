<header class="header">
    <div class="heroEvents wrapper">
        <h1 class="heroEvents__title">Agenda</h1>

        <div class="heroEvents">
            <p class="heroEvents__current">{{ $season->year }}</p>

            <ul class="heroEvents__list">
                @foreach($allSeasons as $allSeason)
                <li class="heroEvents__item">
                    <a class="heroEvents__link" href="/agenda/{{ $allSeason->year }}">{{ $allSeason->year }}</a>
                </li>
                @endforeach
            </div>
        </div>
    </div>
    @include('parts.header')
</header>
