<section class="eventInfo">
    <h3 class="eventContent__title">Infos pratiques</h3>
    <ul class="eventInfo__list">
        <li class="eventInfo__item">
            <p class="eventInfo__label eventInfo__label--date">Date</p>
            <div class="eventInfo__content"><time itemprop="startDate" datetime="{{ $event->date->isoFormat('YYYY-MM-DD') }}">{{ $event->date->isoFormat('DD MMM YYYY') }} à {{ $event->date->isoformat('HH\hmm') }}</time></div>
        </li>
        <li class="eventInfo__item">
            <p class="eventInfo__label eventInfo__label--price">Prix</p>
            <ul>
          @foreach($event->prices as $key => $value)
            <li class="eventInfo__itemSub">{{ Str::ucfirst($key) }}&nbsp;: {{ $value }}€</li>
        @endforeach
            </ul>
        </li>
        @foreach($event->detailsContent as $detail)
        <li class="eventInfo__item">
            <p class="eventInfo__label eventInfo__label--{{$detail->icon}}">{{ $detail->title }}</p>
            <div class="eventInfo__content">@markdown {{ $detail->text }} @endmarkdown</div>
        </li>
        @endforeach
    </ul>
    @if($event->date > now() && $event->seats != 0)
    <a href="{{ route('booking', ['event' => $event->slug]) }}" class="eventInfo__btn btn btn--secondary">Réserver</a>
    @endif
</section>