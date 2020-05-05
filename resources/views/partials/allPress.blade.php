<section class="allPress">
    <div class="allPress__container wrapper">
        <h2 class="allPress__title">Dans la presse</h2>
        <div class="allPress__content">
            @foreach($medias as $media)
                @include('parts.pressCard')
            @endforeach
        </div>
        <div class="pag pag--blue">
            {{ $medias->links() }}
        </div>
    </div>
</section>