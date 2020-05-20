<section class="allPosts">
    <div class="wrapper">
        <h2 class="sro">Toutes les actualités</h2>
        <div class="allPosts__container">
            @foreach($posts as $post)
                @if ($loop->index === 0 || $loop->index === 1)
                    @include('parts.newsCard', [
                        'post' => $post,
                        'class' => 'big',
                    ])
                @else
                @include('parts.newsCard', [
                    'post' => $post,
                    'class' => ''
                ])
                @endif
            @endforeach
        </div>
        <div class="pag pag--green">
            {{ $posts->links() }}
        </div>
    </div>
</section>