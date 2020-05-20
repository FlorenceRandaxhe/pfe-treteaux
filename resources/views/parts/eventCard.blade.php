<article class="eventCard{{ $class ? ' eventCard--' . $class : ''}}">
    <a class="eventCard__link" href="{{ route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]) }}"><span class="sro">En savoir plus sur {{ $event->title }}</span></a>
    <figure class="eventCard__fig">
        <img class="eventCard__img" src="{{ asset('storage/' . $event->img) }}" alt="{{ $event->title }}">
    </figure>
    <h3 class="eventCard__title">{{ $event->title }}</h3>
    <p class="eventCard__excerpt">{{ Illuminate\Support\Str::limit($event->intro, 120) }}</p>
    <time class="eventCard__date" datetime="{{ $event->date->format('c') }}"><span class="eventCard__day">{{ $event->date->isoFormat('DD') }}</span><span class="eventCard__month">{{ $event->date->isoFormat('MMM') }}</span></time>
    <p class="eventCard__type type type--fill">{{ $event->type->name }}</p>
    <p class="eventCard__plus">
        <span>Plus d'infos</span>
    </p>
</article>