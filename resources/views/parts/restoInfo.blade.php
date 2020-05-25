<div class="restoInfo" id="{{ $resto->id }}" data-lat="{{ $resto->latitude }}" data-lng="{{ $resto->longitude }}">
    <a href="#" class="restoInfo__hide"><span class="sro">Fermer</span></a>
    <div class="restoInfo__container">
        <a href="#" class="restoInfo__close">Fermer</a>
        <p class="restoInfo__title">{{ $resto->name }}</p>
        <div class="restoInfo__menu">@markdown {{ $resto->menu }} @endmarkdown</div>
        <p class="restoInfo__price">{{ $resto->price }} €</p>

        <a href="{{ $resto->url }}" target="_blank" class="restoInfo__link btn btn--secondary">Voir le menu <span class="sro">du restaurant {{ $resto->name }}</span></a>
        <p class="restoInfo__text">A {{ $resto->distance }} minutes à pied de la salle</p>
    </div>
</div>