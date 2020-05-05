<section class="allRestos">
    <div class="allRestos__container wrapper">
        <div class="allRestos__intro">
            <h2 class="allRestos__title">Les restaurants</h2>
            <p class="allRestos__text">
                Nous vous proposons les offres suivantes :
                Les réservations pour ces formules se feront uniquement au guichet du Centre Culturel (du lundi au vendredi de 8h30 à 17h00). Payement par carte bancaire.
            </p>
            <a href="#" class="btn btn--outline btn--arrow">Voir les spectacles concernés</a>
        </div>
        <div class="allRestos__content">
            @foreach($restos as $resto)
                @include('parts.restoCard')
            @endforeach
        </div>
    </div>
</section>