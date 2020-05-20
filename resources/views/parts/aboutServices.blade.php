<section class="aboutServices">
    <h2 class="sro">Nos services</h2>
    <div class="aboutServices__container wrapper">
        @foreach (Page::flexible('services', ['service' => \App\Nova\Flexible\Layouts\ServiceLayout::class]) as $service)

            <article class="aboutServices__article aboutServices__article--{{ $service->icone }}">
                <figure class="aboutServices__fig">
                    <img class="aboutServices__img" src="{{ asset('img/'. $service->icone .'.svg') }}" alt="icone de {{ $service->serviceTitle }}">
                </figure>
                <h3 class="aboutServices__title">{{ $service->serviceTitle }}</h3>
                <div class="aboutServices__text wysiwyg">
                    @markdown {{ $service->serviceContent }} @endmarkdown
                </div>
            </article>

         @endforeach
    </div>
</section>