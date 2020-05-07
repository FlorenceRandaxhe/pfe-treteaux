<header class="header">
    <div class="heroEvents wrapper">
        <h1 class="heroEvents__title">Agenda</h1>

        <div class="heroEvents__dropdown">
            <a href="/agenda/{{ $latestSeason->year }}" class="heroEvents__current">{{ $season->year }}</a>

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
