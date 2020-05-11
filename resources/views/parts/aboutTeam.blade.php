<section class="aboutTeam">
    <div class="aboutTeam__container wrapper">
        <h2 class="aboutTeam__title">L'équipe</h2>

        <div class="aboutTeam__content">

            @foreach($teams as $team)
            <div class="teamCard reveal">
                <figure class="teamCard__fig">
                    <img class="teamCard__img" src="{{ asset('img/' . $team->img) }}">
                </figure>

                <div class="teamCard__text">
                    <p class="teamCard__name">{{ $team->name }}</p>
                    <p class="teamCard__job">{{ $team->job }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>