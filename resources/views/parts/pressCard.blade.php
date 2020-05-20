<article class="pressCard pressCard--{{ $color }}">
    <a href="{{ $url }}" target="_blank" class="pressCard__link"><span class="sro">Lire l'media&nbsp;: {{ $title }}</span></a>
    @if($date)
    <time class="pressCard__date" datetime="{{ $date }}">
        <span class="pressCard__day">{{ $day }}</span>
        <span class="pressCard__month">{{ $month }}</span>
         <span class="pressCard__year">{{ $year }}</span>
    </time>
    @endif
    <div class="pressCard__content">
        <h3 class="pressCard__title">{{ $title }}</h3>
        <p class="pressCard__excerpt">
            {{ Illuminate\Support\Str::limit($excerpt, 120)}}</p>
        <p class="pressCard__source">{{ $source }}</p>
    </div>
</article>