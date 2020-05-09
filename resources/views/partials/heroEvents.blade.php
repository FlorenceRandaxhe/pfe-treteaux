<header class="header">
    <div class="heroEvents wrapper">
        <h1 class="heroEvents__title">Agenda <span class="sro">- Les tréteaux</span></h1>

        <div aria-haspopup="true" class="heroEvents__dropdown">
            <div class="heroEvents__current">
                <a href="/agenda/{{ $latestSeason }}" class="heroEvents__currentLink">{{ $season->year }}</a>
            </div>

            <ul aria-label="submenu" class="heroEvents__list">
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
