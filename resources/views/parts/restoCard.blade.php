<section class="restoCard">
    <h3 class="restoCard__title">{{ $resto->name }}</h3>
    <div class="restoCard__menu">
        @markdown {{ $resto->menu }} @endmarkdown
    </div>
    <a href="#{{ $resto->id }}" class="restoCard__link"><span class="sro">Plus d'infos sur l'offre</span></a>
    <p class="link">Plus d'infos<span class="sro"> sur {{ $resto->name }}</span></p>

    @include('parts.restoInfo')
</section>