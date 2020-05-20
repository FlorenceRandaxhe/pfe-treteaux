<section class="aboutSalle reveal">
    <div class="aboutSalle__container wrapper">
        @include('svg.text')
        <figure class="aboutSalle__fig">
            <img class="aboutSalle__img" src="{{ asset('storage/' . Page::get('salleImg')) }}" alt="{{ Page::get('salleTitle') }}">
        </figure>

        <div class="aboutSalle__content">

            <h2 class="aboutSalle__title">{{ Page::get('salleTitle') }}</h2>
            <div class="aboutSalle__text wysiwyg">
                @markdown {{ Page::get('salleContent') }} @endmarkdown
            </div>
        </div>
    </div>
</section>
