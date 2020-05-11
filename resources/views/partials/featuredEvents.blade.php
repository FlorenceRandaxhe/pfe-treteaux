<section class="featuredEvents">
    <h2 class="sro">Les spectacles à la une</h2>
    <div class="featuredEvents__wrapper">
        @foreach($featured as $event)
        <div class="featuredEvents__slide">
            <figure class="featuredEvents__fig">
                <img class="featuredEvents__img" src="{{ asset('img/' . $event->img) }}" alt="{{ $event->title }}">
            </figure>
            <div class="featuredEvents__container">
                <div class="featuredEvents__content">
                    <p class="type type--outline-blue">{{ $event->type->name }}</p>
                    <h3 class="featuredEvents__title">{{ $event->title }}</h3>
                    <p class="featuredEvents__text">{{ $event->intro }}</p>
                    <a class="featuredEvents__link link link--line link--blue" href="{{ $event->slug }}">Plus d'infos<span class="sro"> sur {{ $event->title }}</span></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>