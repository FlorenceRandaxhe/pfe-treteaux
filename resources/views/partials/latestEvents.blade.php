<section class="latestEvents">
    <div class="wrapper">
        <h2 class="latestEvents__title">Prochainement</h2>
        <p class="latestEvents__year">2019-2020</p>
        <div class="latestEvents__content">
            @foreach($events as $event)
                @include('parts.EventCard', [
                    'event' => $event,
                ])
            @endforeach
        </div>
        <a class="latestEvents__link link link--line" href="#">Voir tout l'agenda</a>
    </div>
</section>