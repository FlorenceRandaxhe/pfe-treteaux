<article class="pressCard">
    <a href="{{ $media->url }}" class="pressCard__link"><span class="sro">Lire l'media&nbsp;: {{ $media->title }}</span></a>
    <time class="pressCard__date" datetime="{{ $media->published_at->format('d-m-y') }}">
        <span class="pressCard__day">{{ $media->published_at->format('d') }}</span>
        <span class="pressCard__month">{{ $media->published_at->format('M') }}</span>
         <span class="pressCard__year">{{ $media->published_at->format('Y') }}</span>
    </time>
    <div class="pressCard__content">
        <h3 class="pressCard__title">{{ $media->title }}</h3>
        <p class="pressCard__excerpt">{{ $media->excerpt }}</p>
        <p class="pressCard__source">{{ $media->source }}</p>
    </div>
</article>