<section class="allPressRelease">
    <div class="allPressRelease__container wrapper">
        <h2 class="allPressRelease__title">Retrouver les communiqués de presse de nos spectacles</h2>
        @foreach($press as $season)
        <table class="allPressRelease__table">
            <thead>
                <tr class="allPressRelease__row">
                    <th class="allPressRelease__heading">Saison {{ $season->year }}</th>
                    <th class="allPressRelease__heading">Communiqués de presse</th>
                </tr>
            </thead>
            <tbody>
                @foreach($season->events as $event)
                <tr class="allPressRelease__row allPressRelease__row--border">
                    <td class="allPressRelease__data"><a class="allPressRelease__event" href="{{ route('singleEvent', ['season' => $season, 'event'=> $event]) }}"><span class="sro">Plus d'info sur le spectacle </span>{{ $event->title }}</a></td>
                    <td class="allPressRelease__data allPressRelease__data--center"><a class="allPressRelease__link" href="{{ asset('/storage/' . $event->pressRelease) }}" download>Télécharger <span class="sro">le comminiqué de presse du spectacle {{ $event->title }} (document pdf)</span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endforeach
    </div>
</section>