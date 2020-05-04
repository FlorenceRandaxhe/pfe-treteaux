<section class="allEvents">
    <h2 class="sro">Tous les spectacles</h2>
    <div class="allEvents__container wrapper">
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
</section>