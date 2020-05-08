<div class="restoInfo" id="{{ $resto->id }}">
    <a href="#" class="restoInfo__hide"><span class="sro">Fermer</span></a>
    <div class="restoInfo__container">
        <p class="restoInfo__title">{{ $resto->name }}</p>
        <p class="restoInfo__menu">{{ $resto->menu }}</p>
        <p class="restoInfo__text">A 5 minutes à pied de la salle</p>
        <p class="restoInfo__price">{{ $resto->price }} €</p>
        <a href="{{ $resto->url }}" class="restoInfo__link link link--line">Voir le menu</a>
    </div>

</div>