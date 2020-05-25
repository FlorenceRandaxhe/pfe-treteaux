<header class="header">
    <div class="heroBooking">
        <div class="wrapper">
            <div class="heroBooking__content">
                <h1 class="heroBooking__title">
                    <span class="sro">Réservation pour&nbsp;:</span>
                    <span>{{ $event->title }}</span>
                    <span class="sro"> - Choix des tarifs</span>
                </h1>
                <p class="heroBooking__intro">{{ $event->intro }}</p>

                @if($event->seating === 0)
                    <p class="heroBooking__seating">Placement libre</p>
                @endif
                <p class="heroBooking__date">Le {{ $event->date->isoFormat('DD MMM YY') }} à {{ $event->date->isoFormat('HH\hmm') }}</p>
            </div>
        </div>
    </div>
    <div class="heroBooking__nav">
        <div class="heroBooking__nav_container wrapper">
            <a class="heroBooking__back" href="{{ $back }}">Retour</a>
            @include('parts.breadcrumb')
        </div>
    </div>
    @include('parts.header')
</header>