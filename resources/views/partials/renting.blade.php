<section class="renting">
    <div class="renting__container renting__tab wrapper">
        <div class="renting__intro renting__intro--sticky">
            <h2 class="renting__title">Infos pratiques</h2>
            @include('parts.tabs')
        </div>
        <div class="renting__content">
            @include('parts.rentingInfo')
        </div>
    </div>
</section>

<section class="renting" id="form">
    <div class="renting__container wrapper">
        <div class="renting__intro">
            <h2 class="renting__title">Demande de location</h2>
            <p class="renting__text">Les prix des locations ne sont pas fixes et dépendent de vos besoins techniques. <br> Les Tréteaux ne louent pas la salle pour des événements privés.</p>
        </div>
        <div class="renting__content">
            @include('parts.rentingForm')
        </div>
    </div>
</section>