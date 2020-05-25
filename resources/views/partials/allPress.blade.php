<section class="allPress">
    <div class="allPress__container wrapper">
        <h2 class="allPress__title">Dans la presse</h2>
        <div class="allPress__content">
            @foreach($medias as $media)
                @include('parts.pressCard', [
                    'color' => 'blue',
                    'title' => $media->title,
                    'excerpt' => $media->excerpt,
                    'source' => $media->source,
                    'date' => $media->published_at,
                    'url' => $media->url
                ])
            @endforeach
        </div>
        <div class="pag pag--blue">
            {{ $medias->links() }}
        </div>
    </div>
</section>