<section class="aboutPoly reveal">
    <div class="aboutPoly__container wrapper">
        <div class="aboutPoly__content">
            <h2 class="aboutPoly__title">{{ Page::get('polyTitle') }}</h2>
            <p class="aboutPoly__subTitle">{{ Page::get('polyIntro') }}</p>
            <div class="aboutPoly__text wysiwyg">
                @markdown {{ Page::get('polyContent') }} @endmarkdown
            </div>
        </div>
        <figure class="aboutPoly__fig">
            <img class="aboutPoly__img" src="{{ asset('storage/' . Page::get('polyImg')) }}" alt="{{ Page::get('polyTitle') }}">
        </figure>
    </div>
</section>