<section class="latestEvents latestEvents--{{ $class }}">
    <div class="latestEvents__container wrapper">
        <div class="latestEvents__header">
            <h2 class="latestEvents__title">Prochainement</h2>
            @if($class === 'home')
                <p class="latestEvents__year">{{ $latestSeason->year }}</p>
            @endif
        </div>
        <div class="latestEvents__content">
            @foreach($events as $event)
                @include('parts.eventCard', [
                    'event' => $event,
                ])
            @endforeach
        </div>
        <div class="latestEvents__bottom">
            <a class="latestEvents__link link link--line" href="/agenda/{{ $latestSeason->year }}">Voir tout l'agenda</a>
        </div>
    </div>
</section>