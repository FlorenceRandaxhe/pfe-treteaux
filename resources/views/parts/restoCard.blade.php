<section class="restoCard">
    <h3 class="restoCard__title">{{ $resto->name }}</h3>
    <p class="restoCard__menu">{{ $resto->menu }}</p>
    <a href="#{{ $resto->id }}" class="restoCard__link"></a>
    <p class="link">Plus d'infos</p>

    @include('parts.restoInfo')
</section>