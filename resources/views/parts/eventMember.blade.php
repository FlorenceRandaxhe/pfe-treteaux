<div class="distriCard">
    @if($distri->img)
    <figure class="distriCard__fig">
        <img class="distriCard__img" alt="{{ $distri->name }}" src="{{ asset('storage/' . $distri->img) }}">
    </figure>
    @else
    <figure class="distriCard__fig">
        <img class="distriCard__img" alt="{{ $distri->name }}" src="{{ asset('img/distri.svg') }}">
    </figure>
    @endif
    <p class="distriCard__name">{{ $distri->name }}</p>
    <p class="distriCard__role">{{ $distri->role }}</p>
</div>