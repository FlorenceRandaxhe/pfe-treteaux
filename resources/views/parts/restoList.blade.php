<section class="restoList">
    <h3 class="restoList__title">Spectacles concernés pour la saison {{ $season->year }}</h3>
    <div class="restoList__content">
        <ul class="restoList__list">
            @foreach($events as event)
                <li class="restoList__item"><a href="{{ route('singleEvent', ['event' => $event->slug]) }}">{{ $event->title }}</a></li>
            @endforeach
        </ul>
    </div>
</section>