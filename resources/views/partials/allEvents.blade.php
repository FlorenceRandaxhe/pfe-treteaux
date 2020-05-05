<section class="allEvents">
    <div class="wrapper">
        <h2 class="sro">Tous les spectacles</h2>
        <div class="allEvents__container">
            @foreach($season->events as $event)
                @if ($loop->first)
                    @include('parts.eventCard', [
                        'event' => $event,
                        'class' => 'big',
                    ])
                @else
                @include('parts.eventCard', [
                    'event' => $event,
                    'class' => ''
                ])
                @endif
            @endforeach
        </div>
    </div>
</section>