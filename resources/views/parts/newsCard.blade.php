<article class="newsCard @if($class) newsCard--{{$class}} @endif">
    <a class="newsCard__link" href="#"><span class="sro">Lire l'article&nbsp;: {{ $post->title }}</span></a>
    <figure class="newsCard__fig">
        <img class="newsCard__img" src="{{ asset('img/' . $post->img) }}">
    </figure>
    <div class="newsCard__content">
        <div>
            <p class="newsCard__type type">{{ $post->tag->name }}</p>
            <h3 class="newsCard__title">{{ $post->title }}</h3>
        </div>
        <time class="newsCard__date" datetime="{{ $post->created_at->format('d-m-y') }}"><p class="newsCard__day">{{ $post->created_at->format('d') }}</p><p class="newsCard__month">{{ $post->created_at->format('M') }}</p></time>
    </div>
</article>