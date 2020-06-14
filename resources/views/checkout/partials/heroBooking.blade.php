<header class="header">
    <div class="heroBooking">
        <div class="wrapper">
            <div class="heroBooking__content">
                <h1 class="heroBooking__title">
                    <span class="sro">Réservation pour </span>
                    <span>{{ $event->title }}</span>
                    <span class="sro"> - {{ $step }}</span>
                </h1>
                <p class="heroBooking__intro">{{ $event->intro }}</p>

                <p class="heroBooking__date">
                    Le {{ $event->date->isoFormat('DD MMM YY') }} à {{ $event->date->isoFormat('HH\hmm') }}
                    @if($event->seating == 1) - Placement libre @elseif($event->seating == 2) - Configuration debout @endif
                </p>
            </div>
        </div>
    </div>
    <div class="heroBooking__nav">
        <div class="heroBooking__nav_container wrapper">
            @if($back)
            <a class="heroBooking__back" href="{{ $back }}">Retour</a>
            @endif
            @include('checkout.partials.breadcrumb')
        </div>
    </div>
    @include('parts.header')
    <noscript>
        <div class="wrapper">
            <p class="noscript__text"> Pour pouvoir réserver des places pour un de nos spectacles, vous devez activer Javascript. Voici les <a class="noscript__link" href="https://www.enable-javascript.com/fr/" target="_blank">instructions pour activer JavaScript dans votre navigateur Web</a>.</p>
            <p>Vous pouvez également vous rendre au Tréteaux et réserver sur place (du lundi au vendredi de 08h30 à 17h00).</p>
        </div>
    </noscript>
</header>