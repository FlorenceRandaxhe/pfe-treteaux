<section class="contact" id="contact">
    <div class="contact__container wrapper">
        <h2 class="sro">Formulaire de contact</h2>
        @if(session()->has('success'))
            <x-success>
                Votre message a bien été envoyé. Nous reviendrons vers vous le plus rapidement possible
            </x-success>
        @else
            @include('parts.contactForm')
        @endif
    </div>
</section>