<section class="contact" id="contact">
    <div class="contact__container wrapper">
        <h2 class="sro">Formulaire de contact</h2>
        @if(session()->has('success'))
            @include('parts.success', [
                'message' =>'Votre message a bien été envoyé. Nous reviendrons vers vous le plus rapidement possible'
            ])
        @else
            @include('parts.contactForm')
        @endif
    </div>
</section>

<section class="contact">
    <div class="contact__container wrapper">
        <h2 class="sro">Informations de contact</h2>
        <div class="contact__info">
            @include('parts.contactInfo')
        </div>
    </div>
</section>

<div class="contact">
    <div class="contact__mapContainer" data-lat="{{ Page::option('contact')->lat }}" data-lng="{{ Page::option('contact')->lng }}">
        <div class="contact__map" id='map' style='width: 100%; height: 550px;'></div>
    </div>
</div>
