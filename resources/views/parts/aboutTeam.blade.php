<section class="aboutTeam">
    <div class="aboutTeam__container wrapper">
        <h2 class="aboutTeam__title">{{ Page::get('teamTitle') }}</h2>
        <div class="aboutTeam__content">
            @foreach($teams as $team)
                @include('parts.teamCard')
            @endforeach
        </div>
    </div>
</section>