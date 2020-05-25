<article class="newsCard{{ $class ? ' newsCard--' . $class : ''}}">
    <a class="newsCard__link" href="{{ route('singleNews', ['post' => $post->slug]) }}"><span class="sro">Lire l'article&nbsp;: {{ $post->title }}</span></a>
    <figure class="newsCard__fig">
        <img class="newsCard__img" src="{{ asset('storage/' . $post->img) }}" alt="{{ $post->title }}">
    </figure>
    <div class="newsCard__content">
        <div>
            <p class="newsCard__type type">{{ $post->tag->name }}</p>
            <h3 class="newsCard__title">{{ $post->title }}</h3>
        </div>
        <time class="newsCard__date" datetime="{{ $post->published_at->isoFormat('YYYY-MM-DD') }}"><span class="newsCard__day">{{ $post->published_at->isoFormat('DD') }}</span><span class="newsCard__month">{{ $post->published_at->isoFormat('MMM') }}</span></time>
    </div>
</article>