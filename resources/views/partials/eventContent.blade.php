    <section class="eventContent wrapper">
        <h2 class="sro">Sur le spectacle</h2>

        @include('parts.eventInfo')

        <div class="eventContent__container">

            <section class="eventContent__section">
                <h3 class="eventContent__title">Description</h3>
                <div class="wysiwyg">
                    @markdown {{ $event->description }} @endmarkdown
                </div>
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