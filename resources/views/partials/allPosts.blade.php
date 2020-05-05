<section class="allPosts">
    <h2 class="sro">Toutes les actus</h2>
    <div class="allPosts__container wrapper">
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
    <div class="wrapper">
            {{ $posts->links() }}
    </div>
</section>