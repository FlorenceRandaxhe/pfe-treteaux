<section class="allRestos">
    <div class="allRestos__container wrapper">
        <div class="allRestos__intro">
            <h2 class="allRestos__title">{{ Page::get('restoTitle') }}</h2>
            <div class="allRestos__text wysiwyg">
                @markdown {{ Page::get('restoIntro') }} @endmarkdown
            </div>
        </div>
        <div class="allRestos__content">
            @foreach($restos as $resto)
                @include('parts.restoCard')
            @endforeach
        </div>
    </div>
    @include('parts.restoEvent')
</section>