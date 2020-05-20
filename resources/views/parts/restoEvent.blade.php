<div class="restoEvent wrapper">

    <div class="restoEvent__modal">
        <!-- <a href="#" class="restoEvent__close">Fermer</a> -->

        <p class="restoEvent__heading">Listes des spectacles de la saison concernés par l'offre&nbsp;:</p>

        <ul class="restoEvent__list">
            @foreach($events as $event)
            <li class="restoEvent__item">
                <a class="restoEvent__link" href="{{ route('singleEvent', ['season' => $event->season->year, 'event' => $event->slug]) }}"><span class="sro">Voir plus sur {{ $event->title }}</span></a>
                <p class="restoEvent__event">{{ $event->title }}</p>
                <p class="restoEvent__date">{{ $event->date->isoFormat('DD/MM/YY') }}</p>
            </li>
            @endforeach
        </ul>

    </div>

</div>