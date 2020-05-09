<div class="restoInfo" id="{{ $resto->id }}">
    <a href="#" class="restoInfo__hide"><span class="sro">Fermer</span></a>
    <div class="restoInfo__container">
        <a href="#" class="restoInfo__close">Fermer</a>
        <p class="restoInfo__title">{{ $resto->name }}</p>
        <p class="restoInfo__menu">{{ $resto->menu }}</p>
        <a href="{{ $resto->url }}" class="restoInfo__link link link--line">Voir le menu</a>
        <p class="restoInfo__price">{{ $resto->price }} €</p>
        <p class="restoInfo__text">A 5 minutes à pied de la salle</p>
    </div>

</div>