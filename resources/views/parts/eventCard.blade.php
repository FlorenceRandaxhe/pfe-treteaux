<article class="eventCard">
    <a class="eventCard__link" href="#"><span class="sro">EN savoir plus sur {{ $event->title }}</span></a>
    <figure class="eventCard__fig">
        <img class="eventCard__img" src="{{ asset('img/' . $event->img) }}">
    </figure>
    <h3 class="eventCard__title">{{ $event->title }}</h3>
    <p class="eventCard__excerpt">{{ $event->intro }}</p>
    <time class="eventCard__date"><span class="eventCard__day">{{ $event->created_at->format('d') }}</span><span class="eventCard__month">{{ $event->created_at->format('M') }}</span></time>
    <p class="eventCard__type type type--fill">{{ $event->type->name }}</p>
</article>