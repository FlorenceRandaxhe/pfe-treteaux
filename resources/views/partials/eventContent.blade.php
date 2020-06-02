    <section class="eventContent wrapper">
        <h2 class="sro">Sur le spectacle</h2>

        @include('parts.eventInfo')

        <div class="eventContent__container">

            <section class="eventContent__section">
                <h3 class="eventContent__title">Description</h3>
                <div class="wysiwyg" itemprop="description">
                    @markdown {{ $event->description }} @endmarkdown
                </div>

                @if($event->resto == 1)
                <div class="eventContent__resto">
                    <p>Profitez d'un succulent repas dans les restaurants du centre de Visé, à deux pas de la salle de spectacle, avant de venir apprécier le spectacle à prix réduit.</p>
                    <a href="{{ route('resto') }}">Voir la liste des restaurants</a>
                </div>
                @endif
            </section>

            @if(count($event->distributionContent) >= 1)
            <section class="eventContent__section">
                <h3 class="eventContent__title">Distribution</h3>
                <div class="eventContent__distri">
                    @foreach($event->distributionContent as $distri)
                        @include('parts.eventMember')
                    @endforeach
                </div>
            </section>
            @endif
        </div>
    </section>