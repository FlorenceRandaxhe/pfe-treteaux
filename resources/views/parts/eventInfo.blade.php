<section class="eventInfo">
    <h3 class="eventContent__title">Infos pratiques</h3>
    <ul class="eventInfo__list">
        <li class="eventInfo__item">
            <p class="eventInfo__label">Date</p>
            <div class="eventInfo__content">{{ $event->date }}</div>
        </li>
        @foreach($event->detailsContent as $detail)
        <li class="eventInfo__item">
            <p class="eventInfo__label">{{ $detail->title }}</p>
            <div class="eventInfo__content">@markdown {{ $detail->text }} @endmarkdown</div>
        </li>
        @endforeach
    </ul>
    @if($event->date > now())
    <a href="{{ route('booking', ['event' => $event->slug]) }}" class="eventInfo__btn btn btn--secondary">Réserver</a>
    @endif
</section>