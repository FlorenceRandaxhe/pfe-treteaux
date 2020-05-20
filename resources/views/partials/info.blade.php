<section class="info{{ $class ? ' info--' . $class : ''}}">
    <div class="info__container wrapper">
        <h2 class="info__title">{{ $title }}</h2>
        <p class="info__text">{{ $text }}</p>
        <a class="info__link link" href="{{ route($url) }}">{{ $label }}</a>
    </div>
</section>