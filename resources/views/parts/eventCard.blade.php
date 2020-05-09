<article class="eventCard @if($class) eventCard--{{$class}} @endif">
    <a class="eventCard__link" href="#"><span class="sro">En savoir plus sur {{ $event->title }}</span></a>
    <figure class="eventCard__fig">
        <img class="eventCard__img" src="{{ asset('img/' . $event->img) }}" alt="{{ $event->title }}">
    </figure>
    <h3 class="eventCard__title">{{ $event->title }}</h3>
    <p class="eventCard__excerpt">{{ $event->intro }}</p>
    <time class="eventCard__date" datetime="{{ $event->created_at->format('c') }}"><p class="eventCard__day">{{ $event->created_at->isoFormat('DD') }}</p><p class="eventCard__month">{{ $event->created_at->isoFormat('MMM') }}</p></time>
    <p class="eventCard__type type type--fill">{{ $event->type->name }}</p>
    <p class="eventCard__plus">
        <span>Plus d'infos</span>
    </p>
</article>