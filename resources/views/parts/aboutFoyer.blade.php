<section class="aboutFoyer reveal">
    <div class="aboutFoyer__container">
        <p class="aboutFoyer__subTitle">{{ Page::get('foyerIntro') }}</p>
        <figure class="aboutFoyer__fig">
            <img class="aboutFoyer__img" src="{{ asset('storage/' . Page::get('foyerImg')) }}" alt="{{ Page::get('foyerTitle') }}">
        </figure>
        <div class="aboutFoyer__content">
            <h2 class="aboutFoyer__title">{{ Page::get('foyerTitle') }}</h2>
            <p class="aboutFoyer__text">{{ Page::get('foyerContent') }}</p>
        </div>
    </div>
</section>