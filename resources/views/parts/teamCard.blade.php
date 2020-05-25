<div class="teamCard reveal">
    <figure class="teamCard__fig">
        <img class="teamCard__img" src="{{ asset('storage/' . $team->img) }}" alt="Photo de {{ $team->name }}">
    </figure>

    @if($team->phone || $team->email)
    <div class="teamCard__contact">
        @if($team->email)
            <a class="teamCard__link" href="mailto:{{ $team->email }}">{{$team->email}}</a>
        @endif
        @if($team->phone)
            <a class="teamCard__link" href="tel:{{ phone($team->phone) }}">{{$team->phone}}</a>
        @endif
    </div>
    @endif

    <div class="teamCard__text">
        <p class="teamCard__name">{{ $team->name }}</p>
        <p class="teamCard__job">{{ $team->job }}</p>
    </div>
</div>