<section class="contact" id="contact">
    <div class="contact__container wrapper">
        <h2 class="sro">Formulaire de contact</h2>
        @include('parts.contactForm')
    </div>
</section>

<section class="contact">
    <div class="contact__container wrapper">
        <h2 class="sro">Information de contact</h2>
        <div class="contact__info">
            @include('parts.contactInfo')
        </div>
    </div>
</section>

<div class="contact">
    <div class="contact__mapContainer" data-lat="50.737120" data-lng="5.693863">
        <div class="contact__map" id='map' style='width: 100%; height: 550px;'></div>
    </div>
</div>
