<section class="latestNews latestNews--{{ $class }}">
    <div class="latestNews__container wrapper">
        @if($class === 'home')
        <div class="latestNews__header">
            <h2 class="latestNews__title">Actualités</h2>
        </div>
         @endif
         <p class="latestNews__subTitle">Les dernières actus</p>
        <div class="latestNews__content">
            @foreach($posts as $post)
                @if ($loop->first)
                    @include('parts.newsCard', [
                        'post' => $post,
                        'class' => 'big',
                    ])
                @else
                @include('parts.newsCard', [
                    'post' => $post,
                ])
                @endif
            @endforeach
        </div>
        <div class="latestNews__bottom">
            <a class="latestNews__link link link--line" href="#">Voir toutes les actus</a>
        </div>
    </div>
</section>