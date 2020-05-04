<section class="latestEvents">
    <div class="wrapper">
        <div class="latestEvents__header">
            <h2 class="latestEvents__title">Prochainement</h2>
            <p class="latestEvents__year">2019-2020</p>
        </div>
        <div class="latestEvents__content">
            @foreach($events as $event)
                @include('parts.EventCard', [
                    'event' => $event,
                ])
            @endforeach
        </div>
        <div class="latestEvents__bottom">
            <a class="latestEvents__link link link--line" href="#">Voir tout l'agenda</a>
        </div>
    </div>
</section>