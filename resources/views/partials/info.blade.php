<section class="info @if($class) info--{{$class}} @endif">
    <div class="info__container wrapper">
        <h2 class="info__title">{{ $title }}</h2>
        <p class="info__text">{{ $text }}</p>
        <a class="info__link link" href="{{ route($url) }}">{{ $label }}</a>
    </div>
</section>