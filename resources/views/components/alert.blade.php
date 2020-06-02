@props([
    'type' => ''
])

<div class="alert{{ $type ? ' alert__' . $type : '' }}">
    <div class="alert__content">
        <a class="alert__close{{ $type ? ' alert__close--' . $type : '' }}" href="#">Fermer</a>
        <p class="alert__text">{{ $slot }}</p>
    </div>
</div>