<article class="eventCard{{ $class ? ' eventCard--' . $class : ''}}" itemscope itemtype="https://schema.org/Event">
    <a class="eventCard__link" href="{{ route('singleEvent', ['season' => $event->season, 'event' => $event]) }}"><span class="sro">En savoir plus sur {{ $event->title }}</span></a>
    <figure class="eventCard__fig">
        <img class="eventCard__img" src="{{ asset('storage/' . $event->img) }}" alt="{{ $event->title }}" itemprop="image">
    </figure>
    <h3 class="eventCard__title" itemprop="name">{{ $event->title }}</h3>
    <p class="eventCard__excerpt" itemprop="description">{{ Illuminate\Support\Str::limit($event->intro, 120) }}</p>
    <time class="eventCard__date" itemprop="startDate" datetime="{{ $event->date->isoFormat('YYYY-MM-DD') }}"><span class="eventCard__day">{{ $event->date->isoFormat('DD') }}</span><span class="eventCard__month">{{ $event->date->isoFormat('MMM') }}</span></time>
    <p class="eventCard__type type type--fill">{{ $event->type->name }}</p>
    <p class="eventCard__plus"><span>Plus d'infos</span></p>
</article>