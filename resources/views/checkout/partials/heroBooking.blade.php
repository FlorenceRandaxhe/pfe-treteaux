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
</header>